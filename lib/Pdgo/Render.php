<?php

class Render
{
	private $dg;
	public function __construct($dg)
	{
		$this->dg=$dg;
	}

	public function Factory()
	{
		$render = ucfirst($this->dg->getRender());
		$dir = dirname(__FILE__);
      //echo ($dir.'/Renders/Render_' . $render . '.php');
      if (is_file($dir.'/Renders/Render_' . $render . '.php')){
                           require_once 'Renders/Render_' . $render . '.php';
                           $classname = 'Render_' . $render;
                           return new $classname($this->dg);
     	} else {
     		die("Render ".$render." No encontrado");
		}
	}
}
