<?php include 'con.php';?>
<?php include 'header.php';?>
  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}

tr:nth-child(odd) {
  background-color: #d147a3;
}
</style>
 <center><br>
 	<h2><b><i>Books issued</b></i></h3>

	<br>
<?php
session_start();

if(!isset($_SESSION["sess_user"])){
 echo "<script>
      alert('session not yet started');
      document.location='my_books.php'
      </script>";
   
}
else
{
$db=mysqli_select_db($con,'library');

$res="select * from issue where stud_mail='".$_SESSION["sess_user"]."'";

$check=mysqli_query($con,$res);

    if($check)
    {

       echo "<br>";
    	echo "<table>";
    	echo "<tr>";
    	echo "<th>"; echo "student ID"; echo "</th>";
        echo "<th>"; echo "Book Name"; echo "</th>";
        echo "<th>"; echo "Issue Date"; echo "</th>";
      
echo "</tr>";
    	
    	while($rows=mysqli_fetch_array($check))
    	{
echo "<tr>";
echo "<td>"; echo $rows["stud_roll"]; echo "</td>";
echo "<td>"; echo $rows["book_name"]; echo "</td>";

echo "<td>"; echo $rows["issue_date"]; echo "</td>";
    

         }
         echo "</tr>";
    	
echo "</table>";

      }

}
?>