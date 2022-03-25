<?php
include 'connect.php';
if (isset($_POST['btn'])) {

    $productName = $_POST['name'];
    $description = $_POST['desc'];
    $price = $_POST['price'];
    $qty = $_POST['quantity'];
    $amount= $_POST['amount'];
    $profit= $_POST['profit'];
    //conect to server
    //insert query
    $query = "INSERT INTO `sales`(`id`, `product_name`, `description`, `price`, `qty` ,`amount`,`profit`) VALUES ('','$productName','$description','$price','$qty','$amount','$profit')";
    //execute
    $result = mysqli_query($conn, $query);
    if ($result) {

        echo "Sales added successfully";
        header("location:sales.php");
    }else{
        echo "Failed";
    }

}

