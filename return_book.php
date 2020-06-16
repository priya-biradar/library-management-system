<?php include 'con.php';
	$db=mysqli_select_db($con,'library');
$id=$_GET["id"];
$dt=date("d-m-Y");
$res=mysqli_query($con,"update issue set return_date='$dt' where id=$id");
$bk_name=" ";
$info=mysqli_query($con,"select * from issue where id=$id"); 
while($rows=mysqli_fetch_assoc($info))
{
$bk_name=$rows["book_name"];
}
mysqli_query($con,"update books set available_qty=available_qty+1 where book_name= '$bk_name' ");



header("Location: return.php");
?>