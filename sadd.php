<?php
include "config.php";
if(isset($_POST['save'])){
    $id=$_POST['id'];
    $item_type=$_POST['item_type'];
    $unit=$_POST['unit'];
    $quantity=$_POST['quantity'];
    $entry_date=$_POST['entry_date'];
    $buyer_name=$_POST['buyer_name'];
    $customer_phone=$_POST['customer_phone'];
    $detail=$_POST['detail'];
          
$sql="INSERT INTO sell_buy (id,item_type,unit,quantity,entry_date,buyer_name,customer_phone,detail)
VALUES('$id','$item_type','$unit','$quantity','$entry_date','$buyer_name','$customer_phone','$detail')"; 

    mysqli_query($conn,$sql);
    header("location:sdisplay.php");

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
        <a href="adisplay.php">assets</a>
        <a class="active" href="sdisplay.php">sell_buy</a>
        <a href="edisplay.php">expenses</a>
    </nav>
    <form method="POST">
    <label>id</label>
        <input type="number" name="id"><br>

        <label>item_type</label>
        <input type="text" name="item_type"><br>

        <label>unit</label>
        <input type="text" name="unit"><br>

        <label>quantity</label>
        <input type="number" name="quantity"><br>

        <label>entry_date</label>
        <input type="date" name="entry_date"><br>

        <label>buyer_name</label>
        <input type="text" name="buyer_name"><br>

        <label>customer_phone</label>
        <input type="tel" name="customer_phone"><br>

        <label>detail</label>
        <input type="text" name="detail"><br>

        <input class="button" type="submit" name="save" value="save">

    </form>
    <footer>nefas sellk poly thecnice copy©2018</footer>

</body>
</html>