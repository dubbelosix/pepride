<?php

session_start();

//Check is session is set
if(!isset($_SESSION["UserId"])) 
{
	echo "not set";
	//redirect to home page
	header('Location:index.php');	
}

//Load Model
require_once '../Model/user.php';
require_once '../Model/route.php';
require_once '../Controller/DBController.php';

$user_model = new user(); $user_model->get_one($_SESSION["UserId"]);

if($user_model->default_route_id > 0)
{
	$route_model = new route(); $route_model->get_one($user_model->default_route_id);
}

?>

<html>

<head>

	<title>
		Welcome, <?php echo $user_model->first_name; ?>
	</title>

</head>

<body>

	<form action="profile.php" method="GET">
		Source <input type="text" name="source" value="<?php if(isset($route_model->source)){echo $route_model->source;}else{echo "Starting Point";}?>" />&nbsp;&nbsp;&nbsp;
		Destination <input type="text" name="dest" value="<?php if(isset($route_model->destination)){echo $route_model->destination;}else{echo "Ending Point";}?>"/>
		Starting Time <input type="text" name="time" />
		<input type="Submit" id="btnSubmit"/>
	</form>
	
	<br><br>Results<br>
	
	
	

	<form action="" method="">
	
	</form>
</body>

</html>
