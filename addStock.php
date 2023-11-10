<?php
include 'connection.php';
if (isset($_POST['subStock'])) {
//collect form values
$Item = $_POST["item"];
$Stock = $_POST["stock"];
$Price = $_POST["price"];

//build a query
$query = "INSERT INTO `Stock Table`
    (StockItem, StockQuantity,StockPrice)
    VALUES
    ('$Item',$Stock,$Price)

";
}

//echo $query;
//exit;
mysqli_query($connection, $query);
header('location:WATPractice.php');
?>
