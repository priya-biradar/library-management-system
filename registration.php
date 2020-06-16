<?php
$host = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect('localhost','root','');
if(!$con)
 {       
 die("problems connecting to DB.");
}
$db=mysqli_select_db($con,'library');
$userId=$_POST['user'];
$name=$_POST['name'];
$mail=$_POST['email'];
$contact=$_POST['contact'];
$pswd=$_POST['psw'];
$conpassword=$_POST['conpassword'];
$selected_val=$_POST['type']; 
session_start();
$_SESSION['sess_user']=$mail;

if(!isset($_SESSION["sess_user"])){
  echo "<script>
      alert('Sorry...session not started');
      document.location='index.php'
      </script>";
}
else
{
 if($name!='' && $mail!='' && $pswd!='' && $userId!='' && $contact!='' && $conpassword!='' && $selected_val!='')
 {
   $sql_u = "SELECT * FROM users WHERE userId='$userId'";
  	$sql_e = "SELECT * FROM users WHERE mail='$mail'";
  	$res_u = mysqli_query($con, $sql_u);
  	$res_e = mysqli_query($con, $sql_e);

  	if (mysqli_num_rows($res_e) > 0) {
  		echo "<script>
      alert('Sorry...this e-mail is already registered');
      document.location='index.php'
  	  </script>";
   }
   else if (mysqli_num_rows($res_u) > 0) {
      echo "<script>
      alert('Sorry...this number is already registered');
      document.location='index.php'
      </script>";
   }
else if($pswd!==$conpassword)
  {
  echo "<script>alert('password does not match');document.location='index.php'</script>";
   }
   else
  {
    $q="insert into users(userId,name,mail,contact,type,pswd,conpassword)values('$userId','$name','$mail','$contact','$selected_val','$pswd','$conpassword')";

     $check=mysqli_query($con,$q);

    if($check)
    {
     	echo "<script>alert('you are successfully registered!kindly login');document.location='index.php'</script>";
    }
    else
    {
      echo "<script>alert('sorry your registeration was unsuccessful!');document.location='index.php'</script>";
    }
  }
}
}
?>