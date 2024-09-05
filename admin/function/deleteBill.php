

<?php
    require_once 'functions.php';
    session_start();
    if (!isset($_SESSION['username'])){
        header("location: ../login/login.php");
        exit();
    }     

    $id = $_GET['billID'];
    settype($id, "int");
    deleteBill($id);
    header("location:  ../billAdmin.php");