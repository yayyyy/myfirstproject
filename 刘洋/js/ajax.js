;(function(){
	window.ajax= function(option){
//		定义默认方式为get方式
		option.type = option.type || 'get';
//		定义默认数据json格式
		option.datatype = option.datatype || 'json';
//			发起ajax请求
		var ajax = new XMLHttpRequest();
//			请求的方式
		ajax.open(option.type,option.url);
		
		
		if(option.type==='post'){
//			设置请求头
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
//			发送数据
			ajax.send(option.data);
		}else{
			ajax.send();
		}

//			监听状态
		ajax.onreadystatechange=function(){
//			判断状态
			if(ajax.readyState == 4 && ajax.status == 200){
				
				var data = ajax.responseText;
				
				if(option.datatype === 'json'){
					data=JSON.parse(data);
				}
//				console.log(data);
//				回调函数在返回完数据之后再执行
				option.success(data);
				
			}
		}
		
	}
})();




//;(function(){
//	
//	window.ajax = function(){
//		
//	}
//	
//})();
