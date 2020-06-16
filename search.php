
<html>

<head>
    <link rel="stylesheet" href="CSS/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

<style>

  .main-nav   .search-container {
  float: right;
}
* {box-sizing: border-box;}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #d147a3;
}

.main-nav input[type=text] {
  padding: 6px;
   margin-left: 30px;
  margin-top: 8px;
  font-size: 15px;
  border: none;
}
.main-nav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

</style>
<body>

<nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
      
       <p class="log">
       <img src="images/index.jpeg" width="50" height="50">
   </p>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="student_info.php" class="nav-links">students</a>
            </li>
        
            <li>
                <a href="issue.php" class="nav-links">Issue Book</a>
            </li>
            <li>
                <a href="return.php" class="nav-links">Return Book</a>
            </li>
            
            <li>
                
                 <div class="search-container">
    <form name="form1" method="post" action="search.php">
          <input type="text" placeholder="Search for a book name here.." name="search">
      <button type="submit" name="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</li>
            <li>
              <button type="button" class="open-button" onclick="window.location.href = 'logout.php';">Logout</button>
               </li>
            
             </ul>
    </nav>
 
  </body>
</html>

<?php include 'con.php';?>
<?php
$db=mysqli_select_db($con,'library');
if(isset($_POST["submit"]))
 {
$search=$_POST['search'];

$res="select * from books where book_name='$search'";
echo "<h2><center>";echo "YOUR SEARCHED RESULTS....."; echo "</center></h2>";
$check=mysqli_query($con,$res);

    if($check && mysqli_num_rows( $check) > 0)
    {
      echo "<br>";
      echo "<table>";
      echo "<tr>";
      echo "<th>"; echo "Book Name"; echo "</th>";
        echo "<th>"; echo "Author Name"; echo "</th>";
        echo "<th>"; echo "Publication"; echo "</th>";
        echo "<th>"; echo "Purchased date"; echo "</th>";
        echo "<th>"; echo "quantity of book"; echo "</th>";
        echo "<th>"; echo "Available books"; echo "</th>";
        echo "<th>"; echo "Librarian Name"; echo "</th>";
        echo "</tr>";

      
      while($rows=mysqli_fetch_array($check))
      {
echo "<tr>";
echo "<td>"; echo $rows["book_name"]; echo "</td>";
echo "<td>"; echo $rows["book_author"]; echo "</td>";
echo "<td>"; echo $rows["publication"]; echo "</td>";
echo "<td>"; echo $rows["issue_date"]; echo "</td>";
echo "<td>"; echo $rows["book_qty"]; echo "</td>";
echo "<td>"; echo $rows["available_qty"]; echo "</td>";
echo "<td>"; echo $rows["librarian"]; echo "</td>";

      }
echo "</tr>";
echo "</table>";
}

else{

  echo "<script>
      alert('oops!book not found');
      document.location='book_display.php'
      </script>";
   }


}
?>