<?php
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

//fetch_data.php

include('connectdb.php');

if(isset($_POST["action"]))
{	
	$query = "SELECT * FROM product WHERE anHien = 1";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= " AND newPrice BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."' ";
	}
	if(isset($_POST["age"]))
	{
		debug_to_console($_POST["age"]);
		$age_filter = implode("','", $_POST["age"]);
		$query .= " AND age IN('".$age_filter."')";
	}
	if(isset($_POST["nxb"]))
	{
		$nxb_filter = implode("','", $_POST["nxb"]);
		$query .= " AND nxb IN('".$nxb_filter."')";
	}

	$statement = $conn->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="product_container2">
                    <a href="product.php?productID='.$row['productID'].'" class="product_image">
                        <img src="'.$row['img1'].'" alt="">
                    </a>
                    <div class="product_bottom">
                        <div class="title">
                            <a href="product.php?productID='.$row['productID'].'">'.$row['title'].'</a>
                        </div>                        
                        <div class="product_price">
                            <p class="newprice">'.$row['newPrice'].' đ<span>-'.round((1-($row['newPrice']/$row['oldPrice']))*100,1).'%</span></p>
                            <p class="oldprice">'.$row['oldPrice'].' đ</p>
                        </div>
                        <div class="buyContainer">
                            <form class="addCart" method="post" action="xulygiohang.php">
                                <input type="hidden" name="productID" value="'.$row['productID'].'"/>
                                <button type="submit" style="border: none; background-color: #CF0A0A; color: white; font-size:16px; cursor: pointer;">Thêm vào giỏ</button>
                            </form>
                            <div class="buyNow">Mua ngay</div>
                        </div>  
                        <div class="rating_container">
                            <div class="rating">
                                
                            </div>
                            <div class="soldqty">
                                
                            </div>
                        </div>
                    </div>                         
                </div>
			';
		}
	}
	else
	{
		$output = '<h3>Không có sản phẩm</h3>';
	}
	echo $output;
}

?>