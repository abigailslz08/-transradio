<?php
	class dataBase{
		public static function conexion(){
		
		    $db = new mysqli("65.99.252.219","devlinec_abigailsalazar","@davKof06","devlinec_transmisiones");
			$db->query("SET NAMES utf8");

			return $db;
		}
	}
?>