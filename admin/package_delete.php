<?php 
$id = $_REQUEST['id'];
include_once('db_config.php');

$sql = "DELETE FROM package WHERE package.id='$id'";
$db->query($sql);
$db->close();
header('Location:running_packages.php');
?>