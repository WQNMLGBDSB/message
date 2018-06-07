<?php 
header("content-type:text/html;charset=utf8");
mysql_connect('127.0.0.1','root','root');
mysql_query("set names utf8");
mysql_select_db("lian");
$area = $_POST['area'];
$username = "哎呦喂"; 
$sql = "insert into userarea(`username`,`userarea`) value('$username','$area')";
if(mysql_query($sql)){
	echo "添加成功";
}else{
	mysql_error();
}
?>