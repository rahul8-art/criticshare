<?php
  // Add your logout logic here
  // For example, destroying the session
  session_start();
  session_unset();
  header("location:index.html");
  session_destroy();
?>

