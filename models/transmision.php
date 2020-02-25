<?php
	require_once '../../conexion/conexion.php';

	class transmision{
		private $idP;
		private $tema;
		private $fechaT;
		private $horaT;
		private $url;
		private $db;

		public function __construct(){
			$this->db = dataBase::conexion();
		}

		// GET
		function getIdP(){
			return $this->idP;
		}

		function getTema(){
			return $this->tema;
		}

		function getFechaT(){
			return $this->fechaT;
		}

		function getHoraT(){
			return $this->horaT;
		}

		function getUrl(){
			return $this->url;
		}

		// SET
		function setIdP($idP){
			$this->idP = $idP;
		}

		function setTema($tema){
			$this->tema = $tema;
		}

		function setFechaT($fechaT){
			$this->fechaT = $fechaT;
		}

		function setHoraT($horaT){
			$this->horaT = $horaT;
		}

		function setUrl($url){
			$this->url = $url;
		}

		// Obtiene todas las transmisiones para mostrarlas en la lista
		public function getAll(){
			$trans = $this->db->query("SELECT * FROM transradio;");
			return $trans;
		}

		// Obtiene la transmision que se va a editar
		public function getOne(){
			$trans = $this->db->query("SELECT * FROM transradio WHERE id_transmision = {$this->getIdP()};");
			return $trans->fetch_object();
		}

		public function save(){
			$fecha=date("Y-m-d"); 
			$hora=date ("h:i:s");

			$nombreC = $_SESSION['identity']->nombre." ".$_SESSION['identity']->ap_paterno." ".$_SESSION['identity']->ap_materno;
			$idUsuario = $_SESSION['identity']->id_usuario;

			$sql = "INSERT INTO transradio(nombre_trans,tema,url, fecha_trans,hora_trans, activo, id_usuario) VALUES('$nombreC','{$this->getTema()}','{$this->getUrl()}', '{$this->getFechaT()}','{$this->getHoraT()}' ,'1', '$idUsuario');";
			$save = $this->db->query($sql);

			$resultado =false;
			if ($save) {
				$resultado =true;
			}
			return $resultado;
		}

		public function edit(){
			$fecha=date("Y-m-d"); 
			$hora=date ("h:i:s");

			$sql = "UPDATE transradio SET tema = '{$this->getTema()}', url='{$this->getUrl()}', fecha_trans='{$this->getFechaT()}',hora_trans='{$this->getHoraT()}' WHERE id_transmision = '{$this->getIdP()}';";
			$save = $this->db->query($sql);

			$resultado =false;
			if ($save) {
				$resultado =true;
			}
			return $resultado;
		}

		public function deleteT(){
			$sql = "DELETE FROM transradio WHERE id_transmision = {$this->idP}";
			$delete = $this->db->query($sql);

			$resultado =false;
			if ($delete) {
				$resultado =true;
			}
			return $resultado;
		}

	}
?>