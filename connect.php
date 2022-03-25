<?php
$conn = mysqli_connect("localhost","root","","faith");
if($conn==false){

    echo"error connecting to server".mysqli_connect_error($conn);
}


