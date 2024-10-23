<?php

session_start();

if(!$_SESSION['email']){

    echo "<script>alert('You have not logged in!');
    window.location.href='index.php';</script>";  
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <div class="navbr">
            <h1>Dashboard</h1>
            <h5>hey! <?php echo $_SESSION['email'] ?> </h5>
            <div class="navbr-link">
                <a href="logout.php" class="btn btn-outline-secondary">Logout</a>
            </div>
        </div>
    </header>


    <div class="main_img2"></div>
    

    <footer>
        <p>&copy; 2021 Dashboard</p>
    </footer>
</body>
</html>