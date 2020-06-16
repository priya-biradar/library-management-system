<html>
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

th {
  background-color: #d147a3;
}
  .inp{
      padding-left: 20px;
            }
      .in{
      width:50%;
      
            }         

</style>




<?php include 'con.php';
	$db=mysqli_select_db($con,'library');
?>
<?php include 'admin_header.php';?>
<center><h2><i><b>Return books</b></i></h2></center><br><br>
<?php
session_start();

if(!isset($_SESSION["sess_user"])){
header("Location: book_display.php");
}
else
{
?>
<body>
	<br>
	<center>
	<form name="form1" method="post" action="" >
		<table>
		<tr>	
 <div class="inp">
<td><select name="userId">
<?php
	$res="select stud_roll from issue";
    $check=mysqli_query($con,$res);
   while($rows=mysqli_fetch_array($check))
    	{
    echo "<option>";
    echo $rows["stud_roll"]; 
    echo "</option>";
    }
        ?>
        </select>
<td><input type="submit" name="submit" size="30" value="Enter"></td>
</div>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$ans="select * from issue where stud_roll='".$_POST["userId"]."'";
$sel=mysqli_query($con,$ans);
			echo "<br>";
    	echo "<table>";
    	echo "<tr>";
    	echo "<th>"; echo "Student ID"; echo "</th>";
        echo "<th>"; echo "Student Name"; echo "</th>";
        echo "<th>"; echo "Student Mail"; echo "</th>";
        echo "<th>"; echo "contact"; echo "</th>";
        echo "<th>"; echo "Book Name"; echo "</th>";
        echo "<th>"; echo "Book Issue Date"; echo "</th>";
        echo "<th>"; echo "Return Book"; echo "</th>";
        echo "</tr>";

    	while($rows=mysqli_fetch_array($sel))
    	{
echo "<tr>";
echo "<td>"; echo $rows["stud_roll"]; echo "</td>";
echo "<td>"; echo $rows["stud_name"]; echo "</td>";
echo "<td>"; echo $rows["stud_mail"]; echo "</td>";
echo "<td>"; echo $rows["stud_phone"]; echo "</td>";
echo "<td>"; echo $rows["book_name"]; echo "</td>";
echo "<td>"; echo $rows["issue_date"]; echo "</td>";
echo "<td>"; ?> <a href="return_book.php?id=<?php echo $rows["id"];?> ">return book </a><?php  echo "</td>";
 
    	}
echo "</tr>";
echo "</table>";
}




    		}

         

     
     ?>


</html>