<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Smartphone Reviews</title>
    <link rel="stylesheet" href="./css/stylecategory.css">
    <?php 
    require_once("dbconnect.php");
    ?>

<script>
  function redirectToReview(selectElement) {
    var selectedUrl = selectElement.value;
    if (selectedUrl) {
      window.location.href = selectedUrl;
    }
  }
</script>
  </head>
  <body>
    <header>
      <h1>Smartphone Reviews</h1>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="category.html">Categories</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Mission</a></li>
        </ul>
      </nav>
    </header>
    <div class="container">
      <section class="main-section">
        <div class="phone-review">
          <img src="images/iphone2.jpg" alt="iPhone 12" />
          <p>
            Since its introduction in 2007, the iPhone has become one of the most popular smartphones in the world, known for its sleek design, user-friendly interface, and advanced features. 
          </p>
          <form action="review.php" method="get">
            <select name="bid<?php echo $row['bid']; ?>" onchange="redirectToReview(this.value)">
              <?php
              $query = "SELECT * FROM `smartphonebrand` WHERE bid=3";
              $rsSmartphonebrand = mysqli_query($con,$query) or die("query error samsung");
              $row = mysqli_fetch_array($rsSmartphonebrand);

              $sql = "SELECT * FROM `smartphones` WHERE bid=3";
              $rsSmartphones = mysqli_query($con, $sql) or die("Query error");
              echo "<option value='0'>Select Smartphone</option>";
              while ($row =mysqli_fetch_array($rsSmartphones)) {
                $url = "review.php?sid=" . $row['sid'];
                $smartphoneName = $row['smartphonename'];
                echo '<option value="' . $url . '">' . $smartphoneName . '</option>';
              }
              ?>
            </select>
            </form>
        </div>

        <div class="phone-review">
          <img src="images/s.png" alt="Samsung Galaxy S21" />
          <h3>Samsung Galaxy S21</h3>
          <p>
            Samsung is a multinational conglomerate based in South Korea, known for manufacturing a wide range of products including smartphones, televisions, home appliances, and more. In the smartphone industry,
          </p>
          <form action="review.php" method="get">
  <select name="bid" onchange="redirectToReview(this)">
    <?php
    $query = "SELECT * FROM `smartphonebrand` WHERE bid=1";
    $rsSmartphonebrand = mysqli_query($con, $query) or die("query error samsung");
    $row = mysqli_fetch_array($rsSmartphonebrand);

    $sql = "SELECT * FROM `smartphones` WHERE bid=1";
    $rsSmartphones = mysqli_query($con, $sql) or die("Query error");
    echo "<option value='0'>Select Smartphone</option>";
    while ($row = mysqli_fetch_array($rsSmartphones)) {
      $url = "review.php?sid=" . $row['sid'];
      $smartphoneName = $row['smartphonename'];
      echo "<option value='$url'>$smartphoneName</option>";
    }
    ?>
  </select>
