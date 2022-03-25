<?php
include "header.php";
include 'connect.php';

if (isset($_GET['id'])) {
    $id= $_GET['id'];
}

$sql= "SELECT * from stock where id='$id'";
$data=mysqli_query($conn, $sql);

$position=mysqli_fetch_array($data);
?>


<div class="col-sm-6">
            <div class="modal-body">
                <form action="#" method="post">

                    <div class="row">
                        <label for="name" ><b>id:</b></label><br>
                        <input class="form-control" type="number" placeholder="Enter stock id" name="id" required value="<?php echo $position[0] ?>"><br><br>

                        <label for="name" ><b>S.No:</b></label><br>
                        <input class="form-control" type="number" placeholder="Enter S.No" name="serial" required value="<?php echo $position[1] ?>"><br><br>
                        <label for="name"><b>Company:</b></label><br>
                        <input class="form-control" type="text" placeholder="Enter company name" name="company" required value="<?php echo $position[2]?>"><br>

                        <label for="email"><b>product name:</b></label><br>
                        <input class="form-control" type="text" placeholder="Enter product" name="product" value="<?php echo $position[3]?>" required><br><br>


                        <label for="text"><b>batch number:</b></label><br>
                        <input class="form-control" value="<?php echo $position[4]?>" type="number" placeholder="Enter batch number" name="batch" required><br><br>

                        <label for="text"><b>qty:</b></label><br>
                        <input class="form-control" value="<?php echo $position[5]?>" type="number" placeholder="Enter qty" name="qty" required><br><br>

                        <label for="text"><b>remaining qty:</b></label><br>
                        <input class="form-control" value="<?php echo $position[5]?>" type="number" placeholder="Enter remaining qty" name="rQty" required><br><br>





                    </div>


            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit" name="btn">Edit</button>


                <?php
                if (isset($_POST['btn'])) {
                    include 'connect.php';
                    $serialNumber = $_POST['serial'];
                    $company = $_POST['company'];
                    $productName=$_POST['product'];
                    $batchNumber = $_POST['batch'];
                    $qty = $_POST['qty'];
                    $remainingQty = $_POST['rQty'];

// Creating a query to update the data in the database table receipt


                    $sql= "UPDATE stock SET serial_number='$serialNumber',company='$company',product_name='$productName',batch_number='$batchNumber',qty='$qty',remaining_qty='$remainingQty' where id='$id'";

                    if ($conn->query($sql) == true){
                        print "<p>Stock Updated Successfully.</p>";
                        print "<a href='stock.php' class='btn btn-primary'>Update Another stock</a>";
                    }
                    else{
                        print "<p>supplier not updated.</p>";
                        print "<a href='stock.php' class='btn btn-danger'>Try Again</a>";
                    }
                    mysqli_close($conn);
                }
                ?>

            </div>
            </form>
        </div>
</body>
</html>
