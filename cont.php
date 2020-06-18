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
$name=$_POST['userName'];
$mail=$_POST['userEmail'];
$content=$_POST['content'];

$check="INSERT INTO  tblcontacts(id,user_name,user_email,content) VALUES ( NULL,'$name', '$mail','$content')";
     $check=mysqli_query($con, $check);

    if($check)
    {
     	echo "<script>alert('your form is submitted!');document.location='contact.php'</script>";
    }
    else
    {
      echo "<script>alert('sorry your registeration was unsuccessful!');document.location='contact.php'</script>";
    }


?>

