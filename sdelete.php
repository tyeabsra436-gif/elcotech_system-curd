<?php
include "config.php";
$id=$_GET['id'];
$sql="DELETE FROM sell_buy WHERE id='$id'";
mysqli_query($conn,$sql);
header("location:sdisplay.php");
?>