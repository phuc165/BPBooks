<?php
 require_once "./admin/connectdb.php";
 session_start();
$username = $_POST["name"];
$mail = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$province = $_POST["province"];
$district = $_POST["district"];
$ward = $_POST["ward"];
$date = date("Y-m-d");
$state =0;
$cart=$_POST['isCart'];
$fullAddress = $address."-".$ward."-".$district."-".$province;
  
function getHightestID($conn){
    
   $usersql ="SELECT userID FROM bill WHERE userID LIKE 'G%' ORDER BY CAST(SUBSTRING(userID, 2) AS UNSIGNED) DESC LIMIT 1";
   $u=$conn->query($usersql);
   if($u->rowCount() > 0) {  
       $newest = $u->fetch();
       $newestID = (int)substr($newest["userID"],1);
   }{
    $newestID=1;
   }
   
   return $newestID;
}   


$newGuestID="G".(getHightestID($conn)+1);
if($cart==1){
    foreach($_SESSION['cart'] as $k ){
        $item  = json_decode($k,true);
        $cost= $item['qtt'] * $item['price'];
        addToBill($conn,$_SESSION['userID'],$item['id'],$item['qtt'],$username,$phone,$fullAddress,$date,$state,$cost);

    }
    echo"cart";
    header("location: ./home.php");
}else{
    $itemID =$_POST['prodID'];
    $itemqtt =$_POST['quantiy'];
    $item=getItem($conn,$itemID);
    $cost= $itemqtt * ($item['price']-($item['price']*$item['discount']/100));
    addToBill($conn,$newGuestID,$itemID,$itemqtt,$username,$phone,$fullAddress,$date,$state,$cost);
    echo"single";

    header("location: ./home.php");
}

function addToBill($conn,$user,$prod,$qtt,$name,$phone,$fullAddress,$date,$state,$total){
    $sql="INSERT INTO bill(userID,productID,quantity,username,phone,useraddress,buytime,billstate,total) VALUES ('$user','$prod','$qtt','$name','$phone','$fullAddress','$date','$state','$total')";
    $kq = $conn->exec($sql);
    
}
$newID = 'G'.(getHightestID($conn) +1);
function getItem($conn,$item_id){

    $usersql ="SELECT * FROM product WHERE productID=$item_id";
    $u=$conn->query($usersql);
    if($u->rowCount() > 0) {  
        $newest = $u->fetch();
        
    }
    return $newest;
}

?>