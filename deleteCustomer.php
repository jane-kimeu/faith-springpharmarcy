<?php

include 'connect.php';
$id = $_GET['id'];
$sql = "delete from customer where id=$id";
mysqli_query($conn, $sql);
header("location:customer.php");


