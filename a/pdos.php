<?php 
header("content-type:text/html;charset=utf8");
$pdo = new \PDO("mysql:host=127.0.0.1;dbname=lian","root","root");
$area = $_POST['area'];
$username = "哎呦喂";
$sql = "insert into userarea(`username`,`userarea`) value('$username','$area')";
if($pdo->exec($sql)){
	header("refresh:3;Url=show.php");
	print('添加成功,请稍等...<br>三秒后自动跳转到展示页面~~~');
}else{
	mysql_error();die;
}
?>