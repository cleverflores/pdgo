<?php
require_once "conf/bootstrap.php";
$db = Doctrine_Manager::connection($DSN);
$dg = new Pdgo($db);
$dg->setTable("node");
$dg->setView("test");
$dg->setId("list1");
$dg->Display();
?>
