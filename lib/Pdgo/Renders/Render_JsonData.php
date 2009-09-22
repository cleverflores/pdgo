<?php
class Render_JsonData
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
	private $json;

	public function __construct($dg)
	{
		$this->config = Zend_Registry::get("config");
		$this->dg = $dg;
		$this->id = $dg->getId();
		$this->json  = new StdClass;
		$this->setJsonData();
		$this->Display();
	}

	public function setJsonData()
	{
		$page=0;
		$limit=0;
		$sidx=1;
		
		if(isset($_GET["page"])){
			$page = $_GET['page']; // get the requested page 
		}
		
		if(isset($_GET["rows"])){
			$limit = $_GET['rows']; // get how many rows we want to have into the grid 
		}

		if(isset($_GET["sidx"])){
			$sidx = $_GET['sidx']; // get index row - i.e. user click to sort 
		}

		if(isset($_GET["sord"])){
			$sord = $_GET['sord']; // get the direction 
		}
		
		// Doctrine Table
		$this->table = $this->dg->getTable()->getModelTable();

		$count = $this->table->count();
		if( $count >0 ) { 
			$total_pages = ceil($count/$limit); 
		}else { 
			$total_pages = 0; 
		} 

		if ($page > $total_pages){
			$page=$total_pages;
		} 
		
		$start = $limit*$page - $limit; // do not put 
		// Query for Paginate
		$q = Doctrine_Query::create()
   			 ->select('a.*')
    			 ->from($this->table->getClassnameToReturn().' a')
             ->orderby( 'a.'.$sidx.' '.$sord );
		$pager = new Doctrine_Pager($q, $page, $limit);
		$rs = $pager->execute();
		$data = $rs->toArray();

		if(!empty($data)){
			$this->json->page		= $page;
			$this->json->total	= $total_pages;
			$this->json->records	= $count;
		
			foreach($data as $i=>$row){
			   $this->json->rows[$i]["id"]=$row[$this->table->getIdentifier]; 
			   $this->json->rows[$i]["cell"]=array(); 
				foreach($row as $key=>$value){
						$this->json->rows[$i]["cell"][]=$value; 
				}
			} 
		}
	}
	
	public function Display()
	{
		echo json_encode($this->json);
	}
}
?>
