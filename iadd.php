<?php
include "config.php";
if(isset($_POST['save'])){
    $id=$_POST['id'];
    $customer_name=$_POST['customer_name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $service_detail=$_POST['service_detail'];
    $income_date=$_POST['income_date'];
    $before_bat=$_POST['before_bat'];
    $vat=$_POST['vat'];
    $after_vat=$_POST['after_vat'];
    $marketing_person=$_POST['marketing_person'];
    $service_person=$_POST['service_person'];
    $receipet_number=$_POST['receipet_number'];
    $expense_detail=$_POST['expense_detail'];
    $expense_total=$_POST['expense_total'];
          
$sql="INSERT INTO income (id,customer_name,address,
                           phone,service_detail,
                           income_date,before_bat,vat,
                           after_vat,marketing_person,service_person,
                            receipet_number,expense_detail,expense_total)
      VALUES('$id','$customer_name','$address',
      '$phone','$service_detail',
      '$income_date','$before_bat','$vat',
      '$after_vat','$marketing_person','$service_person',
      '$receipet_number','$expense_detail','$expense_total')"; 

    mysqli_query($conn,$sql);
    header("location:idisplay.php");

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
        <a class="active" href="idisplay.php">income</a>
        <a href="cdisplay.php">commission</a>
        <a  href="display.php">customer</a>
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

        <label>address</label>
        <input type="text" name="address"><br>

        <label>phone</label>
        <input type="text" name="phone"><br>

        <label>service_detail</label>
        <input type="text" name="service_detail"><br>

        <label>income_date</label>
        <input type="date" name="income_date"><br>

        <label>before_bat</label>
        <input type="decimal" name="before_bat"><br>

        <label>vat</label>
        <input type="decimal" name="vat"><br>

        <label>after_vat</label>
        <input type="decimal" name="after_vat"><br>

        <label>marketing_person</label>
        <input type="text" name="marketing_person"><br>

        <label>marketing_code</label>
        <input type="text" name="marketing_code"><br>

        <label>service_person</label>
        <input type="text" name="service_person"><br>

        <label>receipet_number</label>
        <input type="date" name="receipet_number"><br>

        <label>expense_detail</label>                                                     
        <input type="text" name="expense_detail"><br>

        <label>expense_total</label>
        <input type="decimal" name="expense_total"><br>
        
        <input class="button" type="submit" name="save" value="save">

    </form>
    <footer>nefas sellk poly thecnice copy©2018</footer>

</body>
</html>