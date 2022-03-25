<?php

include 'connect.php';
$id = $_GET['id'];
$sql = "delete from stock where id=$id";
mysqli_query($conn, $sql);
header("location:stock.php");


