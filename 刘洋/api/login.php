<?php
	require('./conn.php');
	session_start();
//		接收数据
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
//		验证数据有效性
	if( strlen($username) <3){
		exit('请输入正确的用户名');
	}
//		构造SQL语句查询用户名和密码是否存在
//	$sql = "select * from admin where username = '$username' and password = '$password'";
//	$rs = mysqli_query($conn,$sql);
	$rs = mysqli_query($conn,"select * from admin where username = '$username' and password = '$password'");
//		将查询的结果返回给客户端
	if( mysqli_num_rows($rs)>0 ){
		echo '1';
//			读取数据
		$row = mysqli_fetch_assoc($rs);
//		添加session
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['id'] = $row['id'];
		$_SESSION['usergroup'] = $row['usergroup'];
	}else{
		echo '0';
	}	
	mysqli_free_result($rs);
?>