<?php
	include('./conn.php');
	session_start();
//	接收数据
	$oldpassword = $_POST['oldpassword'];
	$newpassword = $_POST['newpassword'];
	
//	$id = $_SESSION['id'];
	
	
//	新建sql修改语句
	$sql = " select * from admin where password= '$oldpassword' and id =".$_SESSION['id'];
	
//	结果集 
	$rs = mysqli_query($conn,$sql);
		
	if($row = mysqli_num_rows($rs)>0){
		
		$sq = "update admin set password = $newpassword where id =".$_SESSION['id'];
		$r = mysqli_query($conn,$sq);
		if($r){
			echo '{"errcode": 0 , "msg": "修改成功" }';
//			session_destroy();
//			$_SESSION = [];
		}else{
			echo '{"errcode": 1007 , "msg": "修改失败" }';
		}
	}else{
		echo '{"errcode":1003, "msg": "查询失败"}';
	}
	
?>