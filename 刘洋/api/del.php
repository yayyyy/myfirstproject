<?php
	include('./conn.php');
	session_start();
	$_SESSION= [];
	echo '<script>';
	echo 'alert("成功退出!!!");';
	echo 'location.href="../login.html";';
	echo '</script>';
	
//	清除session在数据库中的文件

	
	session_destroy();
	
