<?php

include'Connection.php';
  $addressID=$_POST['addressID'];   
  $productID=$_POST['productID']; 


  $sql="update product_details set addressID='$addressID' Where productID='$productID'";
  
  $result=$conn->query($sql);



?>