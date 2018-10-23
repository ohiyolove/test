<?php 
	// 准备一个数组 用来保存 多个用户名
	$userArr = array("chd","hi","ddj","jyj");

	// 获取 提交过来的 用户名
	$postName = $_POST['name'];

	// 判断 是否存在于数组中
	/*
		参数1: 查询的内容
		参数2 数组
	*/
	$isIn = in_array($postName,$userArr);
	if($isIn){
		echo "登录成功";
	}else{
		echo "请先注册";
	}

  
 ?>