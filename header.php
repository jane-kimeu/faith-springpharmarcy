<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script type = "text/javascript"></script>
    <script type="text/javascript " src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="js/myjs.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-3 col-lg-3 btn-primary">
            <ul class="nav flex-column btn-primary">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <img class="rounded-pill" src="images/bgl.png" alt="preloader" height="100" width="200">
                        <hr>
                        <span class="text-white h4">FAITH SPRING ADMIN</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">
                        <i class="fa fa-cogs text-white fa-lg"></i>
                        <span class="text-white m-2">Dashboard</span>
                    </a>
                </li>
                <hr>
                    <a class="nav-link" href="sales.php">
                        <i class="fa fa-dollar text-white fa-lg"></i>
                        <span class="text-white m-2">Sales</span>
                    </a>
                </li>
                <hr>

                <li class="nav-item">
                    <a class="nav-link" href="medicine.php">
                        <i class="fa fa-heartbeat text-white fa-lg"></i>
                        <span class="text-white m-2">Medicine</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" href="customer.php">
                        <i class="	fa fa-id-badge text-white fa-lg"></i>
                        <span class="text-white m-2">Customer</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" href="supplier.php">
                        <i class="	fa fa-id-badge text-white fa-lg"></i>
                        <span class="text-white m-2">supplier</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" href="stock.php">
                        <i class="fa fa-home text-white fa-lg"></i>
                        <span class="text-white m-2">Stock</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" href="salesReport.php">
                        <i class="fa fa-file text-white fa-lg"></i>
                        <span class="text-white m-2">salesReport</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" href="purchases.php">
                        <i class="	fa fa-briefcase text-white fa-lg"></i>
                        <span class="text-white m-2">Purchases</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                        <i class="fa fa-wrench text-white fa-lg"></i>
                        <span class="text-white m-2">logout</span>
                    </a>
                </li>


            </ul>
        </div>
        <div class="col-sm-9 col-lg-9">
            <div class="row bg-white">
                <div class="col-sm-7 col-lg-7">
                    <nav class="navbar navbar-light ">
                        <div class="container-fluid">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
                <div class="col-sm-5 col-lg-5">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">

                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">
                                        <i class="fa fa-envelope fa-lg"></i>
                                        <span class="badge bg-danger rounded-pill">10+</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-bell fa-lg"></i>
                                        <span class="badge bg-danger rounded-pill">4+</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="m-2"><?php echo $_SESSION["firstname"];?></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"id="liveToastBtn">
                                        <img class="rounded-circle" src="<?php echo $_SESSION["picture"]?>"alt="loading" width="30"
                                             height="30">
                                    </a>


                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>




