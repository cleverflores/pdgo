<?php
error_reporting(E_ALL|E_STRICT); // Definiendo mazximo nivel de errores
date_default_timezone_set('America/Lima');

define( "ROOT_DIR" , dirname(dirname(__FILE__)));
define( "ROOT_DIR_PDGO" , ROOT_DIR."/lib/Pdgo");
$virtualDirDG = "/pdgo";
$configDir    = dirname(__FILE__);

// Define the Include Path
set_include_path(
'.'.PATH_SEPARATOR
.ROOT_DIR.PATH_SEPARATOR
.ROOT_DIR_PDGO.PATH_SEPARATOR
.ROOT_DIR.'/lib/'.PATH_SEPARATOR
.ROOT_DIR.'/lib/vendor/'.PATH_SEPARATOR
.ROOT_DIR.'/model'.PATH_SEPARATOR
.get_include_path());

require_once "lib/vendor/Zend/Loader.php";
require_once "lib/vendor/Doctrine.php";
require_once "lib/Pdgo/Pdgo.php";

// Invocando metodos estaticos de autoloader
spl_autoload_register(array('Doctrine', 'autoload'));
spl_autoload_register(array('Pdgo', 'autoload'));
Zend_Loader_Autoloader::getInstance();

// load configuration
$config = new Zend_Config_Ini(ROOT_DIR.'/conf/config.ini');

// El registry permite el NO USO de variables globales
$registry = Zend_Registry::getInstance();
$registry->set('config', $config);

require_once "models/Model.php";
spl_autoload_register(array('Model', 'autoload'));

$DSN = 'mysql://'.$config->db->username.':'
        .$config->db->password.'@'
        .$config->db->host.'/'
        .$config->db->dbname;

$registry->set('DSN', $DSN);
$manager = Doctrine_Manager::getInstance();
$manager->setAttribute(Doctrine::ATTR_VALIDATE, Doctrine::VALIDATE_ALL);

// Configure Doctrine Options
// Normally these are arguments to the cli tasks but if they are set here the arguments will be auto-filled
$DoctrineConfig = array('data_fixtures_path'  =>  ROOT_DIR."/".$config->system->data_fixtures_path,
                  'models_path'         =>  ROOT_DIR."/".$config->system->models_path."/".$config->db->dbname,
                  'migrations_path'     =>  ROOT_DIR."/".$config->system->migrations_path,
                  'sql_path'            =>  ROOT_DIR."/".$config->system->sql_path,
                  'yaml_schema_path'    =>  ROOT_DIR."/".$config->system->yaml_schema_path."/".$config->db->dbname,
                  'table_prefix' => $config->db->table_prefix
);

$registry->set('DoctrineConfig', $DoctrineConfig);
