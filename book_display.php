<html>
<head>
    </head>
    <title>
    	Books information
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

	<?php
session_start();
if(!isset($_SESSION["sess_user"])){
header("Location: book_display.php");
}
else
{
?>

<?php include 'search.php';?>
<?php include 'con.php';?>
<center><h2><i><b>Available books information</b></i></h2>

<?php
$db=mysqli_select_db($con,'library');

$res="select * from books";

$check=mysqli_query($con,$res);

    if($check)
    {
    	echo "<br>";
    	echo "<table>";
    	echo "<tr>";
    	echo "<th>"; echo "Book Name"; echo "</th>";
        echo "<th>"; echo "Author Name"; echo "</th>";
        echo "<th>"; echo "Publication"; echo "</th>";
        echo "<th>"; echo "Purchased date"; echo "</th>";
        echo "<th>"; echo "quantity of books added"; echo "</th>";
        echo "<th>"; echo "Available books"; echo "</th>";
        echo "<th>"; echo "Librarian Name"; echo "</th>";
        echo "</tr>";

    	
    	while($rows=mysqli_fetch_array($check))
    	{
echo "<tr>";
echo "<td>"; echo $rows["book_name"]; echo "</td>";
echo "<td>"; echo $rows["book_author"]; echo "</td>";
echo "<td>"; echo $rows["publication"]; echo "</td>";
echo "<td>"; echo $rows["issue_date"]; echo "</td>";
echo "<td>"; echo $rows["book_qty"]; echo "</td>";
echo "<td>"; echo $rows["available_qty"]; echo "</td>";
echo "<td>"; echo $rows["librarian"]; echo "</td>";

    	}
echo "</tr>";
echo "</table>";
}

?>

<?php
}
?>

</body>
</html>