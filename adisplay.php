<?php
include "config.php";
$sql="SELECT * FROM assets";
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
        <a  class="active" href="adisplay.php">assets</a>
        <a href="sdisplay.php">sell_buy</a>
        <a href="edisplay.php">expenses</a>
    </nav>
    <a href="aadd.php" class="a" >add</a>
    <table>
        <tr>
            <th>id</th>
            <th>unit</th>
            <th>quantity</th>
            <th>entry_date</th>
            <th>purchase_price</th>
            <th>receipt_price</th>
            <th>detais</th>
            <th>action</th>
        </tr>
<?php
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
    <th><?php echo $row ['id']?></th>
    <th><?php echo $row ['unit']?></th>
    <th><?php echo $row ['quantity']?></th>
    <th><?php echo $row ['entry_date']?></th>
    <th><?php echo $row ['purchase_price']?></th>
    <th><?php echo $row ['receipt_price']?></th>
    <th><?php echo $row ['detais']?></th>
    <th>
        <a class="e" href="aedit.php?id=<?php echo $row['id']?>">edit</a>
        <a class="d" href="adelete.php?id=<?php echo $row['id']?>"
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
