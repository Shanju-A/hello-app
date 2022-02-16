<!DOCTYPE html>
<html>
<head>
	<style >
	label{
display:inline-block;
width: 100px;
margin-right:10px;
text-align:right;
}
 input[type=submit]{
 	margin-left:150px;
 }
	</style>
	<title></title>
</head>
<body>
	<form action="action.php" method="GET">
	  <div>
	
		<label>	id :</label><input type="number" min=1 name="val" placeholder="   integer"><br><br>
		<label>name:</label>	<input type="text" name="val2"/><br><br>
		<label>data:</label><input type="text" name="val3"/><br><br>
		<input type="submit" name="submit">
	
		</div>
	</form>
	<?php
       if (isset($_GET['submit'])) {

	       $a = $_GET['val'];
	       $b = $_GET['val2'];
			       $c = $_GET['val3'];
			
			$conn = new mysqli("localhost","root", "","file");
		 if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO project1 (id,name,data)
		VALUES ('".$a."', '".$b."', '".$c."')";

		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

		  }
	?>
</body>
</html>