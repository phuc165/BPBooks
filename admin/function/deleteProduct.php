

<?php
    require_once 'functions.php';
    $id = $_GET['productID'];
    settype($id, "int");
    deleteProduct($id);
    header("location:  ../admin.php");