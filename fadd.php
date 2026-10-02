<?php
include "config.php";
if(isset($_POST['save'])){
    $id=$_POST['id'];
    $customer_number=$_POST['customer_number'];
    $customer_name=$_POST['customer_name'];
    $interest_details=$_POST['interest_details'];
    $phone=$_POST['phone'];
          
$sql="INSERT INTO followups (id,customer_number,customer_name,interest_details,phone)
VALUES('$id','$customer_number','$customer_name','$interest_details','$phone'
              )"; 

    mysqli_query($conn,$sql);
    header("location:fdisplay.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>nefas sillk poly technice college</h1>
    <nav>
        <a href="idisplay.php">income</a>
        <a href="cdisplay.php">commission</a>
        <a  href="display.php">customer</a>
        <a href="pdisplay.php">purchase_requests</a>
        <a class="active" href="fdisplay.php">followups</a>
        <a href="adisplay.php">assets</a>
        <a href="sdisplay.php">sell_buy</a>
        <a href="edisplay.php">expenses</a>
    </nav>
    <form method="POST">
    <label>id</label>
        <input type="number" name="id"><br>

        <label>customer_number</label>
        <input type="text" name="customer_number"><br>

        <label>customer_name</label>
        <input type="text" name="customer_name"><br>

        <label>interest_details</label>
        <input type="text" name="interest_details"><br>

        <label>phone</label>
        <input type="tel" name="phone"><br>


        <input class="button" type="submit" name="save" value="save">

    </form>
    <footer>nefas sellk poly thecnice copy©2018</footer>

</body>
</html>