<?php
include "config.php";
$sql="SELECT * FROM expenses";
$result=mysqli_query($conn,$sql);

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
    <a href="eadd.php" class="a" >add</a>
    <table>
        <tr>
            <th>id</th>
            <th>reason</th>
            <th>check_number</th>
            <th>before_vat</th>
            <th>vat</th>
            <th>total_expense</th>
            <th>expense_date</th>
            <th>bank_account</th>
            <th>receipt_number</th>
            <th>action</th>
        </tr>
<?php
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
    <th><?php echo $row ['id']?></th>
    <th><?php echo $row ['reason']?></th>
    <th><?php echo $row ['check_number']?></th>
    <th><?php echo $row ['before_vat']?></th>
    <th><?php echo $row ['vat']?></th>
    <th><?php echo $row ['total_expense']?></th>
    <th><?php echo $row ['expense_date']?></th>
    <th><?php echo $row ['bank_account']?></th>
    <th><?php echo $row ['receipt_number']?></th>
    <th>
        <a class="e" href="eedit.php?id=<?php echo $row['id']?>">edit</a>
        <a class="d" href="edelete.php?id=<?php echo $row['id']?>"
        onclick="return confirm('delete this record?')">delete</a>

    </th>

</tr>
<?php
}
?>

    </table>
    <footer>nefas sellk poly thecnice copy©2018</footer>
</body>
</html>
