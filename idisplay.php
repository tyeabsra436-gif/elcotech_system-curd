<?php
include "config.php";
$sql="SELECT * FROM income";
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
        <a class="active" href="idisplay.php">income</a>
        <a href="cdisplay.php">commission</a>
        <a href="display.php">customer</a>
        <a href="pdisplay.php">purchase_requests</a>
        <a href="fdisplay.php">followups</a>
        <a href="adisplay.php">assets</a>
        <a href="sdisplay.php">sell_buy</a>
        <a href="edisplay.php">expenses</a>
    </nav>
    <a href="iadd.php" class="a" >add</a>
    <table>
        <tr>
            <th>id</th>
            <th>customer_name</th>
            <th>address</th>
            <th>phone</th>
            <th>service_detail</th>
            <th>income_date</th>
            <th>before_bat</th>
            <th>vat</th>
            <th>after_vat</th>
            <th>marketing_person</th>
            <th>service_person</th>
            <th>receipet_number</th>
            <th>expense_detail</th>
            <th>expense_total</th>
            <th>action</th>
        </tr>
<?php
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
    <th><?php echo $row ['id']?></th>
    <th><?php echo $row ['customer_name']?></th>
    <th><?php echo $row ['address']?></th>
    <th><?php echo $row ['phone']?></th>
    <th><?php echo $row ['service_detail']?></th>
    <th><?php echo $row ['income_date']?></th>
    <th><?php echo $row ['before_bat']?></th>
    <th><?php echo $row ['vat']?></th>
    <th><?php echo $row ['after_vat']?></th>
    <th><?php echo $row ['marketing_person']?></th>
    <th><?php echo $row ['service_person']?></th>
    <th><?php echo $row ['receipet_number']?></th>
    <th><?php echo $row ['expense_detail']?></th>
    <th><?php echo $row ['expense_total']?></th>
    <th>
        <a class="e" href="iedit.php?id=<?php echo $row['id']?>">edit</a>
        <a class="d" href="idelete.php?id=<?php echo $row['id']?>"
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