</form>


        </div>
        <br>

        <div class="phone-review">
          <img src="images/oppo.png" alt="Google Pixel 5" />
          <p>
            the company has gained popularity in recent years for its innovative designs, powerful hardware,
            </p>
            <form action="review.php" method="get">
            <select name="bid<?php echo $row['bid']; ?>" onchange="redirectToReview(this.value)">
              <?php
              $query = "SELECT * FROM `smartphonebrand` WHERE bid=6";
              $rsSmartphonebrand = mysqli_query($con,$query) or die("query error samsung");
              $row = mysqli_fetch_array($rsSmartphonebrand);

              $sql = "SELECT * FROM `smartphones` WHERE bid=6";
              $rsSmartphones = mysqli_query($con, $sql) or die("Query error");
              echo "<option value='0'>Select Smartphone</option>";
              while ($row =mysqli_fetch_array($rsSmartphones)) {
                $url = "review.php?sid=" . $row['sid'];
                $smartphoneName = $row['smartphonename'];
                echo '<option value="' . $url . '">' . $smartphoneName . '</option>';
              }
              ?>
            </select>
            </form>
      </div>
      <br>

      <div class="phone-review">
        <img src="images/vivo.png" alt="Google Pixel 5" />
        <p>
          the company has gained a reputation for producing high-quality smartphones that feature innovative designs, powerful hardware, and advanced camera systems. Vivo's flagship smartphone models, such as the X60 and V21, feature cutting-edge technology such as 5G connectivity, high-resolution displays, and fast charging capabilities.
        </p>
        <form action="review.php" method="get">
            <select name="bid<?php echo $row['bid']; ?>" onchange="redirectToReview(this.value)">
              <?php
              $query = "SELECT * FROM `smartphonebrand` WHERE bid=2";
              $rsSmartphonebrand = mysqli_query($con,$query) or die("query error samsung");
              $row = mysqli_fetch_array($rsSmartphonebrand);

              $sql = "SELECT * FROM `smartphones` WHERE bid=2";
              $rsSmartphones = mysqli_query($con, $sql) or die("Query error");
              echo "<option value='0'>Select Smartphone</option>";
              while ($row =mysqli_fetch_array($rsSmartphones)) {
                $url = "review.php?sid=" . $row['sid'];
                $smartphoneName = $row['smartphonename'];
                echo '<option value="' . $url . '">' . $smartphoneName . '</option>';
              }
              ?>
            </select>
            </form>
      </div>
    </section>
  </div>

  <div class="container2">
    <section class="main-section">
      <div class="phone-review">
        <div class="o">
          <img src="images/download.png" alt="One Plus" />
        </div>
        <p>
          the company initially focused on producing smartphones that offered premium features at a lower price point than its competitors. Since then, OnePlus has expanded its product line.
        </p>
       <form action="review.php" method="get">
            <select name="bid<?php echo $row['bid']; ?>" onchange="redirectToReview(this.value)">
              <?php
              $query = "SELECT * FROM `smartphonebrand` WHERE bid=4";
              $rsSmartphonebrand = mysqli_query($con,$query) or die("query error samsung");
              $row = mysqli_fetch_array($rsSmartphonebrand);

              $sql = "SELECT * FROM `smartphones` WHERE bid=4";
              $rsSmartphones = mysqli_query($con, $sql) or die("Query error");
              echo "<option value='0'>Select Smartphone</option>";
              while ($row =mysqli_fetch_array($rsSmartphones)) {
                $url = "review.php?sid=" . $row['sid'];
                $smartphoneName = $row['smartphonename'];
                echo '<option value="' . $url . '">' . $smartphoneName . '</option>';
              }
              ?>
            </select>
            </form>
      </div>
      <br>

      <div class="phone-review">
        <img src="images/red.png" alt="Samsung Galaxy S21" />
        <p>
          Redmi has gained a strong reputation for its devices' quality, innovation, and value for money. Redmi's smartphones feature powerful processors, high-resolution displays, and advanced camera systems that deliver excellent performance.
        </p>
        <form action="review.php" method="get">
            <select name="bid<?php echo $row['bid']; ?>" onchange="redirectToReview(this.value)">
              <?php
              $query = "SELECT * FROM `smartphonebrand` WHERE bid=5";
              $rsSmartphonebrand = mysqli_query($con,$query) or die("query error samsung");
              $row = mysqli_fetch_array($rsSmartphonebrand);

              $sql = "SELECT * FROM `smartphones` WHERE bid=5";
              $rsSmartphones = mysqli_query($con, $sql) or die("Query error");
              echo "<option value='0'>Select Smartphone</option>";
              while ($row =mysqli_fetch_array($rsSmartphones)) {
                $url = "review.php?sid=" . $row['sid'];
                $smartphoneName = $row['smartphonename'];
                echo '<option value="' . $url . '">' . $smartphoneName . '</option>';
              }
              ?>
            </select>
            </form>
      </div>
      <br>

      <div class="phone-review">
        <div class="r">
          <img src="images/real.png" alt="Google Pixel 5" />
        </div>
        <p>
          Realme's devices typically feature powerful processors, high-resolution displays, and advanced camera systems that rival those found in more expensive smartphones.
        </p>
        <form action="review.php" method="get">
            <select name="bid<?php echo $row['bid']; ?>" onchange="redirectToReview(this.value)">
              <?php
              $query = "SELECT * FROM `smartphonebrand` WHERE bid=7";
              $rsSmartphonebrand = mysqli_query($con,$query) or die("query error samsung");
              $row = mysqli_fetch_array($rsSmartphonebrand);

              $sql = "SELECT * FROM `smartphones` WHERE bid=7";
              $rsSmartphones = mysqli_query($con, $sql) or die("Query error");
              echo "<option value='0'>Select Smartphone</option>";
              while ($row =mysqli_fetch_array($rsSmartphones)) {
                $url = "review.php?sid=" . $row['sid'];
                $smartphoneName = $row['smartphonename'];
                echo '<option value="' . $url . '">' . $smartphoneName . '</option>';
              }
              ?>
            </select>
            </form>
      </div>

      <br>

      <div class="phone-review">
        <div class="l">
          <img src="images/q.jpg" alt="" />
          <p>If you have any other smartphone brand, don't worry, you can write your reviews or problems here.</p>
          <select name="Any Other SmartPhone" id="Any Other SmartPhone">
            <option value="#">Write Your Review</option>
          </select>
        </div>
      </div>
    </section>
  </div>
  </body>
</html>
