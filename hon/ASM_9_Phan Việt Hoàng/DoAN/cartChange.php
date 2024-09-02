<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] =[];
    
}

if (isset($_POST['prodID'])) {
    $stringg=$_POST['prodID'];
   
    $_SESSION['cart'][]=$stringg;
    header("location: ./product.php");
} 
else{
    echo "Invalid request.";
    header("location: ./product.php");

}