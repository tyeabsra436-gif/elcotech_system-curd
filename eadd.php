<?php
include "config.php";
if(isset($_POST['save'])){
    $id=$_POST['id'];
    $reason=$_POST['reason'];
    $check_number=$_POST['check_number'];
    $before_vat=$_POST['before_vat'];
    $vat=$_POST['vat'];
    $total_expense=$_POST['total_expense'];
    $expense_date=$_POST['expense_date'];
    $bank_account=$_POST['bank_account'];
    $receipt_number=$_POST['receipt_number'];
          
$sql="INSERT INTO expenses (id,reason,check_number,before_vat,vat,total_expense,expense_date,bank_account,receipt_number)
VALUES('$id','$reason','$check_number','$before_vat','$vat','$total_expense','$expense_date','$bank_account','$receipt_number')"; 

    mysqli_query($conn,$sql);
    header("location:edisplay.php");

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
        <input type="number" name="id"><br>

        <label>reason</label>
        <input type="text" name="reason"><br>

        <label>check_number</label>
        <input type="text" name="check_number"><br>

        <label>before_vat</label>
        <input type="decimal" name="before_vat"><br>

        <label>vat</label>
        <input type="dacimal" name="vat"><br>

        <label>total_expense</label>
        <input type="decimal" name="total_expense"><br>

        <label>expense_date</label>
        <input type="date" name="expense_date"><br>

        <label>bank_account</label>
        <input type="text" name="bank_account"><br>

        <label>receipt_number</label>
        <input type="text" name="receipt_number"><br>

        <input class="button" type="submit" name="save" value="save">

    </form>
    <footer>nefas sellk poly thecnice copy©2018</footer>

</body>
</html>