<?php
include "header.php";
include 'connect.php';

$id = $_GET['id'];

$sql= "SELECT * from sales where id='$id'";
$data=mysqli_query($conn, $sql);

$position=mysqli_fetch_array($data);

?>


                                        <div class="modal-body">
                                            <form action="#" method="post">


<div class="row">
    <div class="col-sm-6">

        <div class="row">
            <label for="name" ><b>id:</b></label><br>
            <input class="form-control" type="number" placeholder="Enter stock id" name="id" required value="<?php echo $position[0] ?>"><br><br>


            <label for="email"><b>product name:</b></label><br>
            <input class="form-control" type="text" placeholder="Enter product" name="product" value="<?php echo $position[1]?>" required><br><br>

            <label for="name"><b>description:</b></label><br>
        <input class="form-control" type="text" placeholder="Enter description" name="desc"  value="<?php echo $position[2]?>" required><br>

        <label for="name"><b> selling price:</b></label><br>
        <input class="form-control" type="shilling" placeholder="Enter selling price" name="price"value="<?php echo $position[3]?>" required><br><br>

    </div>
    <div class="col-sm-6">
        <label for="text"><b>quantity:</b></label><br>
        <input class="form-control" type="text" placeholder="Enter qty" name="quantity" value="<?php echo $position[4]?>" required><br><br>
        <label for="text"><b>amount:</b></label><br>
        <input class="form-control" type="number" placeholder="Enter amount" name="amount" value="<?php echo $position[5]?>" required><br><br>
        <label for="text"><b>profit:</b></label><br>
        <input class="form-control" type="number" placeholder="Enter profit" name="profit" value="<?php echo $position[6]?>" required><br><br>



    </div>

</div>


</div>
...
</div>
<!-- Modal footer -->
<div class="modal-footer">
    <a href="sales.php"></a>
    <button type="button"  class="btn btn-danger" data-dismiss="modal">Close</button>
    <button class="btn btn-primary" type="submit" name="btn">Edit</button>

</div>



<?php
include 'connect.php';
if (isset($_POST['btn'])) {

    $productName = $_POST['product'];
    $description = $_POST['desc'];
    $price = $_POST['price'];
    $qty = $_POST['quantity'];
    $amount= $_POST['amount'];
    $profit= $_POST['profit'];
    //conect to server
    //update query
    $sql= " update sales set product_name='$productName',description='$description',
                   price='$price',qty='$qty',amount='$amount',profit ='$profit'  where id ='$id'";




    if ($conn->query($sql) == true){
        print "<p>sales Updated Successfully.</p>";
        print "<a href='sales.php' class='btn btn-primary'>Update Another supplier</a>";
    }
    else{
        print "<p>sales not updated.</p>";
        print "<a href='sales.php' class='btn btn-danger'>Try Again</a>";
    }
    mysqli_close($conn);
}
?>

    </form>
</div>
</body>
</html>
