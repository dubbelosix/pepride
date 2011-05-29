<?php

$con = mysql_connect("localhost","root");

$db = mysql_select_db("carpool",$con);

if(!$con)
{
	echo "Unable to connect";
}
else
{

	echo "<br/> Sucess <br/><br/> ";

	$query = "SELECT `id`,`first_name` FROM `user` WHERE `email`='".$_POST["userId"]."' AND `password`='".$_POST["password"]."'"; 

	$result = mysql_query($query);

	if(!$result)
	{
		echo $query."   ".mysql_error();
		echo "Incorrect Details";
	}
	else
	{
		//start user session to enable variable saving
		session_start();		
		
		//Get row containing user id
		$row = mysql_fetch_assoc($result);		
		
		//set session for member id and first name
		$_SESSION['UserId']=$row['id'];
		$_SESSION['FirstName']=$row['first_name'];
		
		//redirect to memberProfile
		header('Location:../Views/profile.php');
	}
}



?>

<html>

<body>

</body>

</html>