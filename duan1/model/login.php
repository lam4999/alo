<?php 
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password_in'])){
    unset($_SESSION['email']);
    unset($_SESSION['password_in']);
    header('location:../index.php');
}
?>