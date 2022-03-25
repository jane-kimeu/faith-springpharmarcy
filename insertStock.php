
<?php

include 'connect.php';
if (isset($_POST['btn'])) {
    $serialNumber = $_POST['serial'];
    $company = $_POST['company'];
    $productName=$_POST['product'];
    $batchNumber = $_POST['batch'];
    $qty = $_POST['qty'];
    $remainingQty = $_POST['rQty'];

    //conect to server
    //insert query

 $sql="INSERT INTO `stock`(`id`, `serial_number`, `company`, `product_name`, `batch_number`, `qty`, `remaining_qty`) 
    VALUES ('','$serialNumber','$company','$productName','$batchNumber','$qty','$remainingQty')";
    $result =mysqli_query($conn,$sql);

    if($result){

        echo "successfully added";
        header("location:medicine.php");

    }else{
        echo"error executing query $sql".mysqli_error($conn);
    }
}
