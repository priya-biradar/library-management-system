<?php
session_start();
if(!isset($_SESSION["sess_user"])){
header("Location: index.php");
}
else
{
?>
<?php include 'admin_header.php';?>
<?php include 'con.php';?>
<?php
$db=mysqli_select_db($con,'library');
//if(isset($_SESSION["sess_user"])){
if(isset($_POST["submit"]))
 {
 	 $book_name=$_POST['book_name'];
 $book_author=$_POST['book_author'];
 $publication=$_POST['publication'];
 $issue_date=$_POST['issue_date'];
 $book_qty=$_POST['book_qty'];
 $available_qty=$_POST['available_qty'];
 $librarian=$_POST['librarian'];

	 $q="insert into books values('$book_name','$book_author','$publication','$issue_date','$book_qty','$available_qty','$librarian')";

     $check=mysqli_query($con,$q);

    if($check)
    {
     	echo "<script>alert('data inserted successfully!');document.location='add_books.php'</script>";
    }
    else
    {
      echo "<script>alert('sorry data insertion was unsuccessful!');document.location='add_books.php'</script>";
    }
}

?>
<?php
}
?>
