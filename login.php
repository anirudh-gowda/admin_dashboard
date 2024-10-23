<?php

require ('include/config.php');

session_start();

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $select = " SELECT * FROM `users` WHERE email = '$email' && password = '$password' ";
    
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        $_SESSION['email'] = $row['email'];
        header("Location: main.php");
    } else {
        echo "<script>alert('name or Password is Wrong.')</script>";
    }
    
  
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Panal</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="box">
        <form action="" method="post">
            <h3>Login Panal</h3>
            <input type="email" name="email" required placeholder="Email">
            <input type="password" name="password" required placeholder="Password">
            <input type="submit" name="submit"  class="form-btn">
            <P>Don't have an account? <a href="signup.php"> Create an Account</a></P>
        </form>
    </div>  
</body>
</html>