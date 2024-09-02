

<?php
    require_once 'functions.php';
    $id = $_GET['billID'];
    settype($id, "int");
    deleteProduct($id);
    header("location:  ../admin.php");