<?php return [
  'installer' => [
    'app_config_section' => 'Application Configuration',
    'license_section' => 'License Key',
    'dependencies_section' => 'Installing Dependencies',
    'demo_section' => 'Demo Content',
    'locale_select_label' => 'Select Language',
    'locale_select_error' => 'Language code :code is invalid, please try again',
    'app_url_label' => 'Application URL',
    'backend_uri_label' => 'Backend URI',
    'backend_uri_comment' => 'To secure your application, use a custom address for accessing the admin panel.',
    'license_key_label' => 'License Key',
    'license_key_comment' => 'Enter a valid License Key to proceed.',
    'license_thanks_comment' => 'Thanks for being a customer of October CMS!',
    'license_expired_comment' => 'License is unpaid or has expired. Please visit octobercms.com to obtain a license.',
    'too_many_failures_label' => 'Too many failed attempts',
    'non_interactive_label' => 'Non Interactive Mode Detected',
    'non_interactive_comment' => 'If you see this error immediately, use these non-interactive commands instead.',
    'install_failed_label' => 'Installation Failed',
    'install_failed_comment' => 'Please try running these commands manually.',
    'database_engine_label' => 'Database Engine',
    'database_host_label' => 'Database Host',
    'database_host_comment' => 'Hostname for the database connection.',
    'database_port_label' => 'Database Port',
    'database_port_comment' => '(Optional) A port for the connection.',
    'database_name_label' => 'Database Name',
    'database_name_comment' => 'Specify the name of the database to use.',
    'database_login_label' => 'Database Login',
    'database_login_comment' => 'User with create database privileges.',
    'database_pass_label' => 'Database Password',
    'database_pass_comment' => 'Password for the specified user.',
    'database_path_label' => 'Database Path',
    'database_path_comment' => 'For file-based storage, enter a path relative to the application root directory.',
    'migrate_database_comment' => 'Please migrate the database with the following command',
    'visit_backend_comment' => 'Then, open the administration area at this URL',
    'open_configurator_comment' => 'Open this application in your browser',
    'install_demo_label' => 'Install the demonstration theme and content? (Recommended)',
  ],
  'app' => [
    'name' => 'October CMS',
    'tagline' => 'Getting Back to Basics',
  ],
  'locale' => [
    'ar' => 'العربية',
    'be' => 'Беларуская',
    'bg' => 'Български',
    'ca' => 'Català',
    'cs' => 'Čeština',
    'da' => 'Dansk',
    'de' => 'Deutsch',
    'el' => 'Ελληνικά',
    'en' => 'English (United States)',
    'en-au' => 'English (Australia)',
    'en-ca' => 'English (Canada)',
    'en-gb' => 'English (United Kingdom)',
    'et' => 'Eesti',
    'es' => 'Español',
    'es-ar' => 'Español (Argentina)',
    'fa' => 'فارسی',
    'fi' => 'Suomi',
    'fr' => 'Français',
    'fr-ca' => 'Français (Canada)',
    'hu' => 'Magyar',
    'id' => 'Bahasa Indonesia',
    'it' => 'Italiano',
    'ja' => '日本語',
    'kr' => '한국어',
    'lt' => 'Lietuvių',
    'lv' => 'Latviešu',
    'nb-no' => 'Norsk (Bokmål)',
    'nl' => 'Nederlands',
    'pl' => 'Polski',
    'pt-br' => 'Português (Brasil)',
    'pt-pt' => 'Português (Portugal)',
    'ro' => 'Română',
    'ru' => 'Русский',
    'sk' => 'Slovenský',
    'sl' => 'Slovenščina',
    'sv' => 'Svenska',
    'th' => 'ไทย',
    'tr' => 'Türkçe',
    'uk' => 'Українська мова',
    'vn' => 'Tiếng việt',
    'zh-cn' => '简体中文',
    'zh-tw' => '繁體中文',
  ],
  'directory' => [
    'create_fail' => 'Cannot create directory: :name',
  ],
  'file' => [
    'create_fail' => 'Cannot create file: :name',
  ],
  'combiner' => [
    'not_found' => 'The combiner file \':name\' is not found.',
  ],
  'resizer' => [
    'not_found' => 'The resizer file \':name\' is not found.',
  ],
  'system' => [
    'name' => 'System',
    'menu_label' => 'System',
    'categories' => [
      'cms' => 'CMS',
      'misc' => 'Misc',
      'logs' => 'Logs',
      'mail' => 'Mail',
      'shop' => 'Shop',
      'team' => 'Team',
      'users' => 'Users',
      'system' => 'System',
      'social' => 'Social',
      'backend' => 'Backend',
      'events' => 'Events',
      'customers' => 'Customers',
      'my_settings' => 'My Settings',
      'notifications' => 'Notifications',
    ],
  ],
  'theme' => [
    'label' => 'Theme',
    'unnamed' => 'Unnamed theme',
    'name' => [
      'label' => 'Theme Name',
      'help' => 'Name the theme by its unique code. For example, RainLab.Vanilla',
    ],
  ],
  'themes' => [
    'install' => 'Install Themes',
    'search' => 'search themes to install...',
    'installed' => 'Installed themes',
    'no_themes' => 'There are no themes installed from the marketplace.',
    'recommended' => 'Recommended',
    'remove_confirm' => 'Are you sure you want to remove this theme?',
  ],
  'plugin' => [
    'label' => 'Plugin',
    'unnamed' => 'Unnamed plugin',
    'name' => [
      'label' => 'Plugin Name',
      'help' => 'Name the plugin by its unique code. For example, RainLab.Blog',
    ],
    'by_author' => 'By :name',
  ],
  'plugins' => [
    'install' => 'Install Plugins',
    'install_products' => 'Install Products',
    'search' => 'search plugins to install...',
    'installed' => 'Installed Plugins',
    'no_plugins' => 'There are no plugins installed from the marketplace.',
    'recommended' => 'Recommended',
    'plugin_label' => 'Plugin',
    'unknown_plugin' => 'Plugin has been removed from the file system.',
    'select_label' => 'Select Action...',
    'bulk_actions_label' => 'Bulk actions',
    'check_yes' => 'Yes',
    'check_no' => 'No',
    'unfrozen' => 'Updates Enabled',
    'enabled' => 'Enabled',
    'freeze' => 'disable updates for',
    'unfreeze' => 'enable updates for',
    'enable' => 'enable',
    'disable' => 'disable',
    'refresh' => 'reset',
    'remove' => 'Remove',
    'freeze_label' => 'Disable Updates',
    'unfreeze_label' => 'Enable Updates',
    'enable_label' => 'Enable Plugins',
    'disable_label' => 'Disable Plugins',
    'refresh_label' => 'Reset Plugin Data',
    'action_confirm' => 'Are you sure you want to :action these plugins?',
    'freeze_success' => 'Successfully disabled updates for the selected plugins.',
    'unfreeze_success' => 'Successfully enabled updates for the selected plugins.',
    'enable_success' => 'Successfully enabled the selected plugins.',
    'disable_success' => 'Successfully disabled the selected plugins.',
    'refresh_confirm' => 'Are you sure you want to reset the selected plugins? This will reset each plugin\'s data, restoring it to the initial install state.',
    'refresh_success' => 'Successfully reset the selected plugins.',
    'remove_confirm' => 'Are you sure you want to remove the selected plugins? This will remove all associated data as well.',
    'remove_success' => 'Successfully removed the selected plugins.',
  ],
  'project' => [
    'attach' => 'Attach Project',
    'detach' => 'Detach Project',
    'none' => 'None',
    'id' => [
      'label' => 'Project ID',
      'help' => 'How to find your Project ID',
      'missing' => 'Please specify a Project ID to use.',
    ],
    'detach_confirm' => 'Are you sure you want to detach this project?',
    'unbind_success' => 'Project has been detached.',
  ],
  'settings' => [
    'menu_label' => 'Settings',
    'home_label' => 'Show all Settings',
    'not_found' => 'Unable to find the specified settings.',
    'missing_model' => 'The settings page is missing a Model definition.',
    'update_success' => ':name settings updated',
    'return' => 'Return to System Settings',
    'search' => 'Search',
    'find_setting' => 'Find a Setting...',
  ],
  'mail' => [
    'log_file' => 'Log file',
    'menu_label' => 'Mail Configuration',
    'menu_description' => 'Manage email configuration.',
    'general' => 'General',
    'method' => 'Mail method',
    'sender_name' => 'Sender name',
    'sender_email' => 'Sender email',
    'php_mail' => 'PHP mail',
    'smtp' => 'SMTP',
    'smtp_address' => 'SMTP address',
    'smtp_authorization' => 'SMTP authorization required',
    'smtp_authorization_comment' => 'Use this checkbox if your SMTP server requires authorization.',
    'smtp_username' => 'Username',
    'smtp_password' => 'Password',
    'smtp_port' => 'SMTP port',
    'smtp_ssl' => 'SSL connection required',
    'smtp_encryption' => 'SMTP encryption protocol',
    'smtp_encryption_none' => 'No encryption',
    'smtp_encryption_tls' => 'TLS',
    'smtp_encryption_ssl' => 'SSL',
    'sendmail' => 'Sendmail',
    'sendmail_path' => 'Sendmail path',
    'sendmail_path_comment' => 'Please specify the path of the sendmail program.',
    'mailgun' => 'Mailgun',
    'mailgun_domain' => 'Mailgun domain',
    'mailgun_domain_comment' => 'Please specify the Mailgun domain name.',
    'mailgun_secret' => 'Mailgun secret',
    'mailgun_secret_comment' => 'Enter your Mailgun API key.',
    'mandrill' => 'Mandrill',
    'mandrill_secret' => 'Mandrill secret',
    'mandrill_secret_comment' => 'Enter your Mandrill API key.',
    'ses' => 'SES',
    'ses_key' => 'SES key',
    'ses_key_comment' => 'Enter your SES API key',
    'ses_secret' => 'SES secret',
    'ses_secret_comment' => 'Enter your SES API secret key',
    'ses_region' => 'SES region',
    'ses_region_comment' => 'Enter your SES region (e.g. us-east-1)',
    'postmark' => 'Postmark',
    'postmark_token' => 'Postmark Token',
    'postmark_token_comment' => 'Enter your Postmark API secret key',
    'drivers_hint_header' => 'Drivers not installed',
    'drivers_hint_content' => 'This mail method requires the plugin ":plugin" be installed before you can send mail.',
  ],
  'mail_templates' => [
    'menu_label' => 'Mail Templates',
    'menu_description' => 'Modify the mail templates that are sent to users and administrators, manage email layouts.',
    'new_template' => 'New Template',
    'new_layout' => 'New Layout',
    'new_partial' => 'New Partial',
    'template' => 'Template',
    'templates' => 'Templates',
    'partial' => 'Partial',
    'partials' => 'Partials',
    'menu_layouts_label' => 'Mail Layouts',
    'menu_partials_label' => 'Mail Partials',
    'layout' => 'Layout',
    'layouts' => 'Layouts',
    'no_layout' => '-- No layout --',
    'name' => 'Name',
    'name_comment' => 'Unique name used to refer to this template',
    'code' => 'Code',
    'code_comment' => 'Unique code used to refer to this template',
    'subject' => 'Subject',
    'subject_comment' => 'Email message subject',
    'description' => 'Description',
    'content_html' => 'HTML',
    'content_css' => 'CSS',
    'content_text' => 'Plaintext',
    'test_send' => 'Send Test Message',
    'test_success' => 'Test message sent.',
    'test_confirm' => 'Send test message to :email. Continue?',
    'creating' => 'Creating Template...',
    'creating_layout' => 'Creating Layout...',
    'saving' => 'Saving Template...',
    'saving_layout' => 'Saving Layout...',
    'delete_confirm' => 'Delete this template?',
    'delete_layout_confirm' => 'Delete this layout?',
    'deleting' => 'Deleting Template...',
    'deleting_layout' => 'Deleting Layout...',
    'sending' => 'Sending test message...',
    'return' => 'Return to Template List',
    'options' => 'Options',
    'disable_auto_inline_css' => 'Disable automatic inline CSS',
  ],
  'mail_brand' => [
    'menu_label' => 'Mail Branding',
    'menu_description' => 'Modify the colors and appearance of mail templates.',
    'page_title' => 'Customize Mail Appearance',
    'sample_template' => [
      'heading' => 'Heading',
      'paragraph' => 'This is a paragraph filled with Lorem Ipsum and a link. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
      'table' => [
        'item' => 'Item',
        'description' => 'Description',
        'price' => 'Price',
        'centered' => 'Centered',
        'right_aligned' => 'Right-Aligned',
      ],
      'buttons' => [
        'primary' => 'Primary button',
        'positive' => 'Positive button',
        'negative' => 'Negative button',
      ],
      'panel' => 'How awesome is this panel?',
      'more' => 'Some more text',
      'promotion' => 'Coupon code: OCTOBER',
      'subcopy' => 'This is the subcopy of the email',
      'thanks' => 'Thanks',
    ],
    'fields' => [
      '_section_background' => 'Background',
      'body_bg' => 'Body background',
      'content_bg' => 'Content background',
      'content_inner_bg' => 'Inner content background',
      '_section_buttons' => 'Buttons',
      'button_text_color' => 'Button text color',
      'button_primary_bg' => 'Primary button background',
      'button_positive_bg' => 'Positive button background',
      'button_negative_bg' => 'Negative button background',
      '_section_type' => 'Typography',
      'header_color' => 'Header color',
      'heading_color' => 'Headings color',
      'text_color' => 'Text color',
      'link_color' => 'Link color',
      'footer_color' => 'Footer color',
      '_section_borders' => 'Borders',
      'body_border_color' => 'Body border color',
      'subcopy_border_color' => 'Subcopy border color',
      'table_border_color' => 'Table border color',
      '_section_components' => 'Components',
      'panel_bg' => 'Panel background',
      'promotion_bg' => 'Promotion background',
      'promotion_border_color' => 'Promotion border color',
    ],
  ],
  'install' => [
    'project_label' => 'Attach to Project',
    'plugin_label' => 'Install Plugin',
    'theme_label' => 'Install Theme',
    'missing_plugin_name' => 'Please specify a Plugin name to install.',
    'missing_theme_name' => 'Please specify a Theme name to install.',
    'install_completing' => 'Finishing installation process',
    'install_success' => 'Plugin installed successfully',
  ],
  'updates' => [
    'title' => 'Manage Updates',
    'name' => 'Software Update',
    'return_link' => 'Return to System Updates',
    'retry_label' => 'Try Again',
    'plugin_name' => 'Name',
    'plugin_code' => 'Code',
    'plugin_description' => 'Description',
    'plugin_version' => 'Version',
    'plugin_latest' => 'Latest',
    'plugin_author' => 'Author',
    'plugin_not_found' => 'Plugin not found',
    'plugin_version_not_found' => 'Plugin version not found',
    'theme_not_found' => 'Theme not found',
    'core_build' => 'Build :build',
    'core_build_help' => 'Latest build is available.',
    'core_downloading' => 'Downloading application files',
    'core_extracting' => 'Unpacking application files',
    'core_set_build' => 'Setting build number',
    'changelog' => 'Changelog',
    'changelog_view_details' => 'View Details',
    'themes' => 'Themes',
    'plugin_downloading' => 'Downloading plugin: :name',
    'plugin_removing' => 'Removing plugin: :name',
    'plugin_extracting' => 'Unpacking plugin: :name',
    'plugin_version_none' => 'New Plugin',
    'plugin_current_version' => 'Current version',
    'theme_new_install' => 'New theme installation.',
    'theme_downloading' => 'Downloading theme: :name',
    'theme_removing' => 'Removing theme: :name',
    'theme_extracting' => 'Unpacking theme: :name',
    'update_label' => 'Update Software',
    'update_completing' => 'Finishing update process',
    'update_loading' => 'Loading available updates...',
    'update_success' => 'Update process complete',
    'update_failed_label' => 'Update Failed',
    'force_label' => 'Force Update',
    'found' => [
      'label' => 'Found New Updates!',
      'help' => 'Click Update Software to begin the update process.',
    ],
    'none' => [
      'label' => 'No Updates',
      'help' => 'No new updates were found.',
    ],
    'important_action' => [
      'empty' => 'Select Action',
      'confirm' => 'Confirm Update',
      'skip' => 'Skip This Update (Once Only)',
      'ignore' => 'Skip This Update (Always)',
    ],
    'important_action_required' => 'Action Required',
    'important_view_guide' => 'View Upgrade Guide',
    'important_view_release_notes' => 'View Release Notes',
    'important_alert_text' => 'Some updates need your attention.',
    'details_title_plugin' => 'Plugin Details',
    'details_title_theme' => 'Theme Details',
    'details_view_homepage' => 'View Homepage',
    'details_readme' => 'Documentation',
    'details_readme_missing' => 'There is no documentation provided.',
    'details_changelog' => 'Changelog',
    'details_changelog_missing' => 'There is no changelog provided.',
    'details_upgrades' => 'Upgrade Guide',
    'details_upgrades_missing' => 'There are no upgrade instructions provided.',
    'details_licence' => 'Licence',
    'details_view_licence' => 'View Licence',
    'details_licence_missing' => 'There is no licence provided.',
    'details_current_version' => 'Current version',
    'details_author' => 'Author',
  ],
  'market' => [
    'menu_label' => 'Marketplace',
    'menu_description' => 'Manage and install plugins and themes.',
    'content_loading' => 'Loading...',
  ],
  'server' => [
    'connect_error' => 'Error connecting to the server.',
    'response_not_found' => 'The update server could not be found.',
    'response_invalid' => 'Invalid response from the server.',
    'response_empty' => 'Empty response from the server.',
    'file_error' => 'Server failed to deliver the package.',
    'file_corrupt' => 'File from server is corrupt.',
  ],
  'behavior' => [
    'missing_property' => 'Class :class must define property $:property used by :behavior behavior.',
  ],
  'config' => [
    'not_found' => 'Unable to find configuration file :file defined for :location.',
    'required' => 'Configuration used in :location must supply a value \':property\'.',
  ],
  'zip' => [
    'extract_failed' => 'Unable to extract core file \':file\'.',
  ],
  'event_log' => [
    'hint' => 'This log displays a list of potential errors that occur in the application, such as exceptions and debugging information.',
    'menu_label' => 'Event Log',
    'menu_description' => 'View system log messages with their recorded time and details.',
    'empty_link' => 'Empty Event Log',
    'empty_loading' => 'Emptying Event Log...',
    'empty_success' => 'Event log emptied',
    'return_link' => 'Return to Event Log',
    'id' => 'ID',
    'id_label' => 'Event ID',
    'created_at' => 'Date & Time',
    'message' => 'Message',
    'level' => 'Level',
    'preview_title' => 'Event',
  ],
  'request_log' => [
    'hint' => 'This log displays a list of browser requests that may require attention. For example, if a visitor opens a CMS page that cannot be found, a record is created with the status code 404.',
    'menu_label' => 'Request Log',
    'menu_description' => 'View bad or redirected requests, such as Page not found (404).',
    'empty_link' => 'Empty Request Log',
    'empty_loading' => 'Emptying Request Log...',
    'empty_success' => 'Request log emptied',
    'return_link' => 'Return to Request Log',
    'id' => 'ID',
    'id_label' => 'Log ID',
    'count' => 'Counter',
    'referer' => 'Referers',
    'url' => 'URL',
    'status_code' => 'Status',
    'preview_title' => 'Request',
  ],
  'permissions' => [
    'name' => 'System',
    'manage_system_settings' => 'Manage system settings',
    'manage_software_updates' => 'Manage software updates',
    'access_logs' => 'View System Logs',
    'manage_mail_templates' => 'Manage Mail Templates',
    'manage_mail_settings' => 'Manage Mail Settings',
    'manage_other_administrators' => 'Manage other administrators',
    'manage_preferences' => 'Manage Backend Preferences',
    'manage_editor' => 'Manage Code Editor Preferences',
    'view_the_dashboard' => 'View the dashboard',
    'manage_default_dashboard' => 'Manage the default dashboard',
    'manage_branding' => 'Customize Backend Styles',
  ],
  'log' => [
    'menu_label' => 'Log Settings',
    'menu_description' => 'Specify which areas should use logging.',
    'default_tab' => 'Logging',
    'log_events' => 'Log System Events',
    'log_events_comment' => 'Store system events in the database in addition to the file-based log.',
    'log_requests' => 'Log Bad Requests',
    'log_requests_comment' => 'Browser requests that may require attention, such as 404 errors.',
    'log_theme' => 'Log Theme Changes',
    'log_theme_comment' => 'When a change is made to the theme using the backend.',
  ],
  'media' => [
    'invalid_path' => 'Invalid file path specified: \':path\'.',
    'folder_size_items' => 'item(s)',
  ],
  'page' => [
    'not_found' => [
      'label' => 'Page Not Found',
      'help' => 'The requested page cannot be found.',
    ],
    'custom_error' => [
      'label' => 'Page Error',
      'help' => 'We\'re sorry, but something went wrong and the page cannot be displayed.',
    ],
    'invalid_token' => [
      'label' => 'Invalid security token',
    ],
    'maintenance' => [
      'label' => 'We\'ll Be Right Back!',
      'help' => 'We\'re currently down for maintenance, check back soon!',
      'message' => 'Message:',
      'available_at' => 'Try again after:',
    ],
  ],
  'pagination' => [
    'previous' => 'Previous',
    'next' => 'Next',
  ],
];
