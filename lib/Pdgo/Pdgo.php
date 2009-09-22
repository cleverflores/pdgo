<?php
// PDGO -  Power Datagrid is a RAD Library for Database Aplications
// vim syntax=on, ts=3
// Copyleft 2009  Clever Flores <clever@perulinux.com.pe>

// This library is free software; you can redistribute it and/or
// modify it under the terms of the GNU Lesser General Public (GPL)
// License as published by the Free Software Foundation; either
// version 2.1 of the License, or (at your option) any later version.

// This library is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
// Lesser General Public License for more details.

// // You should have received a copy of the GNU Lesser General Public
// License along with this library; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA

// $Id: PDGO.php,v 0.3a 2009/09/15 23:57:50 cox Exp $


Class Pdgo 
{
	private $db;
	private $tableName="";
	private $table;
	private $query="";
	private $render;	
	private $renderis;	
	private $metadata;
	private $view;
	private $id;
	private $headers=array();
	private static $_path;

	// Metodo constructor
   // db Its the Database Connection (PDGO)
	public function __construct(Doctrine_Connection $db)
	{
		$this->db = $db;
		$this->renders = array("xmlData","jsonData","formEdit","formInsert","formDelete","formSearch","formDetail");
		$this->render = "ajaxTable";
		if(isset($_GET["render"])){
			if(in_array($_GET["render"],$this->renders)){
				$this->render = $_GET["render"];
			}
		}
	}

	public function setTable($table)
	{
		$this->tableName=$table;
	}

   /**
    * Get the root path to Doctrine
    *
    * @return string
    */
   public static function getPath()
   {
       if ( ! self::$_path) {
           self::$_path = dirname(__FILE__);
       }
        return self::$_path;
   }

	public static function autoload($className)
	{
		if (class_exists($className, false) || interface_exists($className, false)) {
			return false;
		}

		$class = self::getPath(). DIRECTORY_SEPARATOR . $className . '.php';

		if (file_exists($class)) {
			require $class;
			return true;
		}
		return false;
	}

	public function setModelTable()
	{	
		$this->table = new ModelTable($this->db);
		if(!empty($this->tableName)){
			$this->table->setMetaDataTable($this->tableName);
		}
	
		if(!empty($this->query)){
			$this->table->setMetaDataQuery($this->query);
		}
	}

	public function getTable()
	{
		return $this->table;
	}

	public function setId($id)
	{
		$this->id = $id;
	}
 
	public function setView($view)
	{
		$this->view=$view;
	}

	public function setQuery($query)
	{
		$this->query=$query;
	}
	
	public function getId()
	{
		return $this->id;
	}
 
	public function getView()
	{
		return $this->view;
	}

	public function getQuery(){
		return $this->query;
	}
 
	public function setRender($render)
	{
		$this->render = $render;
	}		

	public function getRender()
	{
		return $this->render;
	}	

	public function Display(){
		$this->setModelTable();
		$render = new Render($this);
		$render->Factory();
	}

	public static function dump($var,$exit=false)
	{
		echo "<pre>";
		print_r($var);
		echo "</pre>";
		if($exit){
			exit();
		}
	}			
}
?>
