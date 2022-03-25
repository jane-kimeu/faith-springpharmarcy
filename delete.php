<?php
include 'connect.php';
$id= $_GET['id'];
$sql= "delete from supplier where id=$id";
mysqli_query($conn, $sql);
header("location:supplier.php");

