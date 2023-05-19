<!DOCTYPE html>
<html>
<head>
  <title>Edit Profile</title>
  <link rel="stylesheet" type="text/css" href="./css/profile.css">
</head>
<body>
<?php
session_start();
require_once("dbconnect.php");

$query = "SELECT * FROM `login` WHERE username = '" . $_SESSION['uname'] . "'";
$rslogin = mysqli_query($con, $query);
$row = mysqli_fetch_array($rslogin);
?>
  <div class="container">
    <div class="form-container profile-container">
      <h2>Edit Profile</h2>
      <form action="update-profile.php" method="get" enctype="multipart/form-data">
      <img src="<?php echo "./user_pic/" . $row['profilepic']; ?>" alt="Profile Picture">
      <input type="file" name="profile_pic" accept="image/*" onchange="handleFileSelect(event)" >
      <label for="name">Enter your name</label>
        <input type="text" name="name" placeholder="Name" value="<?=$row['name']?>">
        <label for="username">Enter username</label>
        <input type="text" name="username" placeholder="Username" value="<?=$row['username']?>">
        <button type="submit">Save</button>
      </form>
      <a href="show-profile.php">Cancel</a>
    </div>
  </div>
</body>
<script src="./js/takeimages.js"></script>
</html>
