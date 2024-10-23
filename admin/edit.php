<?php

@include '../include/config.php';

session_start();

if(isset($_POST['submit'])){

    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password' WHERE id = '$id'";
    
    $result = mysqli_query($conn , $sql);

    if($result)
    {
        echo "<script>alert('Edited Successful');
        window.location.href='dashboard.php';</script>";
    }
    else
    {
        echo "<script>alert('Something went wrong')</script>";
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Users</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div class="box">
        <?php
            $id = $_GET['id'];
            $query = "SELECT * FROM `users` WHERE id = '$id'";

            $query_run = mysqli_query($conn, $query);
            $row = (mysqli_fetch_array($query_run))
            
        ?>
        <form action="" method="post">
            <h3>Edit Users</h3>
            <input type="name" name="name" value="<?= $row['name'];?>" required placeholder="Name">
            <input type="email" name="email" value="<?= $row['email'];?>" required placeholder="Email">
            <input type="text" name="password" value="1234" required placeholder="Password">
            <input type="submit" name="submit"  class="form-btn">
        </form>
        <?php
            
        ?>
    </div>  
</body>
</html>