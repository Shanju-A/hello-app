<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
 padding: 5px
}

th,td{text-align: center;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];


echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

  echo "<tr>";
  echo "<td>Jose</td>";
  echo "<td>Ajin</td>";
  echo "<td>KIshore</td>";
  echo "<td>guru</td>";
  echo "<td>sabin</td>";
  echo "</tr>";

echo "</table>";
echo "<br><br>".$q
?>
</body>
</html>