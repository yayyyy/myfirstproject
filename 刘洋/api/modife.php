<?php
//	连接数据库
	include('./conn.php');
//	接收数据
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];
	$usergroup = $_POST['usergroup'];
	$id = $_POST['id'];
	
//	构造sql语
	$sql = "update admin set username='$username',password='$pwd',usergroup='$usergroup'where id=$id";
	$r = mysqli_query($conn,$sql);
	
	if($r){
		$arr = ["errcode"=>0 , "msg"=>"修改成功"];
		echo json_encode($arr);
	}else{
		$arr = ["errcode"=>1005 , "msg"=>"修改失败"];
		echo json_encode($arr);
	}
	
?>