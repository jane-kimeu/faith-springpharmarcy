<?php

include 'connect.php';
if (isset($_POST['btn'])) {
    $code = $_POST['code'];
    $productName = $_POST['name'];

    $supplier = $_POST['supplier'];
    $receivedDate = $_POST['rDate'];
    $expiryDate = $_POST['eDate'];
    $buyingPrice = $_POST['bPrice'];
    $sellingPrice = $_POST['sPrice'];
    //conect to server
    //insert query
    $sql = "INSERT INTO `medicine`(`id`, `code`, `product_name`,  `supplier`, `date_received`, `expiry_date`, `buying_price`, `selling_price`) VALUES 
('','$code','$productName','$supplier','$receivedDate','$expiryDate','$buyingPrice','$sellingPrice')";

    //  execute
    $result =mysqli_query($conn,$sql);

    if($result){

        echo "successfully added";
        header("location:medicine.php");

    }else{
        echo"error executing query $sql".mysqli_error($conn);
    }
}
