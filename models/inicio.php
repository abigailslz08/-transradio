<?php
require_once 'conexion/conexion.php';
	class transmision{
		private $db;

		public function __construct(){
			$this->db = dataBase::conexion();
		}
		// Obtiene todas las transmisiones para mostrarlas en la lista
		public function getAllT(){
			$trans = $this->db->query("SELECT * FROM transradio;");
			return $trans;
		}
	}
?>