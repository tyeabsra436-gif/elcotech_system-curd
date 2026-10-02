<?php
include "config.php";
$id=$_GET['id'];
$sql="SELECT * FROM assets WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $unit=$_POST['unit'];
    $quantity=$_POST['quantity'];
    $entry_date=$_POST['entry_date'];
    $purchase_price=$_POST['purchase_price'];
    $receipt_price=$_POST['receipt_price'];
    $detais=$_POST['detais'];

$upd="UPDATE assets SET 
      id='$id',
      unit='$unit',
      quantity='$quantity',
      entry_date='$entry_date',
      purchase_price='$purchase_price',
      receipt_price='$receipt_price',
      detais='$detais'
  
      where id='$id'";

      
    mysqli_query($conn,$upd);
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
        <a  href="display.php">customer</a>
        <a href="pdisplay.php">purchase_requests</a>
        <a href="fdisplay.php">followups</a>
        <a class="active" href="adisplay.php">assets</a>
        <a href="sdisplay.php">sell_buy</a>
        <a href="edisplay.php">expenses</a>
    </nav>
    <form method="POST">
    <label>id</label>
        <input type="number" name="id" value="<?php echo $row['id']?>"><br>

        <label>unit</label>
        <input type="text" name="unit" value="<?php echo $row['unit']?>"><br>

        <label>quantity</label>
        <input type="number" name="quantity" value="<?php echo $row['quantity']?>"><br>

        <label>entry_date</label>
        <input type="text" name="entry_date" value="<?php echo $row['entry_date']?>"><br>

        <label>purchase_price</label>
        <input type="date" name="purchase_price" value="<?php echo $row['purchase_price']?>"><br>

        
        <label>receipt_price</label>
        <input type="date" name="receipt_price" value="<?php echo $row['receipt_price']?>"><br>

        
        <label>detais</label>
        <input type="date" name="detais" value="<?php echo $row['detais']?>"><br>

        <input class="button" type="submit" name="update" value="update">

    </form>
    <footer>nefas sellk poly thecnice copy©2018</footer>

</body>
</html>