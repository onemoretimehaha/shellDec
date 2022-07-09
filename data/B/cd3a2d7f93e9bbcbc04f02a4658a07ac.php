<?php
class dayClassAction extends runtAction
{
	//每天运行一次
	public function runAction()
	{
		
		if($this->moderock('work'))m('flow')->initflow('work')->tododay(); //任务到期提醒
		
		if($this->moderock('daiban'))m('flow')->initflow('daiban')->tododay(); //流程待办处理提醒
		
		if($this->moderock('meet'))m('flow')->initflow('meet')->createmeet(); //会议生成
		
		return 'success';
	}
	
	//http://127.0.0.1/app/xinhu/task.php?m=day|runt&a=getitle
	public function getitleAction()
	{
		return TITLE;
	}
}