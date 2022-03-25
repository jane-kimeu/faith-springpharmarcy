<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<div class="navbar">
    <a class="active rounded-pill" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
    <h1 style="text-align: center; color: #e2e4ea; font-family: 'Arial Rounded MT Bold'">FAITH SPRING PHARMACY</h1>
    <a class="active rounded-pill float-end" href="register.php"><i class="fa fa-fw fa-user"></i> Sign up</a>
</div>
<body class="btn-primary">
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5">
                    <div>
                        <img src="images/cup.jpg" alt="login" height="620" width="500">
                    </div>

                </div>
                <div class="col-lg-7">
                    <div class="text-center">
                        <div id="logo" class="preloader">
                            <div class="preloader-inner">
                                <span class="figure-img"></span>
                                <img class="rounded-pill" src="images/bgl.png" alt="preloader" height="200" width="300">
                                <div class="desText">
                                    <h3 style="color: #094ae3;font-family:'Rage Italic'">FAITH SPRING PHARMACY</h3>
                                </div>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <h4  style="color: #3e5fe2">create an account!</h4>
                    </div>
                    <form action="handle_register.php" method="post">
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <input class="form-control rounded-pill" type="text" name="firstname" placeholder="Enter your firstname" required>
                            </div>
                            <div class="col-lg-6">
                                <input class="form-control rounded-pill" type="text" name="secondname" placeholder="Enter your secondname" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <input class="form-control rounded-pill" type="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <input class="form-control rounded-pill" type="text" name="password" placeholder="Enter password" required>
                            </div>
                            <div class="col-lg-6">
                                <input class="form-control rounded-pill" type="text" name="confirmpass" placeholder="confirm password" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <input class="btn btn-primary rounded-pill" type="submit" name="register" value="register" required>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <button class="btn btn-danger rounded-pill" <i class="fa fa-google"></i>register with google</button>
                        </div>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a href="">forgot password</a>
                    </div>
                    <div class="text-center">
                        <a href="register.php">create an account</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

</body>
</html>

