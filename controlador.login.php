<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
require 'conn/connection.php';	
	$usuario = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	$user = $conn->prepare("SELECT usuario,password,rol FORM cuentas WHERE usuario = '".$usuario."' and password = '".$password."'");
	
	$user ->execute();
	if($user ->rowCount() >0){
		$user = $user->fetch();
		if($user['username'] == $usuario && $user['password']==$password){
		
			session_start();
			$_SESSION["username"] = $usuario;
			$_SESSION["rol"] = $user['rol'];
			setcookie("activo",1, time() + 3600);
			header("location: vista.inicio.php",true, 301);
		}else{
			http_response_code(401);
			header('location:vista.login.php?err=1');
		}
		}else{
			http_response_code(401);
			header('location:vista.login.php?err=1');
	}
		}else{
			http_response_code(405);
			echo"SOLO SE PUEDE POST";

 }

?>