<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-es" lang="es-es" >
<head>
<title>PDGO Test</title>
<!-- css for PDGO datagrid -->
<?php foreach($this->css as $css) { ?> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $css;?>" />
<?php } ?>

<!-- javascript for PDGO datagrid -->
<?php foreach($this->js as $js) { ?> 
<script src="<?php echo $js; ?>" type="text/javascript"></script>
<?php } ?>
<script src="<?php echo $this->viewJs;?>" type="text/javascript"></script>
</head> 

<body> 
<table id="<?php echo $this->id;?>" class="scroll" cellpadding="0" cellspacing="0">
</table> 
<div id="pager" class="scroll" style="text-align:center;"></div>
<br />
<center>echo asdasd</center> 
</body> 
</html>
