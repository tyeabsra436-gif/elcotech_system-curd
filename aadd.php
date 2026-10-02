<?php
include "config.php";
if(isset($_POST['save'])){
    $id=$_POST['id'];
    $unit=$_POST['unit'];
    $quantity=$_POST['quantity'];
    $entry_date=$_POST['entry_date'];
    $purchase_price=$_POST['purchase_price'];
    $receipt_price=$_POST['receipt_price'];
    $detais=$_POST['detais'];
          
$sql="INSERT INTO assets (id,unit,quantity,entry_date,purchase_price,receipt_price,detais)
VALUES('$id','$unit','$quantity','$entry_date','$purchase_price','$receipt_price','$detais'
              )"; 

    mysqli_query($conn,$sql);
    header("location:adisplay.php");

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
        <a href="pdisplay.php">purchase_requests</a>
        <a href="fdisplay.php">followups</a>
        <a  class="active"  href="adisplay.php">assets</a>
        <a href="sdisplay.php">sell_buy</a>
        <a href="edisplay.php">expenses</a>
    </nav>
    <form method="POST">
    <label>id</label>
        <input type="number" name="id"><br>

        <label>unit</label>
        <input type="text" name="unit"><br>

        <label>quantity</label>
        <input type="number" name="quantity"><br>

        <label>entry_date</label>
        <input type="date" name="entry_date"><br>

        <label>purchase_price</label>
        <input type="decimal" name="purchase_price"><br>

        <label>receipt_price</label>
        <input type="decimal" name="receipt_price"><br>

        <label>detais</label>
        <input type="text" name="detais"><br>

        <input class="button" type="submit" name="save" value="save">

    </form>
    <footer>nefas sellk poly thecnice copy©2018</footer>

</body>
</html>