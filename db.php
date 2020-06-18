<?php
$host = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect('localhost','root','');
if(!$con)
 {       
 die("problems connecting to DB.".mysqli_error());
}
// Attempt create database query execution
$sql = "CREATE DATABASE IF NOT EXISTS library;";
mysqli_query($con, $sql);
    
 $db=mysqli_select_db($con,'library');
// creating  table users

 $tab="CREATE TABLE IF NOT EXISTS users(

  `userId` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `conpassword` varchar(30) NOT NULL
)";
 mysqli_query($con, $tab);
   
// creating  table for contact us

$contact="CREATE TABLE IF NOT EXISTS `tblcontact` (
`id` INT(10) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),

  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `content` tinytext NOT NULL
)";
mysqli_query($con, $contact);
 
// creating  table for books

$book="CREATE TABLE  IF NOT EXISTS `books` (
  `book_name` varchar(20) NOT NULL,
  `book_author` varchar(20) NOT NULL,
  `publication` varchar(20) NOT NULL,
  `issue_date` varchar(15) NOT NULL,
  `book_qty` int(10) NOT NULL,
  `available_qty` int(10) NOT NULL,
  `librarian` varchar(20) NOT NULL
)";
mysqli_query($con, $book);

// creating  table for issuing books

$issue="CREATE TABLE  IF NOT EXISTS `issue` (
   `id` INT(10) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),
  `stud_roll` varchar(10) NOT NULL,
  `stud_name` varchar(30) NOT NULL,
  `stud_mail` varchar(30) NOT NULL,
  `stud_phone` varchar(10) NOT NULL,
  `book_name` varchar(25) NOT NULL,
  `issue_date` varchar(10) NOT NULL,
  `return_date` varchar(10) NOT NULL
)";

mysqli_query($con, $issue);

// Close connection
mysqli_close($con);
?>