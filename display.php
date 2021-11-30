<?php 
include 'connect.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='./bootstrap.min.css'>
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <button class="btn btn-primary "> <a class="text-light" href="user.php"> Add User</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                 $sql="Select * from `phpmyadmin`";
                 $result=mysqli_query($con,$sql);
                 if($result){
                     while($row=mysqli_fetch_assoc($result)){
                         $_id=$row['_id'];
                         $id=$row['id'];
                         $name=$row['name'];
                         $email=$row['email'];
                         $gender=$row['gender'];

                         echo '<tr>
                         <th scope="row">'.$_id.'</th>
                         <td>'.$id.'</td>
                         <td>'.$name.'</td>
                         <td>'.$email.'</td>
                         <td>'.$gender.'</td>
                         <td><button class=" btn btn-warning"> <a class="text-light" href="update.php?updateID='.$_id.'"> Update</a></button></td>
                         
                     </tr>';
                     }
                 }
                ?>
                
            </tbody>
        </table>
    </div>
</body>

</html>