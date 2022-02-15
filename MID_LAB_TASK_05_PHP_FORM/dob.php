<?php

$email="";
$error="";
if(isset($_REQUEST['submit'])){
	if(_REQUEST['dob']==null){
    	$error="Invalid dob";
	}
	else{$email=$_REQUEST['dob'];}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="dob.php">

	  
	  	<fieldset>
        <legend>Date Of Birth</legend>
	  	<input type="date" name="date" id="date" placeholder="Enter Your Date of Birth ">
	  	<br>
	  		
	  	<input type="submit" value="Submit">
	  </fieldset>
	</form>
</body>

</html>