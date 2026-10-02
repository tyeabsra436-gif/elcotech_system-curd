<?php
include "config.php";
$sql="SELECT * FROM followups";
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
        <a  class="active" href="fdisplay.php">followups</a>
        <a href="adisplay.php">assets</a>
        <a href="sdisplay.php">sell_buy</a>
        <a href="edisplay.php">expenses</a>
    </nav>
    <a href="fadd.php" class="a" >add</a>
    <table>
        <tr>
            <th>id</th>
            <th>customer_number</th>
            <th>customer_name</th>
            <th>interest_details</th>
            <th>phone</th>
            <th>action</th>
        </tr>
<?php
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
    <th><?php echo $row ['id']?></th>
    <th><?php echo $row ['customer_number']?></th>
    <th><?php echo $row ['customer_name']?></th>
    <th><?php echo $row ['interest_details']?></th>
    <th><?php echo $row ['phone']?></th>
    <th>
        <a class="e" href="fedit.php?id=<?php echo $row['id']?>">edit</a>
        <a class="d" href="fdelete.php?id=<?php echo $row['id']?>"
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
