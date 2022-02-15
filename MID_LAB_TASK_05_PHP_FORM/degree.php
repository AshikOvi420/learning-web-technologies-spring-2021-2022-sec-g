<?php

$email="";
$error="";
if(isset($_REQUEST['submit'])){
	if(_REQUEST['mail']==null){
    	$error="Invalid email!";
	}
	else{$email=$_REQUEST['mail'];}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="email.php">

	  
	  	<fieldset>
        <legend>Degree</legend>
        <input type="checkbox" name="degree" value="SSC">
		<label>SSC</label>
		<input type="checkbox" name="degree" value="HSC">
		<label>HSC</label>
		<input type="checkbox" name="degree" value="BSc">
		<label>BSc</label>
		<input type="checkbox" name="degree" value="Msc">
	  		
        </br>
	  		
	  	<input type="submit" value="Submit">
	  </fieldset>
	</form>
</body>

</html>