<?php
include 'connect.php';
if(isset($_GET['deleteID'])){
    $id=$_GET['deleteID'];
    $sql="delete from `curd_operation` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "delete";
    }
    else {
        echo(mysqli_error($con));
    }
}

?>