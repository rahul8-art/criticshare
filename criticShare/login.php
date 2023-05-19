<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Process login form
  $username = $_POST["username"];
  $password = $_POST["password"];
  require_once("dbconnect.php");
  $query = "SELECT * FROM `login` WHERE username='$username'";
  $rslogin = mysqli_query($con,$query);
  if(mysqli_num_rows($rslogin)==0)
  {
    header("location:login_signup.php?rsmsg=1");
  }
  else{
    $row = mysqli_fetch_array($rslogin);
    if($row['password']==$password)
    {
        $_SESSION['uname'] = $username;
        if($row['usertype']=="user")
        {
            header("location:profile.php");
        }
        else if($row['usertype']=="admin")
        {
            header("location:admin.php");
        }
    }
    else{
        header("location:login_signup.php?rsmsg=2");
    }
  }

}
?>
