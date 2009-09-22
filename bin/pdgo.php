#!/usr/bin/env php
<?php
error_reporting(E_ALL|E_STRICT); // Definiendo mazximo nivel de errores
date_default_timezone_set('America/Lima');
require dirname(__FILE__).'/../conf/bootstrap.php';
Doctrine_Manager::connection($DSN);
$cli = new Doctrine_Cli($DoctrineConfig);
$cli->run($_SERVER['argv']);
?>
