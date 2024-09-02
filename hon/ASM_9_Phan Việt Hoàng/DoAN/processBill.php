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
function getHightestBillCode($conn){
    $usersql ="SELECT MAX(maBill) AS maximum FROM bill";
    $u=$conn->query($usersql);
    if($u->rowCount() > 0) {  
        $billcode = $u->fetch();
        
    }
    
    return $billcode['maximum'];

}

$newGuestID="G".(getHightestID($conn)+1);
if($cart==1){
    $billcode= getHightestBillCode($conn)+1;
    foreach($_SESSION['cart'] as $k ){
        $item  = json_decode($k,true);
        $cost= $item['qtt'] * $item['price'];
        addToBill($conn,$billcode,$_SESSION['userID'],$item['id'],$item['qtt'],$username,$phone,$fullAddress,$date,$state,$cost);
        UpdateProductQuantity($conn,$item['id'],$item['qtt']);
    }
    $_SESSION['cart']=[];
    header("location: ./home.php");
}else if(isset($_SESSION['userName'])){
    $billcode= getHightestBillCode($conn)+1;

    $itemID =$_POST['prodID'];
    $itemqtt =$_POST['quantiy'];
    $item=getItem($conn,$itemID);
    $cost= $itemqtt * ($item['price']-($item['price']*$item['discount']/100));
    addToBill($conn,$billcode,$_SESSION['userID'],$itemID,$itemqtt,$username,$phone,$fullAddress,$date,$state,$cost);
    UpdateProductQuantity($conn,$itemID,$itemqtt);
    

    header("location: ./home.php");
}else{
    $billcode= getHightestBillCode($conn)+1;

    $itemID =$_POST['prodID'];
    $itemqtt =$_POST['quantiy'];
    $item=getItem($conn,$itemID);
    $cost= $itemqtt * ($item['price']-($item['price']*$item['discount']/100));
    addToBill($conn,$billcode,$newGuestID,$itemID,$itemqtt,$username,$phone,$fullAddress,$date,$state,$cost);
    UpdateProductQuantity($conn,$itemID,$itemqtt);
    

    header("location: ./home.php");
}

function addToBill($conn,$code,$user,$prod,$qtt,$name,$phone,$fullAddress,$date,$state,$total){
    $sql="INSERT INTO bill(maBill,userID,productID,quantity,username,phone,useraddress,buytime,billstate,total) VALUES ('$code','$user','$prod','$qtt','$name','$phone','$fullAddress','$date','$state','$total')";
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


function UpdateProductQuantity($conn,$item_id,$quantity){
    $sql="UPDATE product SET instock = (instock -$quantity) WHERE productID=$item_id";
    $kq = $conn->exec($sql);

}
?>