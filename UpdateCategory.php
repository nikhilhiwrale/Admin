<?php

Include 'Connection.php';
$row_id = $_POST['row_id'];
$Type= $_POST['Type'];
$Value = $_POST['Value'];
$Status = $_POST['Status'];
$sql ="Update categorymaster set Type='$Type',Value='$Value',Status='$Status' where row_id='$row_id'";

$result = $conn->query($sql);
var_dump($result);
 


?>