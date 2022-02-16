 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$data = file_get_contents('j.json');

$jsonobj= json_encode($data);
var_dump(json_decode($jsonobj));

 
?>
</body>
</html>


