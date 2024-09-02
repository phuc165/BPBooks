<?php
session_start();


if (isset($_POST['value'])) {
    $stringg=$_POST['value'];
    if($stringg==null){
        $_SESSION['cart']=[];
    }else{
    
    foreach($stringg as $s){
    
    $_SESSION['cart'][] = $s;
    }
    //header("location: ./product.php");
    }
} 
else{
    echo "Invalid request.";
    

}