<?php
    // session_destroy();
    // header("location: ../login/login.php");
session_start();


if (isset($_POST['logout'])) {

    session_destroy();


    header('Location: ../index.php');
    exit();
}
