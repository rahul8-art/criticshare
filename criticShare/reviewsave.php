<?php
session_start();
$sid = $_REQUEST['sid'];
$design = isset($_REQUEST['design']) ? $_REQUEST['design'] : null;
$designSuggesion = isset($_REQUEST['designSuggesion']) ? $_REQUEST['designSuggesion'] : null;
$display = isset($_REQUEST['display']) ? $_REQUEST['display'] : null;
$displaySuggesion = isset($_REQUEST['displaySuggesion']) ? $_REQUEST['displaySuggesion'] : null;
$performance = isset($_REQUEST['performance']) ? $_REQUEST['performance'] : null;
$performanceSuggestion = isset($_REQUEST['performanceSuggestion']) ? $_REQUEST['performanceSuggestion'] : null;
$camera = isset($_REQUEST['camera']) ? $_REQUEST['camera'] : null;
$cameraSuggetion = isset($_REQUEST['cameraSuggetion']) ? $_REQUEST['cameraSuggetion'] : null;
$battery_life = isset($_REQUEST['battery_life']) ? $_REQUEST['battery_life'] : null;
$battery_lifeSuggesion = isset($_REQUEST['battery_lifeSuggesion']) ? $_REQUEST['battery_lifeSuggesion'] : null;
$price = isset($_REQUEST['price']) ? $_REQUEST['price'] : null;
$priceSuggesion = isset($_REQUEST['priceSuggesion']) ? $_REQUEST['priceSuggesion'] : null;
$write_here = isset($_REQUEST['write_here']) ? $_REQUEST['write_here'] : null;

require_once("dbconnect.php");
$sql = "SELECT * FROM `reviews` WHERE sid='$sid' AND username='{$_SESSION['uname']}'";
$rsreview = mysqli_query($con, $sql);
if (mysqli_num_rows($rsreview) == 0) {
    $query = "INSERT INTO `criticshare`.`reviews` (`sid`, `username`, `design`, `designSuggesion`, `display`, `displaySuggesion`, `performance`, `performanceSuggesion`, `camera`, `cameraSuggesion`, `battery_life`, `battery_lifeSuggesion`, `price`, `priceSuggesion`, `write_here`, `rtime`)
    VALUES ('$sid', '{$_SESSION['uname']}', '$design', '$designSuggesion', '$display', '$displaySuggesion', '$performance', '$performanceSuggestion', '$camera', '$cameraSuggetion', '$battery_life', '$battery_lifeSuggesion', '$price', '$priceSuggesion', '$write_here', UNIX_TIMESTAMP());";
    mysqli_query($con, $query);
    header("location:review.php?rsmsg=1&sid=$sid");
    exit;
} else {
    header("location:review.php?rsmsg=2&sid = $sid");
    exit;
}
?>
