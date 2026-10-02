<?php
include "config.php";
$id=$_GET['id'];
$sql="DELETE FROM income WHERE id='$id'";
mysqli_query($conn,$sql);
header("location:idisplay.php");
?>