<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>

<?php 
$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
@$fp=fopen($DOCUMENT_ROOT.'/sublimetext/2013/08/31/file_php_mysql/order.txt', 'rb');
if (!$fp) {
	echo '打开文件失败';
	exit;
}
flock($fp, LOCK_EX);
while (!feof($fp)) {
	$chars=fgetc($fp);
	if (!feof($fp)) {
		echo ($chars=="\n" ? "<br />" : $chars);
	}
}

flock($fp, LOCK_UN);
fclose($fp);
 ?>