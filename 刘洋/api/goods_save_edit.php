<?php
//	连接数据库
	require('./conn.php');
//	接收数据
	$id = $_POST['id'];
	$cate_id = $_POST['cate_id'];
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
	$sql = "update goods set cate_id = '$cate_id',code = '$code',name = '$name',costprice = '$costprice',price = '$price',saleprice = '$saleprice',num = '$num',weight = '$weight',saled = '$saled',intro = '$intro' where id=$id";
//	得到结果集
	$r = mysqli_query($conn,$sql);
	if($r){
		echo '{"errcode": 0,"msg":"数据修改成功"}';
	}else{
		echo '{"errcode": ,"msg":"数据修改失败"}';
	}
?>