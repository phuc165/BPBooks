

<?php
    require_once 'functions.php';
    session_start();
    if (!isset($_SESSION['username'])){
        header("location: ../login/login.php");
        exit();
    }     

    $id = $_GET['productID'];
    settype($id, "int");
    deleteProduct($id);
    header("location:  ../productAdmin.php");