<?php
include "config.php";
$sql="SELECT * FROM customer";
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
        <a class="active" href="display.php">customer</a>
        <a href="pdisplay.php">purchase_requests</a>
        <a href="fdisplay.php">followups</a>
        <a href="adisplay.php">assets</a>
        <a href="sdisplay.php">sell_buy</a>
        <a href="edisplay.php">expenses</a>
    </nav>
    <a href="add.php" class="a" >add</a>
    <table>
        <tr>
            <th>id</th>
            <th>customer_name</th>
            <th>work_role</th>
            <th>person_name</th>
            <th>address</th>
            <th>phone</th>
            <th>item_type</th>
            <th>service_detail</th>
            <th>customer_date</th>
            <th>tin_number</th>
            <th>item_code</th>
            <th>marketing_code</th>
            <th>service_code</th>
            <th>delivery_date</th>
            <th>details</th>
            <th>email</th>
            <th>action</th>
        </tr>
<?php
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
    <th><?php echo $row ['id']?></th>
    <th><?php echo $row ['customer_name']?></th>
    <th><?php echo $row ['work_role']?></th>
    <th><?php echo $row ['person_name']?></th>
    <th><?php echo $row ['address']?></th>
    <th><?php echo $row ['phone']?></th>
    <th><?php echo $row ['item_type']?></th>
    <th><?php echo $row ['service_detail']?></th>
    <th><?php echo $row ['customer_date']?></th>
    <th><?php echo $row ['tin_number']?></th>
    <th><?php echo $row ['marketing_code']?></th>
    <th><?php echo $row ['service_code']?></th>
    <th><?php echo $row ['delivery_date']?></th>
    <th><?php echo $row ['details']?></th>
    <th><?php echo $row ['email']?></th>
    <th>
        <a class="e" href="edit.php?id=<?php echo $row['id']?>">edit</a>
        <a class="d" href="delete.php?id=<?php echo $row['id']?>"
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
