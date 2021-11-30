<?php 
include 'connect.php';
$_id=$_GET['updateID'];
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $email=$_POST['name'];
    $mobile=$_POST['email'];
    $password=$_POST['gender'];

    $sql="update `phpmyadmin` set id='$id',name='$name',email='$email',gender='$gender' where id=$_id";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "update";
    }
    else{
        echo 'Error';
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='./bootstrap.min.css'>
    <title>Crud Operation</title>
</head>

<body>

    <div class='container'>
        <form method="post">
            <div class="mb-3">
                <labelclass="form-label">Enter Id</label>
                <input type="text" name="id" placeholder="Enter ID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               
            </div>
            <div class="mb-3">
                <labelclass="form-label">Name</label>
                <input type="text" name="name" placeholder="Enteryur name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               
            </div>
            <div class="mb-3">
                <labelclass="form-label">Email</label>
                <input type="email" name="email" placeholder="Enter email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Gender</label>
                <input type="text" name="gender" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>