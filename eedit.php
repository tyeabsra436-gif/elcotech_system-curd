<?php
include "config.php";
$id=$_GET['id'];
$sql="SELECT * FROM expenses WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $reason=$_POST['reason'];
    $check_number=$_POST['check_number'];
    $before_vat=$_POST['before_vat'];
    $vat=$_POST['vat'];
    $total_expense=$_POST['total_expense'];
    $expense_date=$_POST['expense_date'];
    $bank_account=$_POST['bank_account'];
    $receipt_number=$_POST['receipt_number'];

$upd="UPDATE expenses SET 
      id='$id',
      reason='$reason',
      check_number='$check_number',
      before_vat='$before_vat',
      vat='$vat',
      total_expense='$total_expense',
      expense_date='$expense_date',
      bank_account='$bank_account',
      receipt_number='$receipt_number'
  
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
        <a href="pdisplay.php">purchase_requests</a>
        <a href="fdisplay.php">followups</a>
        <a href="adisplay.php">assets</a>
        <a href="sdisplay.php">sell_buy</a>
        <a  class="active" href="edisplay.php">expenses</a>
    </nav>
    <form method="POST">
    <label>id</label>
        <input type="number" name="id" value="<?php echo $row['id']?>"><br>

        <label>reason</label>
        <input type="text" name="reason" value="<?php echo $row['reason']?>"><br>

        <label>check_number</label>
        <input type="text" name="check_number" value="<?php echo $row['check_number']?>"><br>

        <label>before_vat</label>
        <input type="decimal" name="before_vat" value="<?php echo $row['before_vat']?>"><br>

        <label>vat</label>
        <input type="decimal" name="vat" value="<?php echo $row['vat']?>"><br>

        
        <label>total_expense</label>
        <input type="decimal" name="total_expense" value="<?php echo $row['total_expense']?>"><br>

     
        <label>expense_date</label>
        <input type="date" name="expense_date" value="<?php echo $row['expense_date']?>"><br>

        <label>bank_account</label>
        <input type="text" name="bank_account" value="<?php echo $row['bank_account']?>"><br>

        <label>receipt_number</label>
        <input type="text" name="receipt_number" value="<?php echo $row['receipt_number']?>"><br>
   
        <input class="button" type="submit" name="update" value="update">

    </form>
    <footer>nefas sellk poly thecnice copy©2018</footer>

</body>
</html>