<?php
include "config.php";
$sql="SELECT * FROM sell_buy";
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
        <a class="active" href="sdisplay.php">sell_buy</a>
        <a href="edisplay.php">expenses</a>
    </nav>
    <a href="sadd.php" class="a" >add</a>
    <table>
        <tr>
            <th>id</th>
            <th>item_type</th>
            <th>unit</th>
            <th>quantity</th>
            <th>entry_date</th>
            <th>buyer_name</th>
            <th>customer_phone</th>
            <th>detail</th>
            <th>action</th>
        </tr>
<?php
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
    <th><?php echo $row ['id']?></th>
    <th><?php echo $row ['item_type']?></th>
    <th><?php echo $row ['unit']?></th>
    <th><?php echo $row ['quantity']?></th>
    <th><?php echo $row ['entry_date']?></th>
    <th><?php echo $row ['buyer_name']?></th>
    <th><?php echo $row ['customer_phone']?></th>
    <th><?php echo $row ['detail']?></th>
    <th>
        <a class="e" href="sedit.php?id=<?php echo $row['id']?>">edit</a>
        <a class="d" href="sdelete.php?id=<?php echo $row['id']?>"
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
