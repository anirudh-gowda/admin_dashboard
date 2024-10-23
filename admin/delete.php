<?php

require('../include/config.php');
session_start();

$delete_id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = '$delete_id'";

$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('Deleted Successfully [$delete_id]');
    window.location.href='dashboard.php';</script>";  
}

?>