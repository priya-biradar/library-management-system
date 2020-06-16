<html>
<head>
    <link rel="stylesheet" href="CSS/contact.css">
    </head>
    <title>
    	student information
    </title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #d147a3;
}
</style>

<body>
	<?php include 'con.php';
	$db=mysqli_select_db($con,'library');
?>
<?php include 'admin_header.php';?>
<center><h2><i><b>Registration details</b></i></h2></center><br><br>
<?php
session_start();

if(!isset($_SESSION["sess_user"])){
header("Location: index.php");
}
else
{

$info=mysqli_query($con,"select * from users");
echo "<table>";
echo "<tr>";
echo "<th>"; echo "Student ID"; echo "</th>";
echo "<th>"; echo "Name"; echo "</th>";
echo "<th>"; echo "e-mail address"; echo "</th>";
echo "<th>"; echo "Contact"; echo "</th>";
echo "</tr>";

while($rows=mysqli_fetch_assoc($info))
{
echo "<tr>";
echo "<td>"; echo $rows["userId"]; echo "</td>";
echo "<td>"; echo $rows["name"]; echo "</td>";
echo "<td>"; echo $rows["mail"]; echo "</td>";
echo "<td>"; echo $rows["contact"]; echo "</td>";
echo "</tr>";

}


echo "</table>";
}
?>
</body>
</html>