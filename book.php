<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="CSS/book.css">
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
       <!-- <a href="#" class="logo">logo</a>-->
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
              <button type="button" class="open-button" onclick="window.location.href = 'logout.php';">Logout</button>
               </li>
            
               <!-- <a href="login.html" class="nav-links" class="open-button" onclick="openForm()">Register</a>
            </li>
            <li>
                <a href="#" class="nav-links">Login</a>
            </li>-->
        </ul>
    </nav>
   <center> <i><h3>Here is the list of books available for you</h3></i></center>
    <div class="container">
  <img src="images/wt.jpg" alt="Snow" style="width:100%">
  <!--<button class="btn">Borrow</button>-->
</div>
<div class="container">
  <img src="images/cd.jpg" alt="Snow" style="width:100%">
 </div>
<div class="container">
  <img src="images/cns1.jpeg" alt="Snow" style="width:100%">
  </div>
<div class="container">
  <img src="images/java.jpg" alt="Snow" style="width:100%">
  
</div>
<div class="container">
  <img src="images/c.jpg" alt="Snow" style="width:100%">
  </div>
<div class="container">
  <img src="images/dccn.jpg" alt="Snow" style="width:100%">
  </div>
<div class="container">
  <img src="images/pccn.jpg" alt="Snow" style="width:100%">
  </div>
<div class="container">
  <img src="images/ed.jpg" alt="Snow" style="width:100%">
  </div>





</body>
</html>
