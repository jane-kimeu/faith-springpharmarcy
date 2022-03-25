
<?php
include "header.php";
?>




   <!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myform">
        sales
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
                        <th>Description/category</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Amount</th>
                        <th>Profit</th>
                        <th>Action</th>

                    </tr>
                    </thead>

                    <tbody>

                    <?php
                    include 'connect.php';
                    $sql = "SELECT * FROM  sales";

                    $result = mysqli_query($conn, $sql);

                    $rows = mysqli_num_rows($result);
                    if ($rows>0)
                    {
                        while($sales= mysqli_fetch_assoc($result)){
                            $id= $sales['id'];
                            $name = $sales['product_name'];
                            $description= $sales['description'];
                            $price= $sales['price'];
                            $qty= $sales['qty'];
                            $amount= $sales['amount'];
                            $profit= $sales['profit'];

                            echo  "<tr>
                                    <td>$id</td>
                                    <td>$name</td>
                                    <td>$description</td>
                                    <td>$price</td>
                                    <td>$qty</td>
                                     <td>$amount</td>
                                     <td>$profit</td>
                                    
                                  <td><a href='salesEdit.php?id=$id' class='btn btn-primary'><i class='fa fa-pencil'></i></a> | 
                                     <a class='btn btn-danger' href='deleteSales.php?id=$id'> <i class='fa fa-trash'></i></a>|
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
                                <h4 class="modal-title">sales details </h4>
                                <button type="button" class="close" data-dismiss="modal">*</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="insertSales.php" method="post">


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="name" ><b>product name:</b></label><br>
                                            <input class="form-control" type="text" placeholder="Enter product Name" name="name" required><br><br>
                                            <label for="name"><b>description:</b></label><br>
                                            <input class="form-control" type="text" placeholder="Enter description" name="desc" required><br>

                                            <label for="name"><b> selling price:</b></label><br>
                                            <input class="form-control" type="shilling" placeholder="Enter selling price" name="price" required><br><br>

                                        </div>
                                        <div class="col-sm-6">
                                            <label for="text"><b>quantity:</b></label><br>
                                            <input class="form-control" type="text" placeholder="Enter qty" name="quantity" required><br><br>
                                            <label for="text"><b>amount:</b></label><br>
                                            <input class="form-control" type="number" placeholder="Enter amount" name="amount" required><br><br>
                                            <label for="text"><b>profit:</b></label><br>
                                            <input class="form-control" type="number" placeholder="Enter profit" name="profit" required><br><br>



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


            <!-- /.container-fluid -->

            <script language="javascript" type="text/javascript">
                        /* Visit http://www.yaldex.com/ for full source code
                        and get more free JavaScript, CSS and DHTML scripts! */
                        <!-- Begin
                        var timerID = null;
                        var timerRunning = false;
                        function stopclock (){
                            if(timerRunning)
                                clearTimeout(timerID);
                            timerRunning = false;
                        }
                        function showtime () {
                            var now = new Date();
                            var hours = now.getHours();
                            var minutes = now.getMinutes();
                            var seconds = now.getSeconds()
                            var timeValue = "" + ((hours >12) ? hours -12 :hours)
                            if (timeValue == "0") timeValue = 12;
                            timeValue += ((minutes < 10) ? ":0" : ":") + minutes
                            timeValue += ((seconds < 10) ? ":0" : ":") + seconds
                            timeValue += (hours >= 12) ? " P.M." : " A.M."
                            document.clock.face.value = timeValue;
                            timerID = setTimeout("showtime()",1000);
                            timerRunning = true;
                        }
                        function startclock() {
                            stopclock();
                            showtime();
                        }
                        window.onload=startclock;
                        // End -->
                    </SCRIPT>



                    <div class="hero-unit-clock" style="background-color: white">

                        <form name="clock">
                            <font color="purple">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
                        </form>
                    </div>
                </li>

            </div>











            <!-- /.container-fluid -->

            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;faithspringphamarcy@2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
    </div>
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
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


</div>
</body>

</html>

