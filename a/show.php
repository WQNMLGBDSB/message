<?php 
header("content-type:text/html;charset=utf8");
$pdo = new \PDO("mysql:host=127.0.0.1;dbname=lian","root","root");
$sql = "select * from userarea";
$res = $pdo->query($sql)->fetchAll();
foreach ($res as $key => $value) {
	$data[$key]['id'] = $res[$key]['id'];
	$data[$key]['username'] = $res[$key]['username'];
	$data[$key]['userarea'] = $res[$key]['userarea'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>展示</title>
</head>
<body>
    <table border="1" align="center">
			<tr>
				<td>ID</td>
				<td>作者</td>
				<td>留言内容</td>
			</tr>
		<?php foreach ($data as $value) {?>
			<tr>
				<td><?php echo $value['id']?></td>
				<td><?php echo $value['username']?></td>
				<td><?php echo $value['userarea']?></td>
			</tr>
		<?php }?>
	</table>
</body>
</html>