<?php
//	连接数据库
	require('./conn.php');
//	接收传值
	$id = $_GET['id'];
//	构造sql语句
	$sql = "delete from goods where id = $id ";
//	得到结果集
	$r = mysqli_query($conn,$sql);
//	返回到客户端
	if($r){
		$arr=["errcode"=>0 , "msg"=>"删除成功"];
		echo json_encode($arr);
	}else{
		$arr=["errcode"=>1001 , "msg"=>"删除失败"];
		echo json_encode($arr);
	}
?>