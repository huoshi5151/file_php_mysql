<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>订单读取页面</title>
</head>
<body>
	
</body>
</html>
<?php 
$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
	@$fp=fopen($DOCUMENT_ROOT.'/sublimetext/2013/08/31/file_php_mysql/order.txt', 'rb');
if (!$fp) {
	echo '打开文件失败，请稍后重试';
	exit;
}
while (!feof($fp)) {	//feof()当到文件结尾返回1（true）
	$order=fgets($fp,999);	//第二个参数999是限制读取的最大字节这里是998b
	echo $order.'<br />';
}
 ?>