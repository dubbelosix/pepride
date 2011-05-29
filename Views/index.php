<!--Start HTML-->

<?php

function test(){

return "hi";

}?>

<html>
<head>	
<title>
FlexiPool	
</title>

<script type="text/javascript">			


</script>
</head>

<body>
<br/><br/><br/><br/><br/><br/><br/><br/>

<form action="../Controller/LoginController.php" method="POST">	
<input type = "text" id="userId" name="userId"/>
<br/>	
<input type ="password" id="password" name="password"/>
<br/>	
<input type="submit" id="btnSubmit"> &nbsp;&nbsp;
</form>
<?php echo test();?>

</body>
</html>
<!--End HTML-->



