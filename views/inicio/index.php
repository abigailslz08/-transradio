<?php
	ob_start();
	session_start();
	require_once '../../helpers/autoload.php';
	require_once '../../conexion/conexion.php';
	require_once '../../config/parametros.php';
	require_once '../layouts/sidebar.php';
	require_once '../layouts/header.php';
	

	if(isset($_GET['controller'])){
		$nombre_controlador = $_GET['controller'].'Controller';
	}else{
		echo "La pagina que buscas no existe 1";
		exit();
	}

	if (class_exists($nombre_controlador, false)) {
		$controlador = new $nombre_controlador();

		if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
			$action = $_GET['action'];
			$controlador->$action();
		}else{
			echo "La pagina que buscas no existe 2";
		}
	}else{
		echo "La pagina que buscas no existe 3";
	}


	require_once '../layouts/footer.php';
?>