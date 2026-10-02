<?php
include "config.php";
$id=$_GET['id'];
$sql="DELETE FROM purchase_requests WHERE id='$id'";
mysqli_query($conn,$sql);
header("location:pdisplay.php");
?>