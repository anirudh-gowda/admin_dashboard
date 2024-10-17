<?php

require ('../include/config.php');

session_start();

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $password = $_POST['password'];
    
    $select = " SELECT * FROM `admin` WHERE name = '$name' && password = '$password' ";
    
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        $_SESSION['name'] = $row['name'];
        header("Location: dashboard.php");
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
    <title>Admin Panal</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div class="box" style="background-color:#493628;">
        <form action="" method="post" style="background-color:#D6C0B3">
            <h3 style="color:#B8001F;">Admin Panal</h3>
            <input type="name" name="name" required placeholder="Name">
            <input type="password" name="password" required placeholder="Password">
            <input type="submit" name="submit"  class="form-btn">
        </form>
    </div>  
</body>
</html>