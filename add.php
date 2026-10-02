<?php
include "config.php";
if(isset($_POST['save'])){
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
          
$sql="INSERT INTO customer (id,customer_name,work_role,person_name,address,phone,item_type,
                            service_detail,customer_date,tin_number,item_code,
                            marketing_code,service_code,delivery_date,details,email)
      VALUES('$id','$customer_name','$work_role','$person_name','$address','$phone','$item_type',
                            '$service_detail','$customer_date','$tin_number','$item_code',
                            '$marketing_code','$service_code','$delivery_date','$details','$email')"; 

    mysqli_query($conn,$sql);
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
        <input type="number" name="id"><br>

        <label>customer_name</label>
        <input type="text" name="customer_name"><br>

        <label>work_role</label>
        <input type="text" name="work_role"><br>

        <label>person_name</label>
        <input type="text" name="person_name"><br>

        <label>address</label>
        <input type="text" name="address"><br>

        <label>phone</label>
        <input type="text" name="phone"><br>

        <label>item_type</label>
        <input type="text" name="item_type"><br>

        <label>service_detail</label>
        <input type="text" name="service_detail"><br>

        <label>customer_date</label>
        <input type="date" name="customer_date"><br>

        <label>tin_number</label>
        <input type="text" name="tin_number"><br>

        <label>marketing_code</label>
        <input type="text" name="marketing_code"><br>

        <label>service_code</label>
        <input type="text" name="service_code"><br>

        <label>delivery_date</label>
        <input type="date" name="delivery_date"><br>

        <label>details</label>                                                     
        <input type="text" name="details"><br>

        <label>email</label>
        <input type="text" name="email"><br>
        
        <input class="button" type="submit" name="save" value="save">

    </form>
    <footer>nefas sellk poly thecnice copy©2018</footer>

</body>
</html>