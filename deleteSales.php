<?php


include 'connect.php';
$id = $_GET['id'];
$sql = "delete from sales where id=$id";
mysqli_query($conn, $sql);
header("location:sales.php");
