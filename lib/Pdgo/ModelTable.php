<?php
class ModelTable
{
	private $db;
	private $tableName="";
	private $modelTable;	

	public function __construct(Doctrine_Connection $db)
	{
		$this->db=$db;
		$this->DoctrineConfig = Zend_Registry::get("DoctrineConfig");		
	}

	public function setMetaDataTable($tableName)
	{
		$this->tableName = $tableName;

		if(!is_dir($this->DoctrineConfig["models_path"])){
			$this->createModel();
		}

		Doctrine::loadModel($this->DoctrineConfig["models_path"]);
		$this->modelTable     = Doctrine::getTable($this->getOrmTable());
	}

	public function getOrmTable()
	{
		return $this->StringtoCamelCase($this->tableName,true);
	}

	public function getModelTable()
	{
		return $this->modelTable;
	}

	public function setMetaDataQuery($query)
	{
		
	}

	public function createModel()
	{
		Doctrine::generateModelsFromDb($this->DoctrineConfig["models_path"], array('doctrine'), array('generateTableClasses' => true));	
	}

	/**
   * Translates a camel case string into a string with underscores (e.g. firstName -&gt; first_name)
   * @param    string   $str    String in camel case format
   * @return    string            $str Translated into underscore format
   */
	function camelCasetoString($str) {
		$str[0] = strtolower($str[0]);
		$func = create_function('$c', 'return "_" . strtolower($c[1]);');
		return preg_replace_callback('/([A-Z])/', $func, $str);
	}
 
	/**
	 * Translates a string with underscores into camel case (e.g. first_name -&gt; firstName)
	 * @param    string   $str                     String in underscore format
	 * @param    bool     $capitalise_first_char   If true, capitalise the first char in $str
	 * @return   string                              $str translated into camel caps
	*/
	function StringtoCamelCase($str, $capitalise_first_char = false) {
		if($capitalise_first_char) {
			$str[0] = strtoupper($str[0]);
		}
		$func = create_function('$c', 'return strtoupper($c[1]);');
		return preg_replace_callback('/_([a-z])/', $func, $str);
	}
}
