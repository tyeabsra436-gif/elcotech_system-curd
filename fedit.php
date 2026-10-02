<?php
include "config.php";
$id=$_GET['id'];
$sql="SELECT * FROM followups WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $customer_number=$_POST['customer_number'];
    $customer_name=$_POST['customer_name'];
    $interest_details=$_POST['interest_details'];
    $phone=$_POST['phone'];

$upd="UPDATE followups SET 
      id='$id',
      customer_number='$customer_number',
      customer_name='$customer_name',
      interest_details='$interest_details',
      phone='$phone'
  
      where id='$id'";

      
    mysqli_query($conn,$upd);
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
        <a href="display.php">customer</a>
        <a href="pdisplay.php">purchase_requests</a>
        <a  class="active" href="fdisplay.php">followups</a>
        <a href="adisplay.php">assets</a>
        <a href="sdisplay.php">sell_buy</a>
        <a href="edisplay.php">expenses</a>
    </nav>
    <form method="POST">
    <label>id</label>
        <input type="number" name="id" value="<?php echo $row['id']?>"><br>

        <label>customer_number</label>
        <input type="text" name="customer_number" value="<?php echo $row['customer_number']?>"><br>

        <label>customer_name</label>
        <input type="text" name="customer_name" value="<?php echo $row['customer_name']?>"><br>

        <label>interest_details</label>
        <input type="text" name="interest_details" value="<?php echo $row['interest_details']?>"><br>

        <label>phone</label>
        <input type="tel" name="phone" value="<?php echo $row['phone']?>"><br>

        <input class="button" type="submit" name="update" value="update">

    </form>
    <footer>nefas sellk poly thecnice copy©2018</footer>

</body>
</html>