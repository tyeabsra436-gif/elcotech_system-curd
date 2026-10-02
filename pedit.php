<?php
include "config.php";
$id=$_GET['id'];
$sql="SELECT * FROM purchase_requests WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $item_type=$_POST['item_type'];
    $quantity=$_POST['quantity'];
    $reason=$_POST['reason'];
    $request_date=$_POST['request_date'];

$upd="UPDATE purchase_requests SET 
      id='$id',
      item_type='$item_type',
      quantity='$quantity',
      reason='$reason',
      request_date='$request_date'
  
      where id='$id'";

      
    mysqli_query($conn,$upd);
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
        <input type="number" name="id" value="<?php echo $row['id']?>"><br>

        <label>item_type</label>
        <input type="text" name="item_type" value="<?php echo $row['item_type']?>"><br>

        <label>quantity</label>
        <input type="number" name="quantity" value="<?php echo $row['quantity']?>"><br>

        <label>reason</label>
        <input type="text" name="reason" value="<?php echo $row['reason']?>"><br>

        <label>request_date</label>
        <input type="date" name="request_date" value="<?php echo $row['request_date']?>"><br>

        <input class="button" type="submit" name="update" value="update">

    </form>
    <footer>nefas sellk poly thecnice copy©2018</footer>

</body>
</html>