<?php

include 'connect.php';
if (isset($_POST['btn'])) {

    $productName = $_POST['name'];
    $description = $_POST['desc'];
    $price = $_POST['price'];
    $quantity = $_POST['qty'];
    $amount = $_POST['amount'];

    //conect to server
    //insert query
    $query=  "INSERT INTO `purchases`(`id`, `product_name`, `description`, `price`, `qty`, `amount`) 
    VALUES ('','$productName','$description','$price','$quantity','$amount')";


    $result = mysqli_query($conn, $query);
    if ($result) {
        print "<p>purchases saved successfully. </p>";
    } else {
        echo "Failed";
    }

}
