<?php 
$id = $_REQUEST['id'];
include_once('db_config.php');

$sql = "DELETE FROM blogs WHERE blogs.id='$id'";
$db->query($sql);
$db->close();
header('Location:blog_list.php');
?>