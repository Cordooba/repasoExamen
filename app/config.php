<?php  

//Para configurar necesario es utilizar la constante $_SERVER

//$_SERVER['DOCUMENT_ROOT'] => "/Applications/MampPHP/apache2/htdocs" 
//$_SERVER['HTTP_HOST'] => "localhost:8080"
//$_SERVER['REQUEST_URI'] => "/repasoExamen/"

$base_path = $_SERVER['DOCUMENT_ROOT'].'/repasoExamen/';
$admin = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'admin/';
$base_home = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$path_admin = $_SERVER['DOCUMENT_ROOT'].'/repasoExamen/admin/';

?>