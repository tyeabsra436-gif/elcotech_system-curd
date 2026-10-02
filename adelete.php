<?php
include "config.php";
$id=$_GET['id'];
$sql="DELETE FROM assets WHERE id='$id'";
mysqli_query($conn,$sql);
header("location:adisplay.php");
?>