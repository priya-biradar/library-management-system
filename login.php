<?php
$host = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect('localhost','root','');
if(!$con)
 {       
 die("problems connecting to DB.".mysqli_error());
}
$db=mysqli_select_db($con,'library');
$mail=$_POST['email'];
$pass=$_POST['psw'];
$selected_val=$_POST['type']; 
session_start();
$_SESSION['sess_user']=$mail;

if(!isset($_SESSION["sess_user"])){

header("Location: index.php");
}
else
{
 $sql_l = "SELECT * FROM users WHERE pswd='$pass'  &&  mail='$mail' && type= 'Librarian' ";
  $res_l = mysqli_query($con, $sql_l);

  $sql_s = "SELECT * FROM users WHERE pswd='$pass'  &&  mail='$mail' && type= 'Student' ";
  $res_s = mysqli_query($con, $sql_s);
 
 $sql_a = "SELECT * FROM users WHERE pswd='$pass'  &&  mail='$mail' && type= 'Admin' ";
  $res_a = mysqli_query($con, $sql_a);
 
   if (mysqli_num_rows($res_l) > 0) {
      echo "<script>
      alert('you are successfully logged in');
      document.location='student_info.php'
      </script>";
   }
/*else
{
   echo "<script>
      alert('incorrect email or password');
      document.location='index.php'
      </script>";
   }*/

if (mysqli_num_rows($res_a) > 0) {
      echo "<script>
      alert('you are successfully logged in');
      document.location='add_books.php'
      </script>";
   }
  else
{
   echo "<script>
      alert('incorrect email or password');
      document.location='index.php'
      </script>";
   }


if (mysqli_num_rows($res_s) > 0) {
      echo "<script>
      alert('you are successfully logged in');
      document.location='my_books.php'
      </script>";
   }
/*else
{
   echo "<script>
      alert('incorrect email or password');
      document.location='index.php'
      </script>";
   }
*/


}


?>
