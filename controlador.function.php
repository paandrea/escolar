<?php
session_start();

if(isset($_COOKIE["activo"]) && isset($_SESSION['username'])){
	setcookie("activo",1, time() + 3600);
	
}
else{
	http_response_code(403);
			header('location:vista.login.php?err=2');
}
require'conn/connection.php';

function permisos($permisos){
	if(!in_array($_SESSION['rol'], $permisos)){
	
		http_response_code(403);
			header('location:vista.login.php?err=1');	
	}
	
}

?>