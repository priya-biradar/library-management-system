<?php include 'con.php';
	$db=mysqli_select_db($con,'library');
?>
<?php include 'admin_header.php';?>
<?php
session_start();

if(!isset($_SESSION["sess_user"])){
header("Location: index.php");
}
else
{
	?>
	<html>
	<center>
	<style type="text/css">
    	.inp{
    	padding-left: 20px;
    		   	}
    	.in{
    	width:50%;
    	
    		   	} 		   	
    </style>
	<body>
	
  <center><h2><i><b>Issue books</b></i></h2>
<br>
	<form name="form1" method="post" action="" >
		<table>
		<tr>	
 <div class="inp">
<td><select name="userId">
<?php
	$res="select userId from users";
    $check=mysqli_query($con,$res);
   while($rows=mysqli_fetch_array($check))
    	{
    echo "<option>";
    echo $rows["userId"]; 
    echo "</option>";
    }
        ?>
        </select></td>


<td><input type="submit" name="submit" size="30" value="Enter"></td>
</div>
</tr>
</table>

<?php

if(isset($_POST['submit']))
{
$ans="select * from users where  userId='".$_POST["userId"]."'";
$sel=mysqli_query($con,$ans);
	while($row=mysqli_fetch_array($sel))
    	{
    		$userId=$row["userId"];
             $name=$row["name"];
              $mail=$row["mail"];
              $contact=$row["contact"];
          }

          ?>
	<div class="in">
<br>
 <input type="text"  name="userId" placeholder="student's ID"  value="<?php echo $userId ;?>" disabled><label></label>
 <input type="text"  name="name" placeholder="student's Name"  value="<?php echo $name ;?>" ><label></label>
 <input type="text"  name="contact" placeholder="student's contact" value="<?php echo $contact ;?>"><label></label>
 <input type="text"  name="mail" placeholder="student's e-mail" value="<?php echo $mail;?>" ><label></label>
 <input type="text"  name="dt" placeholder="issue date" value="<?php echo date("d-m-y");?>" required><label></label>
 
<select name="textBook">     
 <?php    
$res="select book_name from books";
$check=mysqli_query($con,$res);
   while($rows=mysqli_fetch_array($check))
    	{
    echo "<option>";
    echo $rows["book_name"]; 
    echo "</option>";
    }
        ?>
    </select>
<label></label><br>
     <input type="submit" name="ok" value="issue">
</div>
<?php
}
?>

</form>

<?php
if(isset($_POST['ok']))
{
	
	$qty=0;
	$ans="select * from books  where  book_name='".$_POST["textBook"]."'";
	
	$get=mysqli_query($con,$ans);

while($row=mysqli_fetch_array($get))
    	{
   
	$qty=$row["available_qty"];
}

	if($qty==0)
	{
echo "<script>alert('sorry!stock unavailable !');document.location='issue.php'</script>";
    

	}
		else
		{

 $final="insert into issue(stud_roll,stud_name,stud_mail,stud_phone,book_name,issue_date,return_date)values('".$_POST["userId"]."','".$_POST["name"]."','".$_POST["mail"]."','".$_POST["contact"]."','".$_POST["textBook"]."','".$_POST["dt"]."','')";

mysqli_query($con,"update books set available_qty=available_qty-1 where book_name= '".$_POST["textBook"]."' ");

     $see=mysqli_query($con,$final);

 if($see)
    {
     	echo "<script>alert('Book issued  successfully !');document.location='add_books.php'</script>";
    }
    else
    {
      echo "<script>alert('task was unsuccessful!');document.location='issue.php'</script>";
    }
}
}
?>

</body>
</center>
</html>

<?php
}
?>
