<?php
//iniciamos la sesión 
session_name("loginUsuario"); 
session_start(); 

session_unset();
		session_destroy(); // destruyo la sesión 
		echo "<script language=\"javascript\">window.location=\"../index.php\"</script>";
		//echo "<script language=\"javascript\">window.location=\"../../site/login.php\"</script>";
?>