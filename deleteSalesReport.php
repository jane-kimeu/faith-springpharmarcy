<?php

include 'connect.php';
$id = $_GET['id'];
$sql = "delete from salesReport where id=$id";
mysqli_query($conn, $sql);
header("location:salesReport.php");

