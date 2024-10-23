<?php

$conn = mysqli_connect("localhost", "root", "", "admin_dashboard");

if(!$conn)
{
    echo '<script>alert("no-connection")</script>';
}

//push data

// $name = $_POST['name'];
// $password = md5($_POST['password']);

// $sql = "INSERT INTO `admin`(`name`, `password`) VALUES ('$name','$password')";

// $result = mysqli_query($conn , $sql);

// if($result)
// {
//     echo '<script>alert("submitted")</script>';
// }
// else
// {
//     echo '<script>alert("submit failed")</script>';
// }
?>