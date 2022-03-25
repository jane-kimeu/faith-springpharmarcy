<?php
include "header.php";
include 'connect.php';
$id= $_GET['id'];

$sql= "SELECT * from medicine where id='$id'";
$data=mysqli_query($conn, $sql);

$position=mysqli_fetch_array($data);

?>

        <!-- Modal body -->
        <div class="col-sm-6">
            <div class="modal-body">
                <form action="#" method="post">

                    <div class="row">

                        <label for="text"><b>id:</b></label><br>
                        <input class="form-control" value="<?php echo $position[0]?>" type="number" placeholder="Enter id" name="id" required><br><br>

                        <label for="text"><b>code:</b></label><br>
                        <input class="form-control" value="<?php echo $position[1]?>" type="number" placeholder="Enter code" name="code" required><br><br>

                        <label for="name" ><b>product name:</b></label><br>
                        <input class="form-control" type="text" placeholder="Enter product Name" name="name" required value="<?php echo $position[2] ?>"><br><br>

                        <label for="email"><b>supplier:</b></label><br>
                        <input class="form-control" type="search" placeholder="Enter supplier" name="supplier" value="<?php echo $position[4]?>" required><br><br>

                        <label for="text"><b>Date received:</b></label><br>
                        <input class="form-control" value="<?php echo $position[4]?>" type="datetime-local" placeholder="Enter received" name="rDate" required><br><br>


                        <label for="text"><b>Expiry date:</b></label><br>
                        <input class="form-control" value="<?php echo $position[5]?>" type="datetime-local" placeholder="Enter expiry date" name="eDate" required><br><br>

                        <label for="text"><b>buying price:</b></label><br>
                        <input class="form-control" value="<?php echo $position[6]?>" type="number" placeholder="Enter Tel buying price" name="bPrice" required><br><br>

                        <label for="text"><b>selling price:</b></label><br>
                        <input class="form-control" value="<?php echo $position[7]?>" type="number" placeholder="Enter selling price" name="sPrice" required><br><br>


                    </div>


            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" name="btn" data-dismiss="modal">Close</button>
                <button class="btn btn-success" type="submit" name="btn">edit</button>


                <?php
                if (isset($_POST['btn'])) {
                    include 'connect.php';
                    $code = $_POST['code'];
                    $productName = $_POST['name'];
                    $supplier = $_POST['supplier'];
                    $receivedDate = $_POST['rDate'];
                    $expiryDate = $_POST['eDate'];
                    $buyingPrice = $_POST['bPrice'];
                    $sellingPrice = $_POST['sPrice'];
// Creating a query to update the data in the database table receipt


                    $sql="UPDATE medicine SET code='$code',product_name='$productName',supplier='$supplier',date_received='$receivedDate',expiry_date='$expiryDate',buying_price='$buyingPrice',`selling_price`='$sellingPrice' WHERE id='$id'";
                    if ($conn->query($sql) == true){


                        print "<p>product Updated Successfully.</p>";
                        print "<a href='medicine.php' class='btn btn-primary'>Update Another product</a>";
                    }
                    else{
                        print "<p>product not updated.</p>";
                        print "<a href='medicine.php' class='btn btn-danger'>Try Again</a>";
                    }
                    mysqli_close($conn);
                }
                ?>

            </div>
            </form>
        </div>
</body>
</html>

