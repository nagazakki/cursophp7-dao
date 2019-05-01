<?php 

spl_autoload_register(function($class_name){
	
	spl_autoload(strtolower(str_replace("\\", DIRECTORY_SEPARATOR, $class_name)));
	
	$filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";

	if(file_exists($filename)){
		require_once($filename);
	}

});

 ?>