<!DOCTYPE html>
<html>
<head>
  <title>Login and Sign Up Form</title>
  <link rel="stylesheet" type="text/css" href="./css/signup.css">
</head>
<body>
  <?php
    if($_REQUEST['rsmsg']==1)
    {
      echo("<div id='rsmsg'><h2>Invalid Username</h2></div>");
    }
    else if($_REQUEST['rsmsg']==2)
    {
      echo("<div id='rsmsg'><h2>Invalid Password</h2></div>");
      
    }
    else if($_REQUEST['rsmsg']==3)
    {
      echo("<div id='rsmsg'><h2>Successfully Login </h2></div>");
      
    }
    else if($_REQUEST['rsmsg']==4)
    {
      echo("<div id='rsmsg'><h2>This username has already been taken</h2></div>");
      
    }
  ?>
  <div class="container">
    <div class="form-container">
      <h2>Login</h2>
      <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="LOGIN">
      </form>
    </div>

    <div class="form-container">
      <h2>Sign Up</h2>
      <form action="signup.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="profile_pic" >
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Sign Up">
      </form>
    </div>
  </div>
</body>
<script src="./js/takeimages.js"></script>
</html>
