<?php
include 'connect.php';
$id= $_GET['id'];
$sql= "delete from medicine where id=$id";
mysqli_query($conn, $sql);
header("location:medicine.php");
