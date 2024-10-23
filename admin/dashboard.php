<?php

require ('../include/config.php');

session_start();

if(!$_SESSION['name']){

    echo "<script>alert('You have not logged in!');
    window.location.href='index.php';</script>";  
} 

$sql = "SELECT * FROM `users`";

$result = mysqli_query($conn,$sql);
if(!$result){
    echo "query error" . mysqli_error($conn);
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="nav">
        <h5> Hello! Admin </h5>
        <h3> USERS DETAILS</h3>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
    <div class="container">
        <a href="addusers.php" class="btn btn-link">ADD USERS</a>
        
            <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(mysqli_num_rows($result)>0){
                foreach ($result as $data) {?>
            <tr>
                <th scope="row">
                    <?php echo $data['id']; ?>
                </th>
                <td>
                    <?php echo $data['name']; ?>
                </td>
                <td>
                    <?php echo $data['email']; ?>
                </td>
                <td>
                    <?php echo $data['password']; ?>
                </td>
                <td>
                    <a href="edit.php?id=<?= $data['id'];?>" class="btn btn-primary">Edit<a>
                    <a href="delete.php?id=<?= $data['id'];?>" class="btn btn-danger">Delete<a>
                </td>
            </tr>
            <?php }
            }else{
                echo "<h5> no record found </h5>";
            }
            ?>
        </tbody>
        </table>
    </div>
</body>
</html>