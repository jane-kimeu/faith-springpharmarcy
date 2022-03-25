<?php

include "header.php";
?>
<?php
include 'connect.php';
$id= $_GET['id'];

$sql= "SELECT * from purchases where id='$id'";
$data=mysqli_query($conn, $sql);

$position=mysqli_fetch_array($data);

?>


        <div class="col-sm-6">
            <div class="modal-body">
                <form action="#" method="post">

                    <div class="row">
                        <label for="name" ><b>id:</b></label><br>
                        <input class="form-control" type="number" placeholder="Enter product id" name="id" required value="<?php echo $position[0] ?>"><br><br>
                        <label for="name" ><b>product name:</b></label><br>
                        <input class="form-control" type="text" placeholder="Enter product name" name="name" required value="<?php echo $position[1] ?>"><br><br>
                        <label for="name"><b>description:</b></label><br>
                        <input class="form-control" type="text" placeholder="Enter description" name="desc" required value="<?php echo $position[2]?>"><br>

                        <label for="email"><b>purchase price:</b></label><br>
                        <input class="form-control" type="number" placeholder="Enter purchase price" name="price" value="<?php echo $position[3]?>" required><br><br>


                        <label for="text"><b>quantity:</b></label><br>
                        <input class="form-control" value="<?php echo $position[4]?>" type="number" placeholder="Enter quantity" name="qty" required><br><br>

                        <label for="text"><b>amount:</b></label><br>
                        <input class="form-control" value="<?php echo $position[5]?>" type="number" placeholder="Enter amount" name="amount" required><br><br>


                    </div>


            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit" name="btn">Edit</button>


                <?php
                if (isset($_POST['btn'])) {
                    include 'connect.php';
                    $id=$_POST['id'];
                    $productName = $_POST['name'];
                    $description = $_POST['desc'];
                    $price = $_POST['price'];
                    $quantity = $_POST['qty'];
                    $amount = $_POST['amount'];
// Creating a query to update the data in the database table purchases
                    $sql=   "UPDATE purchases SET product_name='$productName',`description`='$description',`price`='$price',`qty`='$quantity',`amount`='$amount' WHERE id='$id'";


                    if ($conn->query($sql) == true){
                        print "<p>purchases Updated Successfully.</p>";
                        print "<a href='purchases.php' class='btn btn-primary'>Update Another purchases</a>";
                    }
                    else{
                        print "<p>purchases not updated.</p>";
                        print "<a href='purchases.php' class='btn btn-danger'>Try Again</a>";
                    }
                    mysqli_close($conn);
                }
                ?>

            </div>
            </form>
        </div>
</body>
</html>

