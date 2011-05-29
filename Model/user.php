<?php

require_once '../Controller/DBController.php';


class User extends DatabaseObject
{
	public $id;
	public $first_name;
	public $last_name;
	public $email;
	public $car_no;
	public $car_description;
	public $default_route_id;
	public $phone_no;
	public $rating;
	
	private $table_name="user";
	
	public function get_one($param_id)
	{
		parent::__construct();

		$this->open_connection();
		
		$result = mysql_query("SELECT * FROM `".$this->table_name."` WHERE `id`=".$param_id);
		
		if(!$result)
			echo "Data Retrieval for User failed";
		else
			$this->read_from_row(mysql_fetch_assoc($result));
		
		$this->close_connection();
		
	}
	
	public function set_id($param_id)
	{
		$this->id = $param_id;
	}
	
	public function read_from_row($result)
	{
		$this->id=$result['id'];
		$this->first_name=$result['first_name'];
		$this->last_name=$result['last_name'];
		$this->email=$result['email'];
		$this->car_no=$result['car_no'];
		$this->car_description=$result['car_description'];
		$this->default_route_id=$result['default_route_id'];
		$this->phone_no=$result['phone_no'];
		$this->rating=$result['rating'];
	}
	
	

}


?>