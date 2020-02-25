<?php
require_once '../../models/transmision.php';

	class transRadioController{
		public function index(){
			require_once '../../views/transmisiones/altaTrans.php';
		}

		public function lista(){
			$trans = new Transmision();
			$transmisiones = $trans->getAll();

			require_once '../../views/transmisiones/listaTrans.php';
		}

		public function saveTrans(){
			if (isset($_POST)) {
				$transmision = new Transmision();
				$transmision->setTema($_POST['tema']);
				$transmision->setFechaT($_POST['fechaT']);
				$transmision->setHoraT($_POST['horaT']);
				$transmision->setUrl($_POST['url']);

				$save = $transmision->save();

				if ($save){
					$_SESSION["registro"] = "complete";
					header("Location: ../../views/inicio/index.php?controller=transradio&action=lista");
					ob_end_flush();
				}else{
					$_SESSION["registro"] = "failed";
					header("Location: ../../views/inicio/index.php?controller=transradio&action=index");
					ob_end_flush();
				}
			}else{
				$_SESSION["registro"] = "failed";
				header("Location: ../../views/inicio/index.php?controller=transradio&action=index");
				ob_end_flush();
			}
		}

		public function editarT(){
			if (isset($_GET["id"])) {

				$id = $_GET["id"];
				$transmision = new Transmision();
				$transmision->setIdP($id);
				$trans = $transmision->getOne();
				
				require_once '../../views/transmisiones/editTrans.php';
			}else{
				header("Location: ../../views/inicio/index.php?controller=transradio&action=lista");
				ob_end_flush();
			}
		}

		public function editTrans(){
			if (isset($_POST)) {
				$transmision = new Transmision();
				$transmision->setTema($_POST['tema']);
				$transmision->setFechaT($_POST['fechaT']);
				$transmision->setHoraT($_POST['horaT']);
				$transmision->setUrl($_POST['url']);

				$idP = $_GET["id"];
				$transmision->setIdP($idP);

				$edit = $transmision->edit();

				if ($edit){
					$_SESSION["registro"] = "complete";
					header("Location: ../../views/inicio/index.php?controller=transradio&action=lista");
					ob_end_flush();
				}else{
					$_SESSION["registro"] = "failed";
					header("Location: ../../views/inicio/index.php?controller=transradio&action=lista");
					ob_end_flush();
				}
			}else{
				$_SESSION["registro"] = "failed";
				header("Location: ../../views/inicio/index.php?controller=transradio&action=lista");
				ob_end_flush();
			}
		}

		public function eliminar(){

			if (isset($_GET["id"])) {
				$idP = $_GET["id"];
				$transmision = new Transmision();
				$transmision->setIdP($idP);
				$delete = $transmision->deleteT();

				if ($delete) {
					$_SESSION["delete"] = "complete";
				}else{
					$_SESSION["delete"] = "failed";
				}
			}else{
				$_SESSION["delete"] = "failed";
			}
			header("Location: ../../views/inicio/index.php?controller=transradio&action=lista");
			ob_end_flush();
		}
	}
?>