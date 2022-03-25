<?php

include "header.php";
?>
<?php
include 'connect.php';
?>
<div class="heading">
    <h3 class="text-center">Invoice Report </h3>
</div>
<hr>
<div class="container">
    <table class="table table-bordered table-striped table-responsive-sm">
        <tr>
            <th>Id</th>
            <th>Product name</th>
            <th>Description/category</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Amount</th>
            <th>Profit</th>
            <th>Action</th>

        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "faith");
        if (!$conn) {
            die("Database Connection Error : " . mysqli_connect_error());
        }
        $Course = mysqli_real_escape_string($conn,$_POST['id']);
        $sql = "select * from sales where id = '$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)// If the table courses has data
        {
            while ($row = $result->fetch_assoc())
            {
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['product_name'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo $row['qty'];?></td>
                    <td><?php echo $row['amount'];?></td>
                    <td><?php echo $row['profit'];?></td>

                </tr>
                <?php
            }
        }
        mysqli_close($conn);
        ?>
    </table>
    <div class="buttons">
        <a href="salesReport.php" class="btn btn-info">Select another invoice</a>
    </div>
</div>
</body>
</html>


