<html>
<head>
    <link rel="stylesheet" href="CSS/contact.css">
    </head>
<body>
<?php include 'header.php';?>

    <div class="container">
  <img src="images/call.jpg" alt="Snow" style="width:45%;">
</div>      
  <br><br>
  <center><h2>CONTACT US</h2></center>
  
  <div class="containercon">
  <form action="cont.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="userName" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email address</label>
      </div>
      <div class="col-75">
        <input type="text" id="mail" name="userEmail" placeholder="Your e-mail address..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="content" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div><br>
    <center>
    <div class="row">
      <input type="submit" value="Send">
    </div>
    </center>
  </form>
</div>


  </body>
</html>