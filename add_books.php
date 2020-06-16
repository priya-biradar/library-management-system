<html>
<head>
    <link rel="stylesheet" href="CSS/contact.css">
    </head>
    <style type="text/css">
    	.inp{
    		width: 50%;
    		   	}
    </style>
<body>

<?php include 'admin_header.php';?>
<?php include 'con.php';?>
<?php
session_start();
if(!isset($_SESSION["sess_user"])){
header("Location: index.php");
}
else
{

$db=mysqli_select_db($con,'library');?>
<br>
<center><h2><i><b>Add Books here</b></i></h2>
	<div class="inp">
 <form action="book_db.php" name="add_books" method="post">

 	<label></label><br>
		<input type="text" name="book_name" placeholder="Enter Book name" required>
		<label></label><br>
		      <input type="text" name="book_author" placeholder="Enter Author's name" required>
     <label></label><br>
      <input type="text" name="publication" placeholder="Enter Publication name" required>
		<label></label><br>
		<input type="text" name="book_qty" placeholder="Enter Quantity of books" required>
		<label></label><br>
		<input type="text" name="available_qty" placeholder="Enter Available Books Quantity" required>
		<label></label><br>
		<input type="text" name="librarian" placeholder="Enter Librarian's name" required><br>
		<label></label><br>
		<input type="text" name="issue_date" placeholder="Enter purchased date" required><br>
		<label></label><br>
		
		
     <input type="submit" name="submit" value="save">
</form>
 </div>
   </center>
   <?php
}
?>
</body>
</html>