<?php
include "header.php";
include 'connect.php';
$id= $_GET['id'];

$sql= "SELECT * from customer where id='$id'";
$data=mysqli_query($conn, $sql);

$position=mysqli_fetch_array($data);

?>

     <!-- Modal body -->
        <div class="col-sm-6">
            <div class="modal-body">
                <form action="#" method="post">


                    <div class="row">

                        <label for="name" ><b>id:</b></label><br>
                        <input class="form-control" type="number" placeholder="Enter customer id" name="id" required value="<?php echo $position[0] ?>"><br><br>


                        <label for="name" ><b>full name:</b></label><br>
                        <input class="form-control" type="text" placeholder="Enter customer full Names" name="cName" required value="<?php echo $position[1] ?>"><br><br>
                        <label for="name"><b>address:</b></label><br>
                        <input class="form-control" type="email" placeholder="Enter email address" name="email" required value="<?php echo $position[2]?>"><br>

                        <label for="tel"><b>tel number:</b></label><br>
                        <input class="form-control" type="tel" placeholder="Enter telephone" name="tel" value="<?php echo $position[3]?>" required><br><br>

                        <label for="text"><b>product name:</b></label><br>
                        <input class="form-control" value="<?php echo $position[4]?>" type="text" placeholder="Enter product name" name="pName" required><br><br>


                        <label for="text"><b>total:</b></label><br>
                        <input class="form-control" value="<?php echo $position[5]?>" type="money" placeholder="Enter total amount" name="total" required><br><br>

                        <label for="text"><b>note:</b></label><br>
                        <input class="form-control" value="<?php echo $position[6]?>" type="text" placeholder="Enter customer note" name="note" required><br><br>

                        <label for="text"><b>due date:</b></label><br>
                        <input class="form-control" value="<?php echo $position[7]?>" type="datetime-local" placeholder="Enter due date" name="date" required><br><br>






                    </div>


            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit" name="btn">update</button>


                <?php


                if (isset($_POST['btn'])) {
                    include 'connect.php';
                    $fullName = $_POST['cName'];
                    $address = $_POST['email'];
                    $telNumber = $_POST['tel'];
                    $productName = $_POST['pName'];
                    $total = $_POST['total'];
                    $note = $_POST['note'];
                    $dueDate = $_POST['date'];

// Creating a query to update the data in the database table receipt
                    $sql="UPDATE customer SET full_name='$fullName',address='$address',tel_number='$telNumber',product_name='$productName',total='$total',note='$note',due_date='$dueDate' WHERE id='$id'";

                    if ($conn->query($sql) == true){
                        print "<p>customer Updated Successfully.</p>";
                        print "<a href='customer.php' class='btn btn-primary'>Update Another customer</a>";
                    }
                    else{
                        print "<p>customer not updated.</p>";
                        print "<a href='customer.php' class='btn btn-danger'>Try Again</a>";
                    }
                    mysqli_close($conn);
                }
                ?>

            </div>
            </form>
        </div>
</body>
</html>


