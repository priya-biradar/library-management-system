<?php require_once('db.php');?>
<?php
session_start();

?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="CSS/index.css">
    <script>
      //javascript client side  form validation
function valid()                 
{ 
var id = document.forms["RegForm"]["user"];      
  var name = document.forms["RegForm"]["name"];      
  var email = document.forms["RegForm"]["email"]; 
   var password = document.forms["RegForm"]["psw"];
   var conpassword = document.forms["RegForm"]["conpassword"];
  var contact = document.forms["RegForm"]["contact"];

if (id.value == "")                
  { 
  document.getElementById('ierror').innerHTML = "<span style='color: red;'>enter your id</span>";
    id.focus(); 
   
  } 
  else
  {
  var uid = document.RegForm.user.value;
        if(uid.length<10)  
    {
      document.getElementById('ierror').innerHTML = "<span style='color: red;'>enter a valid number</span>";

      document.RegForm.user.focus() ;
    
    } 
  }
  if (name.value == "")                
  { 
  document.getElementById('error').innerHTML = "<span style='color: red;'>enter your name</span>";
    name.focus(); 
   
  } 

    if (email.value == "")                 
  { 
document.getElementById('merror').innerHTML = "<span style='color: red;'>enter your email address</span>";
    email.focus(); 
    
     }
     else
     {
    var emailID = document.RegForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
          document.getElementById('merror').innerHTML = "<span style='color: red;'>enter a valid email adddress</span>";            document.RegForm.email.focus() ;
          
         }   
  }

if (contact.value == "")          
  { 
  document.getElementById('nerror').innerHTML = "<span style='color: red;'>enter your contact number</span>";
    contact.focus();   
   
  } 
  else
  {
    if(contact.value.length<10)
    {
    document.getElementById('nerror').innerHTML = "<span style='color: red;'>enter a valid number</span>";
    contact.focus(); 
   
    }
  }

if (password.value == "")          
  { 
  document.getElementById('perror').innerHTML = "<span style='color: red;'>enter the password</span>";
    password.focus();   
  
  } 
  else
  {
    if(password.value.length<8)
    {
    document.getElementById('perror').innerHTML = "<span style='color: red;'>length must be atleast 8 characters</span>";
    password.focus(); 
    
    }
  }

if (conpassword.value == "")          
  { 
  document.getElementById('cerror').innerHTML = "<span style='color: red;'>enter the password</span>";
    conpassword.focus();   
   
  } 
  else
  {
    if(password.value!=conpassword.value)
    {
    document.getElementById('cerror').innerHTML = "<span style='color: red;'>password did not match</span>";
    conpassword.focus(); 
  
    }
  }


if(name.value==""||password.value==""||id.value==""||password.value.length<8||uid.length<10||document.RegForm.email.value.indexOf("@")<1|| document.RegForm.email.value.lastIndexOf(".")-document.RegForm.email.value.indexOf("@")<2||contact.value==""||contact.value.length<10||conpassword.value==""||password.value!=conpassword.value)
  {
  return false; 
    }
 
return true;
  }
</script>
	<script>
let mainNav = document.getElementById('js-menu');
let navBarToggle = document.getElementById('js-navbar-toggle');

navBarToggle.addEventListener('click', function () {
  mainNav.classList.toggle('active');
});
	</script>
</head>
<body bgcolor="white">

<nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
      
       <p class="log">
       <img src="images/index.jpeg" width="60" height="60">
   </p>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="index.php" class="nav-links">Home</a>
            </li>
            <li>
                <a href="book.php" class="nav-links">Books</a>
            </li>
            <li>
                <a href="about.php" class="nav-links">About Us</a>
            </li>
            <li>
                <a href="contact.php" class="nav-links">Contact Us</a>
            </li>
            <li>
              <button type="button" class="open-button" onclick="openForm()">register</button>
               </li>
               <li>
              <button type="button" class="open-button-login" onclick="openLogin()">Login</button>
               </li>
                    </ul>
    </nav>
  <div class="size"> 
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/bk.jpeg" width="1400" height="600" style="width:100%">
  <div class="text">Come</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/b.jpg" width="1400" height="600" style="width:100%">
  <div class="text">Read</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/l.jpg" width="1400" height="600" style="width:100%">
  <div class="text">Lead</div>
</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div class="form-popup" id="myForm">
  <form action="registration.php" name="RegForm" class="form-container" onsubmit="return valid()" method="post">
   <center><h3><i>Register here</i></h3></center>
    
 <label for="user" id="ierror"><b>ID number</b></label>
    <input type="text" placeholder="Enter your roll no." name="user">

<label for="name" id="error"><b>Name</b></label>
    <input type="text" placeholder="Enter your name" name="name">

    <label for="email" id="merror"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email">

    
    <label for="contact" id="nerror"><b>contact</b></label>
    <input type="text" placeholder="Enter your contact number" name="contact">

<h4>Type of user</h4>
    <select name="type">
<option value="Admin">Admin</option>
<option value="Librarian">Librarian</option>
<option value="Student">Student</option>
</select>
<br><br>
   <label for="psw" id="perror"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw">


   <label for="conpassword" id="cerror"><b>Confirm Password</b></label>
    <input type="password" placeholder="re-enter your Password" name="conpassword">
      
    <button type="submit"  name="submit" class="btn">Register</button>

    <button type="button" style="margin:10px;" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<div class="loginform-popup" id="myLogin">
  <form action="login.php" name="LoginForm" class="form-container-login" onsubmit="return validLog()" method="post">
   <center><b><h3><i>Login here</i></h3></b></center> 

    <label for="email" id="merror"><b>Email</b></label>
    <input type="text" placeholder="Enter your E-mail" name="email" required>

    <label for="psw" id="perror"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
<script type="text/javascript" src="log.php"></script>
<h4>Type of user</h4>

 <select name="type">
<option value="Admin">Admin</option>
<option value="Librarian">Librarian</option>
<option value="Student">Student</option>
</select>
<br>
<br>
</script>
    <button type="submit" class="btnlog">Login</button>
    <button type="button" class=" btnlog cancellog" onclick="closeLogin()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
  
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function openLogin() {
  document.getElementById("myLogin").style.display = "block";
}

function closeLogin() {
  document.getElementById("myLogin").style.display = "none";
}

</script>
<!--slideshow-->
    <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2500); // Change image every 2 seconds
}


</script>


</body>
</html>