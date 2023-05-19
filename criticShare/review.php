<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
     <link href="./css/stylecategory.css/" rel ="stylesheet" >
</head>
<style>
    h1{
        text-align: center;
        background-color: aqua;
        height: 200px;
    }
    .review-form {
        max-width: 100%;
        margin: 0 auto;
        font-family: Arial, sans-serif;
        padding: 20px;
        background-color: #f5f5f5;
      }
      
      legend {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
      }
      
      label {
        font-size: 18px;
        font-weight: bold;
      }
      
      input[type="checkbox"] {
        display: none;
      }
      
      span {
        display: inline-block;
        padding: 5px 10px;
        margin: 5px;
        font-size: 16px;
        font-weight: normal;
        border-radius: 5px;
        background-color: #ddd;
        cursor: pointer;
      }
      
      span:hover {
        background-color: #ccc;
      }
      
      input[type="checkbox"]:checked + span {
        background-color: #007bff;
        color: #fff;
      }
      button{
        font-size: 25px;
      }
      
</style>
<body><?php
if(isset($_REQUEST['rsmsg'])){

if($_REQUEST['rsmsg']==1)
    {
      echo("<div id='rsmsg'><h2>Thanks for your review</h2></div>");
    }
    else if($_REQUEST['rsmsg']==2)
    {
      echo("<div id='rsmsg'><h2>Duplicate Reviews</h2></div>");
      
    }
  
  }
    ?>
    <h1>CriticShare</h1>
		<form class="review-form" method="post" action="reviewsave.php?sid=<?=$_REQUEST['sid']?>">
			<fieldset>
				<legend>Rate the smartphone:</legend>
				<label for="design" value="design">Design:</label><br>
				<input type="radio" name="design" value="excellent"><span>Excellent</span>
				<input type="radio" name="design" value="good"><span>Good</span>
				<input type="radio" name="design" value="fair"><span>Fair</span>
				<input type="radio" name="design" value="poor"><span>Poor</span>
                <h2>What's the opinion to improve this</h2>
                <textarea name="designSuggesion" id="Enter Your Suggetion" cols="90" rows="9"></textarea>
                <br>

				<label for="display" value="display">Display:</label><br>
				<input type="radio" name="display" value="excellent"><span>Excellent</span>
				<input type="radio" name="display" value="good"><span>Good</span>
				<input type="radio" name="display" value="fair"><span>Fair</span>
				<input type="radio" name="display" value="poor"><span>Poor</span>
                <h2>What's the opinion to improve this</h2>
                <textarea name="displaySuggetion" id="Enter Your Suggetion" cols="90" rows="9"></textarea>
                <br>

				<label for="performance" value="performance">Performance:</label><br>
				<input type="radio" name="performance" value="excellent"><span>Excellent</span>
				<input type="radio" name="performance" value="good"><span>Good</span>
				<input type="radio" name="performance" value="fair"><span>Fair</span>
				<input type="radio" name="performance" value="poor"><span>Poor</span>
                <h2>What's the opinion to improve this</h2>
                <textarea name="performanceSuggetion" id="Enter Your Suggetion" cols="90" rows="9"></textarea>
                <br>

				<label for="camera" value="camera">Camera:</label><br>
				<input type="radio" name="camera" value="excellent"><span>Excellent</span>
				<input type="radio" name="camera" value="good"><span>Good</span>
				<input type="radio" name="camera" value="fair"><span>Fair</span>
				<input type="radio" name="camera" value="poor"><span>Poor</span>
                <h2>What's the opinion to improve this</h2>
                <textarea name="cameraSuggetion" id="Enter Your Suggetion" cols="90" rows="9"></textarea>
                <br>

				<label for="battery" value="battery_life">Battery Life:</label><br>
				<input type="radio" name="battery" value="excellent"><span>Excellent</span>
				<input type="radio" name="battery" value="good"><span>Good</span>
				<input type="radio" name="battery" value="fair"><span>Fair</span>
				<input type="radio" name="battery" value="poor"><span>Poor</span>
                <h2>What's the opinion to improve this</h2>
                <textarea name="battery_lifeSuggetion" id="Enter Your Suggetion" cols="90" rows="9"></textarea>
                <br>

				<label for="price" value="price">Price:</label><br>
				<input type="radio" name="price" value="excellent"><span>Excellent</span>
				<input type="radio" name="price" value="good"><span>Good</span>
				<input type="radio" name="price" value="fair"><span>Fair</span>
				<input type="radio" name="price" value="poor"><span>Poor</span>
                <h2>What's the opinion to improve this</h2>
                <textarea name="priceSuggetion" id="Enter Your Suggetion" cols="90" rows="9"></textarea>
                <br>
                <h2>Any Other Suggetion About Product Write Here</h2>
    <br>
    <textarea name="write_Here" id="Write Here" cols="100" rows="30"></textarea>
    <br>
    <input type="submit" value="submit">

    </form>
				
    
</body>
</html>