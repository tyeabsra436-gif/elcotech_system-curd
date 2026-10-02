<?php
include "config.php";
$id=$_GET['id'];
$sql="SELECT * FROM customer WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $customer_name=$_POST['customer_name'];
    $work_role=$_POST['work_role'];
    $person_name=$_POST['person_name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $item_type=$_POST['item_type'];
    $service_detail=$_POST['service_detail'];
    $customer_date=$_POST['customer_date'];
    $tin_number=$_POST['tin_number'];
    $item_code=$_POST['item_code'];
    $marketing_code=$_POST['marketing_code'];
    $service_code=$_POST['service_code'];
    $delivery_date=$_POST['delivery_date'];
    $details=$_POST['details'];
    $email=$_POST['email'];

$upd="UPDATE customer SET 
      id='$id',
      customer_name='$customer_name',
      work_role='$work_role',
      person_name='$person_name',
      address='$address',
      phone='$phone',
      item_type='$item_type',
      service_detail='$service_detail',
      customer_date='$customer_date',
      tin_number='$tin_number',
      item_code='$item_code',
      marketing_code='$marketing_code',
      service_code='$service_code',
      delivery_date='$delivery_date',
      details='$details',
      email='$email'
     
      where id='$id'";

      
    mysqli_query($conn,$upd);
    header("location:display.php");
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
        <a class="active" href="display.php">customer</a>
        <a href="pdisplay.php">purchase_requests</a>
        <a href="fdisplay.php">followups</a>
        <a href="adisplay.php">assets</a>
        <a href="sdisplay.php">sell_buy</a>
        <a href="edisplay.php">expenses</a>
    </nav>
    <form method="POST">
    <label>id</label>
        <input type="number" name="id" value="<?php echo $row['id']?>"><br>

        <label>customer_name</label>
        <input type="text" name="customer_name" value="<?php echo $row['customer_name']?>"><br>

        <label>work_role</label>
        <input type="text" name="work_role" value="<?php echo $row['work_role']?>"><br>

        <label>person_name</label>
        <input type="text" name="person_name" value="<?php echo $row['person_name']?>"><br>

        <label>address</label>
        <input type="text" name="address" value="<?php echo $row['address']?>"><br>

        <label>phone</label>
        <input type="text" name="phone" value="<?php echo $row['phone']?>"><br>

        <label>item_type</label>
        <input type="text" name="item_type" value="<?php echo $row['item_type']?>"><br>

        <label>service_detail</label>
        <input type="text" name="service_detail" value="<?php echo $row['service_detail']?>"><br>

        <label>customer_date</label>
        <input type="date" name="customer_date" value="<?php echo $row['customer_date']?>"><br>

        <label>tin_number</label>
        <input type="text" name="tin_number" value="<?php echo $row['tin_number']?>"><br>

        <label>marketing_code</label>
        <input type="text" name="marketing_code" value="<?php echo $row['marketing_code']?>"><br>

        <label>service_code</label>
        <input type="text" name="service_code" value="<?php echo $row['service_code']?>"><br>

        <label>delivery_date</label>
        <input type="date" name="delivery_date" value="<?php echo $row['delivery_date']?>"><br>

        <label>details</label>                                                     
        <input type="text" name="details" value="<?php echo $row['details']?>"><br>

        <label>email</label>
        <input type="text" name="email" value="<?php echo $row['email']?>"><br>
        
        <input class="button" type="submit" name="update" value="update">

    </form>
    <footer>nefas sellk poly thecnice copy©2018</footer>

</body>
</html>