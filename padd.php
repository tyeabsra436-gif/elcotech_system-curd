<?php
include "config.php";
if(isset($_POST['save'])){
    $id=$_POST['id'];
    $item_type=$_POST['item_type'];
    $quantity=$_POST['quantity'];
    $reason=$_POST['reason'];
    $request_date=$_POST['request_date'];
          
$sql="INSERT INTO purchase_requests (id,item_type,quantity,reason,request_date)
VALUES('$id','$item_type','$quantity','$reason','$request_date'
              )"; 

    mysqli_query($conn,$sql);
    header("location:pdisplay.php");

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
        <a href="display.php">customer</a>
        <a class="active" href="pdisplay.php">purchase_requests</a>
        <a href="fdisplay.php">followups</a>
        <a href="adisplay.php">assets</a>
        <a href="sdisplay.php">sell_buy</a>
        <a href="edisplay.php">expenses</a>
    </nav>
    <form method="POST">
    <label>id</label>
        <input type="number" name="id"><br>

        <label>item_type</label>
        <input type="text" name="item_type"><br>

        <label>quantity</label>
        <input type="number" name="quantity"><br>

        <label>reason</label>
        <input type="text" name="reason"><br>

        <label>request_date</label>
        <input type="date" name="request_date"><br>


        <input class="button" type="submit" name="save" value="save">

    </form>
    <footer>nefas sellk poly thecnice copy©2018</footer>

</body>
</html>