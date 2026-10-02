<?php
include "config.php";
$id=$_GET['id'];
$sql="DELETE FROM followups WHERE id='$id'";
mysqli_query($conn,$sql);
header("location:fdisplay.php");
?>