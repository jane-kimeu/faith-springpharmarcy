<?php
include "header.php";
 ?>

            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myform">
                    salesReport
                </button>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>

                                <tr>
                                    <th>Transaction Id</th>
                                    <th>Transaction date</th>
                                    <th>Customer name</th>
                                    <th>Invoice number</th>
                                    <th>Amount</th>
                                    <th>profit</th>

                                    <th>action</th>

                                </tr>
                                </thead>

                                <tbody>


                                <?php
                                include 'connect.php';
                                $sql = "SELECT * FROM  salesReport";
                                $result = mysqli_query($conn, $sql);
                                $rows = mysqli_num_rows($result);
                                if ($rows>0)
                                {
                                    while($salesReport= mysqli_fetch_assoc($result)){
                                        $id= $salesReport['id'];
                                        $transactionDate= $salesReport['transcation_date'];
                                        $customerName= $salesReport['customer_name'];
                                        $invoiceNumber= $salesReport['invoice_number'];
                                        $amount= $salesReport['amount'];
                                        $profit= $salesReport['profit'];


                                        echo  "<tr>
                                    <td>$id</td>
                                    <td>$transactionDate</td>
                                    <td>$customerName</td>
                                    <td>$invoiceNumber</td>
                                    <td>$amount</td>
                                    <td>$profit</td>
                                    
                                    
                                    
                                  <td><a href='updateSalesReport.php?id=$id' class='btn btn-primary'><i class='fa fa-pencil'></i></a> | 
                                     <a class='btn btn-danger' href='deleteSalesReport.php?id=$id'> <i class='fa fa-trash'></i></a>|
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
                                            <h4 class="modal-title">salesReport </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="insertSalesReport.php" method="post">


                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="name" ><b>Transaction id:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter Transaction id" name="id" required><br><br>
                                                        <label for="name"><b>Transaction date:</b></label><br>
                                                        <input class="form-control" type="date" placeholder="Enter Transaction date" name="date" required><br>

                                                        <label for="name"><b>Customer name:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter Customer name" name="name" required><br><br>

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="text"><b>Invoice number:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter Invoice number" name="invoice" required><br><br>
                                                        <label for="text"><b>Amount:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter Amount" name="amount" required><br><br>
                                                        <label for="text"><b>Profit:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter profit" name="sProfit" required><br><br>



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

                            <hr>
                            <div style="margin-top: -19px; margin-bottom: 21px;">
                                <a  href="sales.php"><button class="btn btn-default btn-large" style="float: none;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
                                <form>
                                    <input style="color: #0b5ed7" type = "button " value = "Print"  onclick = "window.print()" />
                                </form>
                            </div>

                        </div>

                    </div>


                </div>











                </tbody>



                </table>




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

    <!-- Scroll to Top Button-->
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
                    <button class="btn btn-success" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-success" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>


