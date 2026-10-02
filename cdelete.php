<?php
include "config.php";
$id=$_GET['id'];
$sql="DELETE FROM commission WHERE id='$id'";
mysqli_query($conn,$sql);
header("location:cdisplay.php");
?>