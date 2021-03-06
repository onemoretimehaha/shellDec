<?php if(!defined('HOST'))die('not access');?>
<script >
$(document).ready(function(){
	{params}
	var atype = params.atype;
	var a = $('#veiw_{rand}').bootstable({
		tablename:'im_tonghua',celleditor:false,sort:'id',dir:'desc',checked:true,modedir:'{mode}:{dir}',
		storeafteraction:'storeafter_tonghuashow',params:{'atype':atype},storebeforeaction:'storebefore_tonghuashow',fanye:true,
		columns:[{
			text:'发送人',dataIndex:'faid'
		},{
			text:'接收人',dataIndex:'joinids'
		},{
			text:'通话类型',dataIndex:'type',sortable:true
		},{
			text:'发起时间',dataIndex:'adddt'
		},{
			text:'结束时间',dataIndex:'enddt'
		},{
			text:'状态',dataIndex:'state',sortable:true
		},{
			text:'备注',dataIndex:'remark',align:'left'
		},{
			text:'ID',dataIndex:'id',sortable:true
		}]
	});
	
	var c = {
		del:function(){
			a.del({url:js.getajaxurl('delrecord_tonghua','{mode}','{dir}',{'atype':atype}),checked:true});
		},
		daochu:function(){
			a.exceldown();
		},
		search:function(){
			a.setparams({
				dt1:get('dt1_{rand}').value,
				dt2:get('dt2_{rand}').value,
				receid:get('receid{rand}').value
			},true);
		},
		removes:function(){
			get('recename{rand}').value='';
			get('receid{rand}').value='';
		},
		getdists:function(o1, lx){
			var cans = {
				nameobj:get('recename{rand}'),
				idobj:get('receid{rand}'),
				type:'usercheck',
				title:'选择发送人/接收人'
			};
			js.getuser(cans);
		}
	};
	js.initbtn(c);
});
</script>

<div>
	<table width="100%">
	<tr>
		<td nowrap>发起日期从&nbsp;</td>
		<td nowrap>
			<input style="width:110px" onclick="js.changedate(this)" readonly class="form-control datesss" id="dt1_{rand}" >
		</td>
		<td nowrap>&nbsp;至&nbsp;</td>
		<td nowrap>
			<input style="width:110px" onclick="js.changedate(this)" readonly class="form-control datesss" id="dt2_{rand}" >
		</td>
	
		<td style="padding-left:10px">
			<div style="width:230px" class="input-group">
				<input readonly class="form-control" placeholder="发起人/接收人" id="recename{rand}" >
				<input type="hidden" id="receid{rand}" >
				<span class="input-group-btn">
					<button class="btn btn-default" click="removes" type="button"><i class="icon-remove"></i></button>
					<button class="btn btn-default" click="getdists,1" type="button"><i class="icon-search"></i></button>
				</span>
			</div>
		</td>
		<td style="padding-left:10px">
			<button class="btn btn-default" click="search" type="button">搜索</button></button>
		</td>
		<td  width="90%" style="padding-left:10px"></td>
	
		<td align="right" id="tdright_{rand}" nowrap>
			<button class="btn btn-default" click="daochu,1" type="button">导出</button> &nbsp;
			<button class="btn btn-danger" click="del" type="button"><i class="icon-trash"></i> 删除</button>
		</td>
	</tr>
	</table>

</div>
<div class="blank10"></div>
<div id="veiw_{rand}"></div>