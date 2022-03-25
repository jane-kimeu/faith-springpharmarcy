
<?php

include 'connect.php';
if (isset($_POST['btn'])) {

    $transactionDate = $_POST['date'];
    $customerName=$_POST['name'];
    $invoiceNumber = $_POST['invoice'];
    $amount = $_POST['amount'];
    $profit = $_POST['sProfit'];

    //insert query
    $sql="INSERT INTO `salesreport`( `transcation_date`, `customer_name`, `invoice_number`, `amount`, `profit`)
    VALUES ('$transactionDate','$customerName','$invoiceNumber','$amount','$profit')";
  $result = mysqli_query($conn, $sql);


    if ($result) {
        print "<p>salesReport saved successfully. </p>";
        header("location:salesReport.php");
    }else{
        echo"error executing query $sql".mysqli_error($conn);
    }

}