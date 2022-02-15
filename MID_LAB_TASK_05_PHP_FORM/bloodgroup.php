<?php

$email="";
$error="";
if(isset($_REQUEST['submit'])){
	if(_REQUEST['bloodgroup']==null){
    	$error="Invalid bloodgroup!";
	}
	else{$email=$_REQUEST['bloodgroup'];}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="bloodgroup.php">

	  
	  	<fieldset>
        <legend>Blood Group</legend>
	  		
        <select name="bloodgroup" >
		<option value="A+">A+</option>
		<option value="B+">B+</option>
		<option value="AB+">AB+</option>
		<option value="o+">o+</option>
		<option value="A-">A-</option>
		<option value="B-">B-</option>
		<option value="AB-">AB-</option>
		<option value="o-">o-</option></select>
        <br>
	  		
	  	<input type="submit" value="Submit">
	  </fieldset>
	</form>
</body>

</html>