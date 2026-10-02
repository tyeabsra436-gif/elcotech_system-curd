<?php
include "config.php";
$id=$_GET['id'];
$sql="SELECT * FROM income WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
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

$upd="UPDATE income SET 
      id='$id',
      customer_name='$customer_name',
      address='$address',
      phone='$phone',
      service_detail='$service_detail',
      income_date='$income_date',
      before_bat='$before_bat',
      vat='$vat',
      after_vat='$after_vat',
      marketing_person='$marketing_person',
      service_person='$service_person',
      receipet_number='$receipet_number',
      expense_detail='$expense_detail',
      expense_total='$expense_total'
  
     
      where id='$id'";

      
    mysqli_query($conn,$upd);
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
        <input type="number" name="id" value="<?php echo $row['id']?>"><br>

        <label>customer_name</label>
        <input type="text" name="customer_name" value="<?php echo $row['customer_name']?>"><br>

        <label>address</label>
        <input type="text" name="address" value="<?php echo $row['address']?>"><br>

        <label>phone</label>
        <input type="text" name="phone" value="<?php echo $row['phone']?>"><br>

        <label>service_detail</label>
        <input type="text" name="service_detail" value="<?php echo $row['service_detail']?>"><br>

        <label>income_date</label>
        <input type="date" name="income_date" value="<?php echo $row['income_date']?>"><br>

        <label>before_bat</label>
        <input type="deimal" name="before_bat" value="<?php echo $row['before_bat']?>"><br>

        <label>vat</label>
        <input type="deimal" name="vat" value="<?php echo $row['vat']?>"><br>

        <label>after_vat</label>
        <input type="deimal" name="after_vat" value="<?php echo $row['after_vat']?>"><br>

        <label>marketing_person</label>
        <input type="text" name="marketing_person" value="<?php echo $row['marketing_person']?>"><br>

        <label>service_person</label>
        <input type="text" name="service_person" value="<?php echo $row['service_person']?>"><br>

        <label>receipet_number</label>
        <input type="text" name="receipet_number" value="<?php echo $row['receipet_number']?>"><br>

        <label>expense_detail</label>                                                     
        <input type="text" name="expense_detail" value="<?php echo $row['expense_detail']?>"><br>

        <label>expense_total</label>
        <input type="decimal" name="expense_total" value="<?php echo $row['expense_total']?>"><br>
        
        <input class="button" type="submit" name="update" value="update">

    </form>
    <footer>nefas sellk poly thecnice copy©2018</footer>

</body>
</html>