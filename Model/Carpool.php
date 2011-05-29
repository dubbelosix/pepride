<?php

require_once '../Controller/DBController.php';

class Carpool extends DatabaseObject
{
	public $id;
	public $user_id;
	public $route_id;
	public $fuel_share;
	public $seats;
	public $start_time;
	public $comments;	
	
	private $table_name="carpool";

	public function get_one($param_id)
	{	
		parent::__construct();

		$this->open_connection();
		
		$result = mysql_query("SELECT * FROM `".$this->table_name."` WHERE `id`=".$param_id);
		
		if(!$result)
			echo "Data Retrieval for Pool failed";
		else
			$this->read_from_row(mysql_fetch_assoc($result));
		
		$this->close_connection();
		
	}
	
	public function read_from_row($result)
	{
		$this->id=$result['id'];
		$this->user_id=$result['user_id'];
		$this->route_id=$result['route_id'];
		$this->fuel_share=$result['fuel_share'];
		$this->seats=$result['seats'];
		$this->start_time=$result['start_time'];
		$this->comments=$result['comments'];
	}
	
	
	
	
}


?>
