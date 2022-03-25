<?php
include "header.php";
?>




            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myform">
                    supplier
                </button>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>



                                <tr>
                                    <th>Id</th>
                                    <th>Supplier</th>
                                    <th>Contact person</th>
                                    <th>Address</th>
                                    <th>Tel number</th>
                                    <th>Note</th>
                                    <th>action</th>

                                </tr>
                                </thead>

                                <tbody>

                                <?php
                                include 'connect.php';
                                $sql = "SELECT * FROM  supplier";
                                $result = mysqli_query($conn, $sql);
                                $rows = mysqli_num_rows($result);
                                if ($rows>0)
                                {
                                    while($supplier = mysqli_fetch_assoc($result)){
                                        $id= $supplier['id'];
                                        $name = $supplier['supplier_name'];
                                        $contact= $supplier['contact_person'];
                                        $address= $supplier['email'];
                                        $tel= $supplier['tel_number'];
                                        $note= $supplier['note'];

                                        echo  "<tr>
                                    <td>$id</td>
                                    <td>$name</td>
                                    <td>$contact</td>
                                    <td>$address</td>
                                    <td>$tel</td>
                                     <td>$note</td>
                                    
                                   <td><a href='supplierEdit.php?id=$id' class='btn btn-primary'><i class='fa fa-pencil'></i></a> | 
                                     <a class='btn btn-danger' href='delete.php?id=$id'> <i class='fa fa-trash'></i></a>|
                                    <a class='btn btn-success' href='insertSupplier.php?id=$id'> <i class='fa fa-eye'></i></a></td>
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
                                            <h4 class="modal-title">supplier  </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">

                                            <form action="insertSupplier.php" method="post">

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="name" ><b>supplier name:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter supplier Name" name="name" required><br><br>
                                                        <label for="name"><b>Contact person:</b></label><br>
                                                        <input class="form-control" type="text" placeholder="Enter contact person" name="name" required><br>

                                                        <label for="email"><b>Email:</b></label><br>
                                                        <input class="form-control" type="email" placeholder="Enter Email" name="email" required><br><br>
                                                        <label for="text"><b>Tel number:</b></label><br>
                                                        <input class="form-control" type="Telephone" placeholder="Enter Tel number" name="tel" required><br><br>
                                                        <label for="text"><b>Note:</b></label><br>
                                                        <input class="form-control" type="name" placeholder="Enter Tel number" name="note" required><br><br>

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
                            <li>




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



                                <div class="hero-unit-clock" style="background-color: Orange">

                                    <form name="clock">
                                        <font color="btn-primary">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
                                    </form>
                                </div>
                            </li>

                        </div>
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

