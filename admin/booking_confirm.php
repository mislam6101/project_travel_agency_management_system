<?php
$id = $_REQUEST['id'];
include_once('db_config.php');
// session_start();

// if(!isset($_SESSION['email'])){
//   header('Location:index.php');
// }
$sql = "UPDATE air_tick_req SET `status` = 'Confirmed' WHERE air_tick_req.id='$id'";
$db->query($sql);
header("Location:booking_req.php");
?>