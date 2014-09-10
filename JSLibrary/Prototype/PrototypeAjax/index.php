<?php 
/**
 * 参考：Prototype & AJAX教程 -> http://www.yiibai.com/prototype/prototype_ajax_tutorial.html
 */
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prototype Ajax测试</title>
<script src="http://prototypejs.org/assets/2008/9/29/prototype-1.6.0.3.js"></script>
<script>
function doit() {
  new Ajax.Request('/ajaxhandler.php',
  {
    method:'get',
	onSuccess: function(transport){
	  var response = transport.responseText || "无响应内容";
      alert("Ajax请求成功! \n\n" + response);
    },
    onFailure: function(){ 
      alert('Ajax请求失败') 
    }
  });
}
function doit2() {
	  new Ajax.Request('/ajaxhandler2.php',
	  {
	    method:'get',
	    parameters:{name:"威哥"},
		onSuccess: function(transport){
		  var response = transport.responseText || "无响应内容";
	      alert("Ajax请求成功! \n\n" + response);
	    },
	    onFailure: function(){ 
	      alert('Ajax请求失败') 
	    }
	  });
	}
</script>
</head>

<body>

<input onClick="JavaScript:doit2();" type="button" value="点击执行Ajax">
</body>
</html>
