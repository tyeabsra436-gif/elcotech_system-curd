<?php
include "config.php";
if(isset($_POST['save'])){
    $id=$_POST['id'];
    $customer_name=$_POST['customer_name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $service_detail=$_POST['service_detail'];
    $commission_date=$_POST['commission_date'];
    $befor_vat=$_POST['befor_vat'];
    $vat=$_POST['vat'];
    $after_vat=$_POST['after_vat'];
    $marketing_person=$_POST['marketing_person'];
    $service_person=$_POST['service_person'];
    $receipet_number=$_POST['receipet_number'];
    $marketing_commission=$_POST['marketing_commission'];
    $professional_commission=$_POST['professional_commission'];
    $remark=$_POST['remark'];
          
$sql="INSERT INTO commission (id,customer_name,address,phone,service_detail,commission_date,
                             befor_vat,vat,after_vat,marketing_person,service_person,
                             receipet_number,marketing_commission,professional_commission,remark)
VALUES('$id','$customer_name','$address','$phone','$service_detail','$commission_date','$befor_vat','$vat','$after_vat',
    '$marketing_person','$service_person','$receipet_number','$marketing_commission','$professional_commission','$remark'
              )"; 

    mysqli_query($conn,$sql);
    header("location:cdisplay.php");

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
        <a class="active" href="cdisplay.php">commission</a>
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

        <label>commission_date</label>
        <input type="date" name="commission_date"><br>

        <label>befor_vat</label>
        <input type="decimal" name="befor_vat"><br>

        <label>vat</label>
        <input type="decimal" name="vat"><br>

        <label>after_vat</label>
        <input type="decimal" name="after_vat"><br>

        <label>marketing_person</label>
        <input type="text" name="marketing_person"><br>

        <label>service_person</label>
        <input type="text" name="service_person"><br>

        <label>receipet_number</label>
        <input type="text" name="receipet_number"><br>

        <label>marketing_commission</label>                                                     
        <input type="decimal" name="marketing_commission"><br>

        <label>professional_commission</label>
        <input type="decimal" name="professional_commission"><br>
        
        <label>remark</label>
        <input type="text" name="remark"><br>
        
        <input class="button" type="submit" name="save" value="save">

    </form>
    <footer>nefas sellk poly thecnice copy©2018</footer>

</body>
</html>