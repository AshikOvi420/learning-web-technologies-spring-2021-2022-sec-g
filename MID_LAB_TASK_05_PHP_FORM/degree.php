<?php

$email="";
$error="";
if(isset($_REQUEST['submit'])){
	if(_REQUEST['degree']==null){
    	$error="Invalid degree!";
	}
	else{$email=$_REQUEST['degree'];}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="degree.php">

	  
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