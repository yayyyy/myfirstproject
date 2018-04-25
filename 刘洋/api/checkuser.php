<?php
//	include('./conn.php');
	session_start();
//	读取session
//	isession_start();

//$_SESSION['username'] 作为是否登陆的标识

	if(isset( $_SESSION['username'] )){
		echo '1';
	}
	else{
		echo 'alert("登陆已超时");location.href="login.html";';
	}
