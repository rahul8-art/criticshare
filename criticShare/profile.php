
<!DOCTYPE html>
<html>
<head>
  <title>User Profile</title>
  <link rel="stylesheet" type="text/css" href="./css/profile.css">
  <link rel="stylesheet" type ="text/css" href="./css/signup.css">
</head>
<body>
<?php
session_start();
require_once("dbconnect.php");

$query = "SELECT * FROM `login` WHERE username = '" . $_SESSION['uname'] . "'";
$rslogin = mysqli_query($con, $query);
$row = mysqli_fetch_array($rslogin);
if(isset($_REQUEST['rsmsg'])){
if($_REQUEST['rsmsg']==2)
{
  echo("<div id='rsmsg'><h2>Profile Updated Successfully</h2></div>");
}
else if($_REQUEST['rsmsg']==1)
{
  echo("<div id='rsmsg'><h2>This username has already been taken</h2></div>");
  
}
}
?>

  <div class="container">
    <div class="profile-container">
      <img src="<?php echo "./user_pic/" . $row['profilepic']; ?>" alt="Profile Picture">
      <h2>Name: <?php echo $row['name']; ?></h2>
      <h3>Username: <?php echo $row['username']; ?></h3>
      <a href="edit-profile.php">Edit Profile</a>
      <a href="logout.php">Logout</a>
    </div>
  </div>
</body>
</html>
