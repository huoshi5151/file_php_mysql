<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>订单提交</title>
</head>
<body>
	<form action="getorder.php" method="post">
		<table border="0">
			<tr align="right">
				<td>商品名称</td>
				<td>数量</td>
			</tr>
			<tr>
				<td>汽油</td>
				<td><input type="text" name="qiyou" /></td>
			</tr>
			<tr>
				<td>轮胎</td>
				<td><input type="text" name="luntai" /></td>
			</tr>
			<tr>
				<td>轴承</td>
				<td><input type="text" name="zhoucheng"/></td>
			</tr>
			<tr>
				<td>地址</td>
				<td><input type="text" name="address" /></td>
			</tr>
		</table>
		<input type="submit" value="提交订单" />
	</form>
</body>
</html>
<?php 

 ?>