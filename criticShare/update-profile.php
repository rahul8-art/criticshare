<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Process sign up form
  $name = $_POST["name"];
  $username = $_POST["username"];
  require_once("dbconnect.php");
  $sql = "SELECT * FROM `login` WHERE username = '".$_SESSION['uname']."'";
  $rslogin = mysqli_query($con,$sql);
  $prerow = mysqli_fetch_array($rslogin);

  // Check if a new image file has been selected
  if ($_FILES["profile_pic"]["name"] !== "") {
    $profilePic = $_FILES["profile_pic"]["name"];

    // Delete the previous profile picture file
    $filename = "./user_pic/{$prerow['profilepic']}";
    if (file_exists($filename)) {
      unlink($filename);
    }

    $extension = pathinfo($profilePic, PATHINFO_EXTENSION);
    $filenameWithoutExtension = pathinfo($profilePic, PATHINFO_FILENAME);
    $pic = "$filenameWithoutExtension" . "_" . time() . "." . "$extension";

    // Save the uploaded profile picture to a directory
    $targetDir = "./user_pic/";
    $targetFile = $targetDir . $pic;
    move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $targetFile);

    // Update the profile information including the new profile picture
    $query = "UPDATE `login` SET `username`='$username', `name`='$name', `profilepic`='$pic' WHERE username='" . $prerow['username'] . "'";
  } else {
    // Update the profile information without changing the profile picture
    $query = "UPDATE `login` SET `username`='$username', `name`='$name' WHERE username='" . $prerow['username'] . "'";
  }

  $rslogin = mysqli_query($con, $query);
  $_SESSION['uname'] = $username;
  header("Location: profile.php?rsmsg=2");
  exit();
  }
  ?>
