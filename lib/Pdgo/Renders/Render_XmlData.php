<?php
class Render_XmlData
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
	private $xml;

	public function __construct($dg)
	{
		$this->config = Zend_Registry::get("config");
		$this->dg = $dg;
		$this->id = $dg->getId();
		$this->xml  = "";
		$this->setXmlData();
		$this->Display();
	}

	public function setXmlData()
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

		$et = ">"; 
		if(!empty($data)){
			$this->xml = "<?xml version='1.0' encoding='utf-8'?$et\n".
			             "<rows>". 
			             "<page>".$page."</page>".
			             "<total>".$total_pages."</total>".
			             "<records>".$count."</records>"; // be sure to put text data in CDATA 
			foreach($data as $row){
		   	$this->xml.= "<row id='".$this->table->getIdentifier()."'>"; 
				foreach($row as $key=>$value){
				   if(($this->table->getDefinitionOf($key))=="string"){
						$this->xml.= "<cell><![CDATA[". $value."]]></cell>"; 
					}else{
						$this->xml.= "<cell>". $value."</cell>"; 
					}
				}
				$this->xml.= "</row>"; 
			} 
			$this->xml.= "</rows>"; 
		}
	}
	
	public function Display()
	{
		if ( stristr($_SERVER["HTTP_ACCEPT"],"application/xhtml+xml") ) { 
			header("Content-type: application/xhtml+xml;charset=utf-8"); 
		} else { 
			header("Content-type: text/xml;charset=utf-8"); 
		} 
		echo $this->xml;
	}
}
?>
