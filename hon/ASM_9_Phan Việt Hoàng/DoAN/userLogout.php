<?php
    
session_start();


if (isset($_POST['userlogout'])) {

    session_destroy();


    header('Location: home.php');
    exit();
}