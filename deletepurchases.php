<?php


include 'connect.php';
$id = $_GET['id'];
$sql = "delete from purchases where id=$id";
mysqli_query($conn, $sql);
if ($result){
    echo "record deleted successfully";
}
header("location:purchases.php");

