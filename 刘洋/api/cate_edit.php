<?php

	require('./conn.php');

	$id = $_GET['id'];
	
	$sql = "select id,name,parentid,state from category where id =$id";
	
	$rs = mysqli_query($conn,$sql);
	
	if($row = mysqli_fetch_assoc($rs)){
		$row['parentname'] = '顶级分类';
		echo json_encode($row);
	}else{
		echo '{"errcode": 1010,"msg":"显示失败"}';
	}
	
?>