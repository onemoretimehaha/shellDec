<?php

declare(strict_types=1);

namespace PhpMyAdmin\Tests\Controllers\Table;

use PhpMyAdmin\Controllers\Table\TriggersController;
use PhpMyAdmin\Template;
use PhpMyAdmin\Tests\AbstractTestCase;
use PhpMyAdmin\Tests\Stubs\ResponseRenderer;

/**
 * @covers \PhpMyAdmin\Controllers\Table\TriggersController
 */
class TriggersControllerTest extends AbstractTestCase
{
    public function testTriggersController(): void
    {
        $GLOBALS['server'] = 2;
        $GLOBALS['db'] = 'test_db';
        $GLOBALS['table'] = 'test_table';
        $GLOBALS['text_dir'] = 'ltr';
        $GLOBALS['PMA_PHP_SELF'] = 'index.php';
        $GLOBALS['cfg']['Server']['DisableIS'] = true;

        $this->dummyDbi->addResult('SHOW TABLES FROM `test_db`;', [['test_table']], ['Tables_in_test_db']);
        $this->dummyDbi->addSelectDb('test_db');
        $this->dummyDbi->addResult('SHOW TABLES LIKE \'test_table\';', [['test_table']]);
        $this->dummyDbi->addResult(
            'SELECT `PRIVILEGE_TYPE` FROM `INFORMATION_SCHEMA`.`SCHEMA_PRIVILEGES`'
            . ' WHERE GRANTEE=\'\'\'pma_test\'\'@\'\'localhost\'\'\' AND PRIVILEGE_TYPE=\'TRIGGER\''
            . ' AND \'test_db\' LIKE `TABLE_SCHEMA`',
            [['TRIGGER']]
        );

        $template = new Template();
        (new TriggersController(new ResponseRenderer(), $template, $this->dbi))();

        $items = [
            [
                'name' => 'test_trigger',
                'table' => 'test_table',
                'action_timing' => 'AFTER',
                'event_manipulation' => 'INSERT',
                'definition' => 'BEGIN END',
                'definer' => 'definer@localhost',
                'full_trigger_name' => '`test_trigger`',
                'drop' => 'DROP TRIGGER IF EXISTS `test_trigger`',
                'create' => 'CREATE TRIGGER `test_trigger` AFTER INSERT ON `test_table`' . "\n"
                    . ' FOR EACH ROW BEGIN END' . "\n" . '//' . "\n",
            ],
        ];
        $rows = $template->render('database/triggers/row', [
            'db' => $GLOBALS['db'],
            'table' => $GLOBALS['table'],
            'trigger' => $items[0],
            'has_drop_privilege' => true,
            'has_edit_privilege' => true,
            'row_class' => '',
        ]);

        $this->expectOutputString($template->render('database/triggers/list', [
            'db' => $GLOBALS['db'],
            'table' => $GLOBALS['table'],
            'items' => $items,
            'rows' => $rows,
            'has_privilege' => true,
        ]));
    }
}
