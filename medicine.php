
<?php
include "header.php"
?>

<!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myform">
                    medicine
                </button>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>



                                <th>Id</th>
                                <th>code</th>
                                <th>product name</th>

                                <th>Supplier</th>
                                <th>Date received</th>
                                <th>Expiry date</th>
                                <th>buying price</th>
                                <th>selling price</th>


                                <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>

                                <?php
                                include 'connect.php';
                                $sql = "SELECT * FROM  medicine";
                                $result = mysqli_query($conn, $sql);
                                $rows = mysqli_num_rows($result);
                                if ($rows>0)
                                {


                                    while($product = mysqli_fetch_assoc($result)){
                                        $id= $product['id'];
                                        $code= $product['code'];
                                        $productName = $product['product_name'];

                                        $supplier= $product['supplier'];
                                        $dateReceived= $product['date_received'];
                                        $expiryDate= $product['expiry_date'];
                                        $buyingPrice= $product['buying_price'];
                                        $sellingPrice= $product['selling_price'];

                                        echo  "<tr>
                                    <td>$id</td>
                                    <td>$code</td>
                                    <td>$productName</td>
                                  
                                    <td>$supplier</td>
                                    <td>$dateReceived</td>
                                    <td>$expiryDate</td>
                                     <td>$buyingPrice</td>
                                     <td>$sellingPrice</td>
                                     
                                 <td><a href='editMedicine.php?id=$id' class='btn btn-primary'><i class='fa fa-pencil'></i></a> | 
                                     <a class='btn btn-danger' href=deleteMedicine.php?id=$id'> <i class='fa fa-trash'></i></a>|
                                </tr>";

                                    }


                                }


                                ?>

                                </tbody>
                            </table>
                            <!-- The Modal -->
                            <div class="modal" id="myform">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">medicine  </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="medicineInsert.php" method="post">

                                            <!-- The Modal -->
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="name" ><b>code:</b></label><br>
                                                        <input class="form-control" type="code" placeholder="Enter product code" name="code" required><br><br>
                                                        <label for="name" ><b>product name:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter product Name" name="name" required><br><br>

                                                        <div class="form-group">
                                                            <h5>Medicine type </h5>
                                                            <div class="controls">
                                                                <select class="form-control select2" name="icon">
                                                                    <option>Select one</option>
                                                                    <option value="Syrup">Syrup</option>
                                                                    <option value="Pills">Pills</option>
                                                                    <option value="Syringe">Syringe</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <label for=""><b>Supplier : </b></label>
                                                        </td>
                                                        <td>
                                                            <select name="supplier" id="" class="form-control" required>
                                                                <?php
                                                                $conn = mysqli_connect("localhost", "root", "", "jsdb");
                                                                if (!$conn) {
                                                                    die("Database Connection Error : " . mysqli_connect_error());
                                                                }
                                                                $sql = "select  * from supplier";
                                                                $result = $conn->query($sql);
                                                                if ($result->num_rows > 0)// If the table courses has data
                                                                {
                                                                    while ($row = $result->fetch_assoc())
                                                                    {
                                                                        ?>
                                                                        <option value="<?php echo $row['id'];?>"><?php echo $row['id'];?></option>
                                                                        <?php
                                                                    }
                                                                }
                                                                mysqli_close($conn);
                                                                ?><br><br>
                                                            </select>

                                                            <label for="name"><b>date received:</b></label><br>
                                                            <input class="form-control" type="datetime-local" placeholder="Enter date received" name="rDate" required><br>
                                                            <label for="name"><b>expiry date:</b></label><br>
                                                            <input class="form-control" type="datetime-local" placeholder="Enter expiry date" name="eDate" required><br>

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="text"><b>Buying price:</b></label><br>
                                                        <input class="form-control" type="number" placeholder="Enter Buying price" name="bPrice" required><br><br>
                                                        <label for="text"><b>selling price:</b></label><br>
                                                        <input class="form-control" type="number" placeholder="Enter selling price" name="sPrice" required><br><br>



                                                    </div>

                                                </div>


                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button class="btn btn-primary" type="submit" name="btn">Save</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy;faithspringpharmacy@2022</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>

            </div>
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>


</body>

</html>

