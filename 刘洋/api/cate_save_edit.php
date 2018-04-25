<?php
	require('./conn.php');
	
	$name = $_POST['name'];
	$state = $_POST['state'];
	$parentid = $_POST['parentid'];
	$id = $_POST['id'];
	
	$sql="update category set name='$name',state='$state',parentid='$parentid' where id=$id";
	$r=mysqli_query($conn, $sql);
	
	//判断执行结果，根据结果返回数据
	if($r){
		echo '1';
	}else{
		echo '0';
	}
	
?>