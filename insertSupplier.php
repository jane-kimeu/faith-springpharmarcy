<?php
include 'connect.php';
if (isset($_POST['btn'])) {

    $supplierName = $_POST['name'];
    $contactPerson = $_POST['name'];
    $email = $_POST['email'];
    $telNumber = $_POST['tel'];
    $note = $_POST['note'];
    //conect to server
    //insert query
    $query = "INSERT INTO `supplier`(`id`, `supplier_name`, `contact_person`, `email`, `tel_number` ,`note`) VALUES ('','$supplierName','$contactPerson','$email','$telNumber','$note')";
    //execute
    $result = mysqli_query($conn, $query);
    if ($result) {
        print "<p>supplier saved successfully. </p>";
    }else{
        echo "Failed";
    }

}
