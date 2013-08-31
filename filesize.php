<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>读取文件大小</title>
</head>
<body>
	
</body>
</html>
<?php 
$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
$filename=$DOCUMENT_ROOT.'/sublimetext/2013/08/31/file_php_mysql/order.txt';
@$fp=fopen($filename, 'rb');
echo nl2br(fread($fp, filesize($filename)));	//使用filesize确定文件大小字节，配合fread读取文件内容nl2br将文件中的\n转化为html标签<br />
fclose($fp);
 ?>