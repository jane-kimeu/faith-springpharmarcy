<?php
include "header.php";
include 'connect.php';
$id= $_GET['id'];

$sql= "SELECT * from supplier where id='$id'";
$data=mysqli_query($conn, $sql);

$position=mysqli_fetch_array($data);
?>

        <div class="col-sm-6">
            <div class="modal-body">
                <form action="#" method="post">






                    <div class="row">
                        <label for="name" ><b>Id:</b></label><br>
                        <input class="form-control" type="number" placeholder="Enter supplier id" name="id" required value="<?php echo $position[0] ?>"><br><br>
                        <label for="name" ><b>supplier name:</b></label><br>
                        <input class="form-control" type="text" placeholder="Enter supplier Name" name="name" required value="<?php echo $position[1] ?>"><br><br>
                        <label for="name"><b>Contact person:</b></label><br>
                        <input class="form-control" type="text" placeholder="Enter contact person" name="name" required value="<?php echo $position[2]?>"><br>

                        <label for="email"><b>Email:</b></label><br>
                        <input class="form-control" type="email" placeholder="Enter Email" name="email" value="<?php echo $position[3]?>" required><br><br>


                        <label for="text"><b>Tel number:</b></label><br>
                        <input class="form-control" value="<?php echo $position[4]?>" type="Telephone" placeholder="Enter Tel number" name="tel" required><br><br>

                        <label for="text"><b>Note:</b></label><br>
                        <input class="form-control" value="<?php echo $position[5]?>" type="Note" placeholder="Enter supplier note" name="note" required><br><br>






                    </div>


            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit" name="btn">Edit</button>


                <?php
                if (isset($_POST['btn'])) {
                    include 'connect.php';
                    $supplierName = $_POST['name'];
                    $contactPerson = $_POST['name'];
                    $email = $_POST['email'];
                    $telNumber = $_POST['tel'];
                    $note = $_POST['note'];

// Creating a query to update the data in the database table receipt
                    $sql = "update supplier set supplier_name ='$supplierName',contact_person ='$contactPerson',email ='$email',tel_number='$telNumber', note='$note' where id ='$id'";
                    if ($conn->query($sql) == true){
                        print "<p>Supplier Updated Successfully.</p>";
                        print "<a href='supplier.php' class='btn btn-primary'>Update Another supplier</a>";
                    }
                    else{
                        print "<p>supplier not updated.</p>";
                        print "<a href='supplier.php' class='btn btn-danger'>Try Again</a>";
                    }
                    mysqli_close($conn);
                }
                ?>

            </div>
            </form>
        </div>
</body>
</html>
