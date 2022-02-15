<?php

$email="";
$error="";
if(isset($_REQUEST['submit'])){
	if(_REQUEST['gender']==null){
    	$error="Invalid gender!";
	}
	else{$email=$_REQUEST['gender'];}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="gender.php">

	  
	  	<fieldset>
        <legend>Gender</legend>
	  	<input type="checkbox" name="gender" value="Male">
		<label>Male</label>
		<input type="checkbox" name="gender" value="Female">
		<label>Female</label>
		<input type="checkbox" name="gender" value="Other">
		<label>Other</label>
	</br>
	  	<input type="submit" value="Submit">
	  </fieldset>
	</form>
</body>

</html>