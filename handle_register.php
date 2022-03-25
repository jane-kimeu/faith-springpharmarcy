
<?php
include "connect.php";

if (isset($_POST['register'])){

    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];
    $email=$_POST['email'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirmpass'];
}

if(strlen($password)<6){

    $passError=  "password must have more than 6 characters";
    echo $passError;

}else{
    $storePass= password_hash($password,PASSWORD_DEFAULT);
}

if($password!=$confirmpass){

    $confirmpassError="password dont match";
    echo $confirmpassError;
}

if(empty($passError)and empty($confirmpassError)){
    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirmpass'];

    $sql= "INSERT INTO `user` ( `firstname`, `secondname`, `email`, `password`)
 VALUES ('$firstname','$secondname','$email','$storePass')";

    $result =mysqli_query($conn,$sql);

    if($result){

        echo "you have been registered";
        header("location:login.php");

    }else{
        echo"error executing query $sql".mysqli_error($conn);
    }
}

