
<?php
include "header.php"
?>



   <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myform">
                        purchases
                    </button>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>



                                <tr>
                                    <th>Id</th>
                                    <th>Product name</th>
                                    <th>category/Description</th>
                                    <th>purchase Price</th>

                                    <th>Quantity</th>
                                    <th>Amount</th>
                                    <th>action</th>

                                </tr>
                                </thead>

                                <tbody>


                                <?php
                                include 'connect.php';
                                $sql = "SELECT * FROM  purchases";
                                $result = mysqli_query($conn, $sql);

                                $rows = mysqli_num_rows($result);
                                if ($rows>0)
                                {


                                    while($purchases = mysqli_fetch_assoc($result)){
                                        $id= $purchases['id'];
                                        $productName= $purchases['product_name'];
                                        $description= $purchases['description'];
                                        $price= $purchases['price'];
                                        $quantity= $purchases['qty'];
                                        $amount= $purchases['amount'];


                                        echo  "<tr>
                                    <td>$id</td>
                                    <td>$productName</td>
                                    <td>$description</td>
                                    <td>$price</td>
                                    <td>$quantity</td>
                                    <td>$amount</td>
                                  
                                    
                                    <td><a href='updatepurchases.php?id=$id' class='btn btn-primary'><i class='fa fa-pencil'></i></a> | 
                                     <a class='btn btn-danger' href='deletePurchases.php?id=$id'> <i class='fa fa-trash'></i></a>|
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
                                            <h4 class="modal-title">purchases  </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="insertpurchases.php" method="post">

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="name" ><b>Product name:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter Product Name" name="name" required><br><br>
                                                        <label for="name"><b>Description:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter Description" name="desc" required><br>

                                                        <label for="name"><b>purchase price:</b></label><br>
                                                        <input class="form-control" type="shilling" placeholder="Enter price" name="price" required><br><br>

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="text"><b>Quantity:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter Quantity" name="qty" required><br><br>
                                                        <label for="text"><b>Amount:</b></label><br>
                                                        <input class="form-control" type="shilling" placeholder="Enter Amount" name="amount" required><br><br>

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
                                <span>Copyright &copy;faithspringpharmacy@2022</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->
                </div>
            </div>
            <!-- End of Page Wrapper -->

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

