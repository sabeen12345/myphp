<?php
 	echo "<h2>Hello</h2> <br>";
 	if (isset ($_POST['number'])){
 	$num = $_POST['number'];
 	

 	
 	for ($i=1; $i<=10; $i++){
 		//echo $i * $num ;
 		echo  "$i * $num =" . $i * $num  . "<br>";
 	}
 }
 		
 	
 





?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form method ="POST">
		<label>Number</label>
		<input type="number" name="number">
		<input type="submit" value="send">
	</form>
	</body>
</html>