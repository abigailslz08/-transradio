<?php
	require_once '../../conexion/conexion.php';

	class usuario{
		private $id;
		private $idPersona;
		private $nombre;
		private $paterno;
		private $materno;
		private $user;
		private $pass;
		private $db;

		public function __construct(){
			$this->db = dataBase::conexion();
		}

		// GET
		function getId(){
			return $this->id;
		}

		function getIdPersona(){
			return $this->idPersona;
		}

		function getNombre(){
			return $this->nombre;
		}

		function getPaterno(){
			return $this->paterno;
		}

		function getMaterno(){
			return $this->materno;
		}

		function getUser(){
			return $this->user;
		}

		function getPass(){
			return $this->pass;
		}

		// SET
		function setId($id){
			$this->id = $id;
		}

		function setIdPersona($idPersona){
			$this->idPersona = $idPersona;
		}

		function setNombre($nombre){
			$this->nombre = $this->db->real_escape_string($nombre);
		}

		function setPaterno($paterno){
			$this->paterno = $this->db->real_escape_string($paterno);
		}

		function setMaterno($materno){
			$this->materno =$this->db->real_escape_string($materno);
		}

		function setUser($user){
			$this->user =$this->db->real_escape_string($user);
		}

		function setPass($pass){
			$this->pass =md5($this->db->real_escape_string($pass));
		}

		public function save(){
			$fecha=date("Y-m-d"); 
			$hora=date ("h:i:s");
			$sql = "INSERT INTO personas(nombre,ap_paterno,ap_materno, activo, fecha_registro, hora_registro) VALUES('{$this->getNombre()}','{$this->getPaterno()}', '{$this->getMaterno()}', '1', '$fecha', '$hora');";
			$save = $this->db->query($sql);

			$qrySel = "SELECT id_persona FROM personas WHERE fecha_registro = '$fecha' AND hora_registro = '$hora';"; 
			
			$result = $this->db->query($qrySel);
			$obj = mysqli_fetch_object($result);
			$idP = $obj->id_persona;

			$usuario=$this->getUser();

			$qrySelUser = "SELECT user FROM usuarios WHERE user = '$usuario';"; 			
			$result2 = $this->db->query($qrySelUser);
			$obj2 = mysqli_fetch_object($result2);
			$usuario = $obj2->user;

		 if ($usuario != "") {
			 return "usuario existe";
		 }
		 else{
			$sql2 = "INSERT INTO usuarios(id_persona,user,pass, activo, fecha_registro, hora_registro) VALUES('$idP','{$this->getUser()}','{$this->getPass()}', '1', '$fecha', '$hora')";

			$save2 = $this->db->query($sql2);		
			return "nouser";
		 }	
		}

		// funcion para logearse
		public function login(){
			// se declara la variable resultado en falso y se obtienen los valores
			// del usuario y pass para la consulta
			$result = false;
			$user = $this->getUser();
			$pass = $this->getPass();
			// Comprueba si existe el usuario
			$sql= "SELECT
						u.id_usuario,
						u.id_persona,
						p.nombre,
						p.ap_paterno,
						p.ap_materno
					FROM
						usuarios AS u
					INNER JOIN personas AS p ON u.id_persona = p.id_persona
					WHERE
						USER = '$user'
					AND pass = '$pass'";
			$login = $this->db->query($sql);

			// si login es verdadero y login obtiene un row, cambia el valor
			// de result, por el objeto $usuario que contiene el resultado de la consulta
			if ($login && $login -> num_rows ==1) {
				$usuario = $login->fetch_object();

				// $verify = password_verify($password, $usuario->password);
			
				// if ($verify) {
					$result = $usuario;
				// }
			}

			return $result;
		}

	}
?>