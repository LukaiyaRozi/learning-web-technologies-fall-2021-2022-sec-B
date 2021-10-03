<?php

	if(isset($_POST['submit'])){

		$email 		= $_POST['email'];

		if($email == ""){
			echo "null submission...";
		}else{
			echo $email;

		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>EMAIL</legend>
			<input type="text" name="email" value=""> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>