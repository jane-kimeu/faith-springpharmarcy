<?php
include "header.php";
?>

            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <button type="button" class=" btn btn-primary" data-bs-toggle="modal" data-bs-target="#myform">
                    stock
                </button>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>

                                <tr>
                                    <th>Id</th>
                                    <th>S.No</th>
                                    <th>Company</th>
                                    <th>Product name</th>
                                    <th>Batch number</th>
                                    <th>Quantity</th>
                                    <th>Remaining quantity</th>
                                    <th>action</th>

                                </tr>
                                </thead>

                                <tbody>

                                <?php
                                include 'connect.php';
                                $sql = "SELECT * FROM  stock";
                                $result = mysqli_query($conn, $sql);
                                $rows = mysqli_num_rows($result);
                                if ($rows>0)
                                {


                                    while($stock= mysqli_fetch_assoc($result)){
                                        $id= $stock['id'];
                                        $serialNumber= $stock['serial_number'];
                                        $company= $stock['company'];
                                        $productName= $stock['product_name'];
                                        $batchNumber= $stock['batch_number'];
                                        $qty= $stock['qty'];
                                        $remainingQty= $stock['remaining_qty'];


                                        echo  "<tr>
                                    <td>$id</td>
                                    <td>$serialNumber</td>
                                    <td>$company</td>
                                    <td>$productName</td>
                                    <td>$batchNumber</td>
                                    <td>$qty</td>
                                    <td>$remainingQty</td>
                                    
                                   <td><a href='editStock.php?id=$id' class='btn btn-primary'><i class='fa fa-pencil'></i></a> | 
                                     <a class='btn btn-danger' href='deleteStock.php?id=$id'> <i class='fa fa-trash'></i></a>|
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
                                            <h4 class="modal-title">stock details </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="insertStock.php" method="post">


                                                <div class="row">
                                                    <div class="col-sm-6">

                                                        <label for="name" ><b>S.No:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter S.No" name="serial" required><br><br>
                                                        <label for="name"><b>Company:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter Company" name="company" required><br>

                                                        <label for="email"><b>Product  name:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter product name" name="product" required><br><br>

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="text"><b>Batch number:</b></label><br>
                                                        <input class="form-control" type="number" placeholder="Enter Batch number" name="batch" required><br><br>
                                                        <label for="text"><b>Quantity:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter Quantity" name="qty" required><br><br>
                                                        <label for="text"><b> Remaining Quantity:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter Remaining Quantity" name="rQty" required><br><br>



                                                    </div>

                                                </div>


                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button class="btn btn-primary" type="submit" name="btn">Add stock</button>
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
                                <span>Copyright &copy;faithspringphamarcy2022</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
            </div>

</body>

</html>