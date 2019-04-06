<?php
spl_autoload_register(function($class_name){
 $filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";//DIRECTORY_SEPARATOR SOBE UMA PASTA DO MESMO DIRETORIO
if(file_exists(($filename))){
	require_once($filename);
}

});

/*spl_autoload_register(function($class_name){
	$filename = $class_name.".php";

if(file_exists(($filename))){
	require_once($filename);
}
});*/
?>
