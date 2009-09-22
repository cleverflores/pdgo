<?php
class Render_AjaxTable
{
	private $config;
	private $js=array();
	private $css=array();
	private $dg;
	private $jqGrid;
	private $id;
	private $view;
	private $viewJs;
	private $table;

	public function __construct($dg)
	{
		$this->config = Zend_Registry::get("config");
		$this->dg = $dg;
		$this->id = $dg->getId();
		$this->view = $dg->getView().".php";
		$this->viewJs = $this->config->system->views->js->path."/".$dg->getView().".js";
		$this->css[]=$this->config->system->css->jqGrid->path;
		$this->css[]=$this->config->system->css->uiTheme->path;
		$this->js[]=$this->config->system->js->jquery->path;
		$this->js[]=$this->config->system->js->jqGrid->path;
		// Doctrine Table
		$this->table = $this->dg->getTable()->getModelTable();
		$this->setjqGrid();
		$this->Display();
	}

	public function setJqGrid()
	{
		$this->jqGrid="jQuery().ready(function (){ 
								jQuery('#$this->id').jqGrid({ 
									url:'".$_SERVER["PHP_SELF"]."?render=xmlData', 
									datatype: 'xml', 
									mtype: 'GET',";
		$columns=array_keys($this->table->getColumns());
		$strColumns = "'".implode("','",$columns)."'";
		$this->jqGrid.= "colNames:[".$strColumns."],colModel : [";
		$pks = $this->table->getIdentifier();
		if(is_array($pks)){
			$sidx = $pks[0];
		}else{
			$sidx = $pks;
		}
		foreach($columns as $column){
			$this->jqGrid.= "{name:'".$column."', index:'".$column."', width:70},"; 
		}
		$this->jqGrid.= "], 
									pager: jQuery('#pager'), 
									rowNum:10, 
									rowList:[10,20,30], 
									sortname: '".$sidx."', 
									sortorder: 'desc', 
									viewrecords: true, 
									imgpath: 'themes/basic/images', 
									caption: 'PDGO primer Prototipo'  
							  }); 
							});";
	}
	
	public function Display()
	{
		$this->generateJs();
		require_once $this->config->system->views->path."/".$this->view; 
	}

	private function generateJs()
	{
		$fp = fopen($this->viewJs,"w");
		fputs($fp,$this->jqGrid);
		fclose($fp);		
	}
}
?>
