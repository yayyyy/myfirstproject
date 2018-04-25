<?php
	include('./conn.php');
//  连接数据库
//	接收数据
	$username = $_POST['username'];	
	$password = $_POST['password'];
	$usergroup = $_POST['usergroup'];
	
//	构造SQL语句 insert into 插入数据到数据库
	$sql = "insert into admin(username,password,usergroup) values('$username','$password','$usergroup')";
//	返回执行结果
	$r = mysqli_query($conn,$sql);
	if($r){
		echo '1';
	}else{
		echo '0';
	}
?>