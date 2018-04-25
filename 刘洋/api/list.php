<?php
	include('./conn.php');
//	构造sql语句
	$sql = "select * from admin";
	$rs = mysqli_query($conn,$sql);
//	定义一个空数组
	$data = [];
//	一条一条去读取
	while($row = mysqli_fetch_assoc($rs)){
//		向数组中添加数据
		$data[]=$row;
//		array_push($data,$row);
	}
//	以json的格式输出
	echo json_encode($data);
	
?>