<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Process sign up form
  $profilePic = $_FILES["profile_pic"]["name"];
  $name = $_REQUEST["name"];
  $username = $_REQUEST["username"];
  $password = $_REQUEST["password"];
  require_once("dbconnect.php");
  $query = "SELECT * FROM `login` WHERE username=$username";
 $rslogin = mysqli_query($con,$query) or die("Query Error !");


 if(mysqli_num_rows($rslogin)==0){
    
    $extension = pathinfo($profilePic, PATHINFO_EXTENSION);
    $filenameWithoutExtension = pathinfo($profilePic, PATHINFO_FILENAME);

   $pic = "$filenameWithoutExtension".time().".$extension";
  // Save the uploaded profile picture to a directory
  $targetDir = "./user_pic/";
  $targetFile = $targetDir .$pic;
  move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $targetFile);
  $query = "INSERT INTO `criticshare`.`login` ( `username`, `password`, `name`, `profilepic`,`time`) 
  VALUES ('$username', '$password', '$name', '$pic',now());";
  mysqli_query($con,$query);
 
  header("Location: login_signup.php?rsmsg=3");
  exit();
  }
  
  else 
  {
    header("location:login_signup?rsmsg=4");
  }
}
?>
