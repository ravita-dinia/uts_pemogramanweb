<?php

/**
 * 
 */
class database
{
	var $host = 'localhost';
	var $user = 'root';
	var $pass = '';
	var $db   = 'db_pelanggan';

	function __construct()
	{
		if(!isset($this->conn))
		{
			$this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
		}
	}

	function tampil_data(){
	$query = "SELECT * FROM $table";

			$hasil = $this->conn->query($query);

			if(!$hasil)
			{
				return "Terjadi kesalahan dalam query";
			}
			
			$rows = array();
			while($row = $hasil->fetch_assoc())
			{
				$rows[] = $row;
			}
			return $rows;

		}
}
?>