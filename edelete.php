<?php
include "config.php";
$id=$_GET['id'];
$sql="DELETE FROM expenses WHERE id='$id'";
mysqli_query($conn,$sql);
header("location:edisplay.php");
?>