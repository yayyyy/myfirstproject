<?php
	require('./conn.php');
	
//	1.定义一页显示的条数
	$pagesize = 2;
//  获取到当前在第几页上？
	$page=isset($_GET["page"]) ? $_GET["page"] : 1; //设置默认值为第1页
//  计算出一共有多少条数据？
//	查询总条数
	$sql = "select * from goods";
//	结果集
	$rs = mysqli_query($conn,$sql);
//	总的条数
	$record = mysqli_num_rows($rs);
//  2.计算出当前页应当显示哪些数据
	$start = ( $page-1) * $pagesize;
//	构造sql语句
//	跨表查询goods里面的所有和category里面的name作为catename来自两张表 条件是goods的cate_id的属性和category的id相等
	$sql = "select goods.*,category.name as catename from goods,category where goods.cate_id = category.id limit $start,$pagesize";
	$rs = mysqli_query($conn,$sql);
	
	
	
	$data = [];
//	数据返还给客户端
	while($row = mysqli_fetch_assoc($rs)){
		array_push($data,$row);
	}
//	echo $row;
//	exit;
//  3.计算出总页数
//	总条数除以每页显示的条数
	$pagecount = ceil( $record / $pagesize);
//	返还给客户端
	array_push($data,$pagecount);
	echo json_encode($data);
	
?>