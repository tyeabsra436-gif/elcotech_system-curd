<?php
include "config.php";
$sql="SELECT * FROM purchase_requests";
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
        <a  href="display.php">customer</a>
        <a class="active" href="pdisplay.php">purchase_requests</a>
        <a href="fdisplay.php">followups</a>
        <a href="adisplay.php">assets</a>
        <a href="sdisplay.php">sell_buy</a>
        <a href="edisplay.php">expenses</a>
    </nav>
    <a href="padd.php" class="a" >add</a>
    <table>
        <tr>
            <th>id</th>
            <th>item_type</th>
            <th>quantity</th>
            <th>reason</th>
            <th>request_date</th>
            <th>action</th>
        </tr>
<?php
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
    <th><?php echo $row ['id']?></th>
    <th><?php echo $row ['item_type']?></th>
    <th><?php echo $row ['quantity']?></th>
    <th><?php echo $row ['reason']?></th>
    <th><?php echo $row ['request_date']?></th>
    <th>
        <a class="e" href="pedit.php?id=<?php echo $row['id']?>">edit</a>
        <a class="d" href="pdelete.php?id=<?php echo $row['id']?>"
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
