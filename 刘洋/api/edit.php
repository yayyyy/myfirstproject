<?php
	include('./conn.php');
//	在服务器端编写文件，接收ID，读取一条数据，返回给客户端
	
	$id = $_GET['id'];
	
//	构造sql语句
	$sql = "select * from admin where id = $id";
	
	$rs = mysqli_query($conn,$sql);
	
	if($row = mysqli_fetch_assoc($rs)){
		echo json_encode($row);
	}else{
		echo '0';
	}
	
?>