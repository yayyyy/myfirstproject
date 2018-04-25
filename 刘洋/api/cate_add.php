<?php
	include('./conn.php');
//  连接数据库
//	接收数据
	$name = $_POST['name'];	
	$state = $_POST['state'];
	$parentid = $_POST['parentid'];
	
//	计算level级别
	if($parentid ==0){
		$level = 1;
	}else{
		$sql = "select level from category where id = $parentid";
		$rs = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($rs);
		$level = $row['level']+1;
	}
	
//	构造SQL语句 insert into 插入数据到数据库
	$sql = "insert into category(name,state,parentid,level) values('$name',$state,$parentid,$level)";
//	返回执行结果
	$r = mysqli_query($conn,$sql);
	if($r){
		echo '{"errcode": 0,"msg":"添加成功"}';
	}else{
		echo '{"errcode": 1007,"msg":"添加失败"}';
	}
?>