<?php

require_once '../Controller/DBController.php';

class route extends DatabaseObject
{

	public $id;
	public $source;
	public $destination;
	public $distance;
	
	private $table_name="route";
	
	public function read_from_row($result)
	{
		$this->id=$result['id'];
		$this->source=$result['source'];
		$this->destination=$result['destination'];
		$this->distance=$result['distance'];
	}
	
	public function get_one($param_id)
	{		
		if($param_id > 0)
		{
			parent::__construct();

			$this->open_connection();	
		
			$result = mysql_query("SELECT * FROM `".$this->table_name."` WHERE `id`=".$param_id);
		
			if($result)					
				$this->read_from_row(mysql_fetch_assoc($result));

			$this->close_connection();
		}
		else
		{
			 
		}

	}
}

?>