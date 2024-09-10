<?php
session_start();

unset($_SESSION['email']);  //using unset insted of session destroy, cus only to destroy or unset particular session
header('location: index.php');

?>