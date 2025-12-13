<?php 
$id = $_REQUEST['id'];
include_once('db_config.php');

$sql = "DELETE FROM air_ticket WHERE air_ticket.id='$id'";
$db->query($sql);
$db->close();
header('Location:air_ticket_list.php');
?>