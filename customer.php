<?php
include "header.php";
?>


            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myform">
                    customer
                </button>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>


                                </form>

                                <tr>
                                    <th>Id</th>
                                    <th>Full name</th>
                                    <th>Address</th>
                                    <th>Tel number</th>
                                    <th>Product name</th>
                                    <th>Total</th>
                                    <th>Due date</th>
                                    <th>Action</th>

                                </tr>
                                </thead>

                                <tbody>

                                <?php
                                include 'connect.php';
                                $sql = "SELECT * FROM  customer";
                                $result = mysqli_query($conn, $sql);
                                $rows = mysqli_num_rows($result);
                                if ($rows>0)
                                {


                                    while($customer= mysqli_fetch_assoc($result)){
                                        $id= $customer['id'];
                                        $name= $customer['full_name'];
                                        $address = $customer['address'];
                                        $telNumber= $customer['tel_number'];
                                        $productName= $customer['product_name'];
                                        $total= $customer['total'];
                                        $dueDate= $customer['due_date'];


                                        echo  "<tr>
                                    <td>$id</td>
                                    <td>$name</td>
                                    <td>$address</td>
                                    <td>$telNumber</td>
                                    <td>$productName</td>
                                    <td>$total</td>
                                    <td>$dueDate</td>
                                    
                                  <td><a href='updateCustomer.php?id=$id' class='btn btn-primary'><i class='fa fa-pencil'></i></a> | 
                                     <a class='btn btn-danger' href=deleteCustomer.php?id=$id'> <i class='fa fa-trash'></i></a>|
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
                                            <h4 class="modal-title">customer  details </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="#" method="post">


                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="name" ><b>Customer name:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter customer Name" name="cName" required><br><br>
                                                        <label for="email"><b>address:</b></label><br>
                                                        <input class="form-control" type="email" placeholder="Enter email  Address" name="email" required><br>
                                                        <label for="tel"><b>tel number:</b></label><br>
                                                        <input class="form-control" type="tel" placeholder="Enter tel number" name="tel" required><br><br>

                                                        <label for="email"><b>Product name:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter Product name" name="pName" required><br><br>

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="text"><b>total amount:</b></label><br>
                                                        <input class="form-control" type="shilling" placeholder="Enter total amount" name="total" required><br><br>
                                                        <label for="email"><b>note:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter customer note" name="note" required><br><br>

                                                        <label for="text"><b>Due date:</b></label><br>
                                                        <input class="form-control" type="date" placeholder="Enter Due date" name="date" required><br><br>



                                                    </div>

                                                </div>


                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button class="btn btn-primary" type="submit" name="btn">Submit</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- /.container-fluid -->

                    </div>

                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website 2020</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->




            <?php

            include 'connect.php';
            if (isset($_POST['btn'])) {
                $fullName = $_POST['cName'];
                $address = $_POST['email'];
                $telNumber = $_POST['tel'];
                $productName = $_POST['pName'];
                $total = $_POST['total'];
                $note = $_POST['note'];
                $dueDate = $_POST['date'];
                //conect to server
                //insert query
                $query=   "INSERT INTO `customer`(`id`, `full_name`, `address`, `tel_number`, `product_name`, `total`, `note`, `due_date`)
                    VALUES ('','$fullName','$address','$telNumber','$productName','$total','$note','$dueDate')";

                //  execute
                $result = mysqli_query($conn, $query);
                if ($result) {
                    print "<p>customer saved successfully. </p>";
                } else {
                    echo "Failed";
                }

            }
            ?>


</body>

</html>