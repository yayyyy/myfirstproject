function createXHR () {
    var xhrObj;
    //判断浏览器是否支持XMLHttpRequest对象
    if(window.XMLHttpRequest)
    {
        xhrObj=new XMLHttpRequest(); //采用W3C的标准方式创建AJAX请求对象
    }
    else
    {
        //低版本的IE，尝试不同的IE版本来创建

        //数组存储低版本支持的方式
        var versions=["Microsoft.XMLHTTP","Msxml2.XMLHTTP","Msxml2.XMLHTTP.3.0","Msxml2.XMLHTTP.5.0","Msxml2.XMLHTTP.6.0"];

        //循环数组去依次尝试
        for (var i = 0; i < versions.length; i++) {
            try{
                xhrObj=new ActiveXObject(versions[i]); //如果不报错，说明创建成功，中断循环
                break;
            }
            catch(err)
            {
                console.error(err.message);
            }
        }
    }
    return xhrObj;
}
