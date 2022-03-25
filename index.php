<?php
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>FAITH SPRING PHARMACY</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid">

    <div class="navbar">
        <a class="active rounded-pill" href="index.html"><i class="fa fa-fw fa-home"></i> Home</a>
                    <h1 style="text-align: center; color: #e6ecf5; font-family: 'Arial Rounded MT Bold'">FAITH SPRING PHARMACY</h1>

        <a class="active rounded-pill float-end" href="register.php"><i class="fa fa-fw fa-user"></i> Sign up</a>
        <a class="active rounded-pill float-end" href="register.php"><i class="fa fa-fw fa-user"></i> login</a>

    </div>
</div>
<div class="row m-2">
    <div class="col-sm-7">
    <section id="home">
        <div class="homepage">

    </div>
</div>
    <div class="col-sm-5 " style="background-color: #1a77e7; border-radius: 50%">
         <div class="card-header">
             <div class="card" style="border-radius: 50%">
                 <div class="card-body">
                     <div class="desText float-end">
                         <h3 style="color: #1127e3;font-family:'Rage Italic'">Your health is our concern</h3>
                     </div>
                  </div>
                  </div>
                   <hr>

                         <!-- ***** Preloader Start ***** -->
                         <div id="logo" class="preloader">
                             <div class="preloader-inner">
                                 <span class="figure-img"></span>
                                 <img class="rounded-pill" src="images/bgl.png" alt="preloader" height="150" width="300">

                                     <span></span>
                                     <span></span>
                                     <span></span>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>


        </div>

<div class="container">
    <h3 class="specialty-title"style="color: #0b5ed7">About Us</h3>
    <hr>
    <div class="home">

    </div>
    <h4 class="specialty-title " style="color: #0b5ed7">Our Objectives</h4>
    <hr>
    <div class="row">
        <div class="col-sm-6">
            <div class="jumbotron condition-text">
                <p class="text-justify service-text">
                    To build a patient-focused integrated primary  health care system.
                    We aim at increasing the focus on health promotion and prevention.
                    We aspire to improve quality and safety in use of health care essentials.
                </p>
            </div>
        </div>
        <div class="col-sm-6">
            <img src="images/img_7.png" alt="objectives-img" style="border-radius: 50%" height="100"width="200">
        </div>
    </div>
    <h4 class="specialty-title"style="color: #0a53be">Our Vision</h4>
    <hr>
    <div class="row">
        <div class="col-sm-6">
            <img src="images/thlo.jpg" alt="vision-img" style="border-radius: 50%" height="100"width="200">
        </div>
        <div class="col-sm-6">
            <div class="jumbotron condition-text">
                <p class="text-justify service-text">
                    We envision to provide an unparalleled experience as the most trusted partner for health care.
                    We hope to contribute to health and well-being by providing the best health care to every patient through integrated clinical practice.
                </p>
            </div>
        </div>
    </div>
</div>
<br>
<br>

<div style="width: 100%; background: #462be0; color: white;">
    <div class="row" style="width: 100%; padding: 16px 18px;">
        <div class="col-sm-3">
            <h3 class="text-center align-items-center"><a class="footer-link" href="about.html">About Us</a></h3>
            <p class="text-justify text-center">Our goal is to improve our customer's lives by providing quality health care and to ensure that you leave faith spring pharmacy with a smile.</p>
        </div>


        </div>


</div>
<div style="background: mediumslateblue; color: white; height: 60px;">
    <p class="text-center" style="padding-top: 20px;">Copyright &copy; 2022 | faithspringpharmacy | All rights reserved</p>
</div>




</body>
    <script>

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl, option)
        })
    </script>


</html>
