<?php
include 'connection.php';

$query = "SELECT * FROM `Stock Table`";
$result = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($result))
{
    echo $row['StockItem'] . ' ' . $row['StockQuantity'] . ' ' . $row['StockPrice'] . '<br />';
}    



?>
