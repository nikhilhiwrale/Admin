<?php

Include 'Connection.php';

$Type= $_POST['Type'];
$Value = $_POST['Value'];
$Status = $_POST['Status'];
$sql ='Insert into categorymaster(Type,Value,Status)Values("'.$Type.'","'.$Value.'","'.$Status.'")';

$result = $conn->query($sql);
var_dump($result);

echo"Insert into categorymaster(Type,Value,Status)Values('$Type','$Value','$Status')";
 


?>