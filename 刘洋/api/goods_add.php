<?php
	require('./conn.php');
	
//	接收数据
	$cateid = $_POST['cateid'];
	$code = $_POST['code'];
	$name = $_POST['name'];
	$costprice = $_POST['costprice'];
	$price = $_POST['price'];
	$saleprice = $_POST['saleprice'];
	$num = $_POST['num'];
	$weight = $_POST['weight'];
	$saled = $_POST['saled'];
	$intro = $_POST['intro'];
	
//	构造sql语句
	$sql = "insert into goods(cate_id,code,name,costprice,price,saleprice,num,weight,saled,intro) values('$cateid','$code','$name','$costprice','$price','$saleprice','$num','$weight','$saled','$intro')";
	$r = mysqli_query($conn,$sql);
//	将数据返还给客户端
	if($r){
//		echo json_encode($r)
		echo '{"errcode": 0 ,"msg":"商品添加成功"}';
	}else{
		echo '{"errcode": 1010,"msg":"商品添加失败"}';
	}
?>