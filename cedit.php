<?php
include "config.php";
$id=$_GET['id'];
$sql="SELECT * FROM commission WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
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

$upd="UPDATE commission SET 
      id='$id',
      customer_name='$customer_name',
      address='$address',
      phone='$phone',
      commission_date='$commission_date',
      befor_vat='$befor_vat',
      vat='$vat',
      after_vat='$after_vat',
      marketing_person='$marketing_person',
      service_person='$service_person',
      receipet_number='$receipet_number',
      marketing_commission='$marketing_commission',
      professional_commission='$professional_commission',
      remark='$remark'

     
      where id='$id'";

      
    mysqli_query($conn,$upd);
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
        <a  class="active" href="cdisplay.php">commission</a>
        <a href="display.php">customer</a>
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

        <label>address</label>
        <input type="text" name="address" value="<?php echo $row['address']?>"><br>

        <label>phone</label>
        <input type="text" name="phone" value="<?php echo $row['phone']?>"><br>

        <label>service_detail</label>
        <input type="text" name="service_detail" value="<?php echo $row['service_detail']?>"><br>

        <label>commission_date</label>
        <input type="date" name="commission_date" value="<?php echo $row['commission_date']?>"><br>

        <label>befor_vat</label>
        <input type="decimal" name="befor_vat" value="<?php echo $row['befor_vat']?>"><br>

        <label>vat</label>
        <input type="decimal" name="vat" value="<?php echo $row['vat']?>"><br>

        <label>after_vat</label>
        <input type="decimal" name="after_vat" value="<?php echo $row['after_vat']?>"><br>

        <label>marketing_person</label>
        <input type="text" name="marketing_person" value="<?php echo $row['marketing_person']?>"><br>

        <label>service_person</label>
        <input type="text" name="service_person" value="<?php echo $row['service_person']?>"><br>

        <label>receipet_number</label>
        <input type="text" name="receipet_number" value="<?php echo $row['receipet_number']?>"><br>

        <label>marketing_commission</label>                                                     
        <input type="decimal" name="marketing_commission" value="<?php echo $row['marketing_commission']?>"><br>

        <label>professional_commission</label>
        <input type="decimal" name="professional_commission" value="<?php echo $row['professional_commission']?>"><br>
        
        <label>remark</label>
        <input type="text" name="remark" value="<?php echo $row['remark']?>"><br>
        
        <input class="button" type="submit" name="update" value="update">

    </form>
    <footer>nefas sellk poly thecnice copy©2018</footer>

</body>
</html>