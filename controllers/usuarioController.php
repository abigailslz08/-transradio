<?php
	require_once '../../models/usuario.php';
	

	class usuarioController{

		
		public function saveUsuario(){
			if (isset($_POST)) {
				$usuario = new Usuario();
				$usuario->setUser($_POST['usuario']);
				$usuario->setPass($_POST['pass']);

				$usuario->setNombre($_POST['nombre']);
				$usuario->setPaterno($_POST['paterno']);
				$usuario->setMaterno($_POST['materno']);

				$save = $usuario->save();
				
			
				if ($save=="nouser") {
					$_SESSION["registro"] = "Usuario registrado, Inicie sesión";					
				
					echo $_SESSION["registro"];
				
				}else{
					$_SESSION["registro"] = "Ese nombre de usuario ya existe";
					
					echo $_SESSION["registro"];				

				}
			}else{
				$_SESSION["registro"] = "Error, por favor inténtelo de nuevo.";
				echo "No registrado, nada en post";
			}

		}

		// Funcion para logearse
		public function login(){
			
			$usuario = new Usuario();
			$usuario->setUser($_POST['usuario']);
			$usuario->setPass($_POST['pass']);

			$identity = $usuario->login();

			// var_dump($identity);
			// die();
			if ($identity && is_object($identity)) {
				session_name("loginUsuario");
				session_start();
				
				$_SESSION['identity']= $identity;
				header("Location: ../../views/inicio/index.php?controller=transradio&action=lista");
				ob_end_flush();
			}else{
				$_SESSION['error_login'] = "Identificacion Fallida";
				header("Location: ../../views/login/login.php");
				ob_end_flush();
			}
			
		}

	}
?>