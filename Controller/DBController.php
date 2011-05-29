<?php

class DatabaseObject
{

	//Connection properties
	private $db_name;
	private $host_name;
	private $user;
	private $pass;
	
	//Connection Object
	private $con;
	
	public function __construct()
	{
		$this->db_name = "carpool";
		$this->host_name = "localhost";
		$this->user = "root";
		$this->pass = "";	
	
	}
	
	/*
	public function __construct($db_name, $host_name, $user, $pass)
	{
		$this->$db_name = $db_name;
		$this->$host_name = $host_name;
		$this->$user = $user;
		$this->$pass = $pass;	
	
	}*/
	
	public function open_connection()
	{
		$this->con = mysql_connect($this->host_name,$this->user,$this->pass);

		$db = mysql_select_db($this->db_name,$this->con);
	}
	
	public function close_connection()
	{
		mysql_close($this->con);
	}


}

?>