<?php

include "connect.php";

if (isset($_POST['login'])){

    $useremail=$_POST["email"];
    $userpassword=$_POST["password"];

    $sql=  "SELECT * FROM `user` WHERE email ='$useremail' ";

    $result =mysqli_query($conn,$sql);

    if($result){
        $data =mysqli_num_rows($result);
        if($data == 1){

            while ($row=mysqli_fetch_array($result)){
                $id =$row["id"];
                $email =$row["email"];
                $firstname =$row["firstname"];
                $password =$row["password"];

                //verify
                if(password_verify($userpassword,$password)){

                    if($row["usertype"]== "user"){


                        session_start();

                        $_SESSION["loggedin"]=true;
                        $_SESSION["id"]= $id;
                        $_SESSION["username"]= $firstname;

                        header("location:dashboard.php");

                    }elseif ($row["usertype"]== "admin"){

                        session_start();

                        $_SESSION["loggedin"]=true;
                        $_SESSION["id"]= $id;
                        $_SESSION["username"]= $firstname;


                        header("location:adminDashboard.php");
                    }else{
                        echo "You have not been assigned a usertype. contact admin";
                    }

                }else{
                    echo "password not matching";
                }
            }
        }

    }else{
        echo "error executing query $sql".mysqli_error($conn);
    }

}
