<?php

@include 'include/config.php';

session_start();

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
    
    $result = mysqli_query($conn , $sql);

    if($result)
    {
        echo '<script>alert("Signup Successful")</script>';
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
    <title>SignUp Panal </title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="box">
        <form action="" method="post">
            <h3>SignUp  Panal</h3>
            <input type="name" name="name" required placeholder="Name">
            <input type="email" name="email" required placeholder="Email">
            <input type="password" name="password" required placeholder="Password">
            <input type="submit" name="submit"  class="form-btn">
            <p>Already have an account? <a href="login.php"> Login</a></p>
        </form>
    </div>  
</body>
</html>