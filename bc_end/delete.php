<?php
//including the database connection file
require_once('../dbconf.php');
//getting id of the data from url
$id = $_GET['id'];
//deleting the row from table
$sql ="DELETE FROM booking WHERE id=$id";
$result = $conn->query($sql);
//redirecting to the display page (index.php in our case)
header("Location:table_list.php");
?>