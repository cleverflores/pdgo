jQuery().ready(function (){ 
								jQuery('#list1').jqGrid({ 
									url:'/pdgo/test.php?render=xmlData', 
									datatype: 'xml', 
									mtype: 'GET',colNames:['nid','vid','type','title','uid','status','created','changed','comment','promote','moderate','sticky'],colModel : [{name:'nid', index:'nid', width:70},{name:'vid', index:'vid', width:70},{name:'type', index:'type', width:70},{name:'title', index:'title', width:70},{name:'uid', index:'uid', width:70},{name:'status', index:'status', width:70},{name:'created', index:'created', width:70},{name:'changed', index:'changed', width:70},{name:'comment', index:'comment', width:70},{name:'promote', index:'promote', width:70},{name:'moderate', index:'moderate', width:70},{name:'sticky', index:'sticky', width:70},], 
									pager: jQuery('#pager'), 
									rowNum:10, 
									rowList:[10,20,30], 
									sortname: 'nid', 
									sortorder: 'desc', 
									viewrecords: true, 
									imgpath: 'themes/basic/images', 
									caption: 'PDGO primer Prototipo'  
							  }); 
							});