<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>文件是否存在</title>
</head>
<body>
	
</body>
</html>
<?php 
/**
 * 判断文件是否存在file_exists()
 */

$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
if (file_exists($DOCUMENT_ROOT.'/sublimetext/2013/08/31/file_php_mysql/order.txt')) {
	echo '文件已存在';
}else{
	echo '文件不存在';
}
 ?>