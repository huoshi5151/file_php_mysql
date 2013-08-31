<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>订单处理页面</title>
</head>
<body>
	
</body>
</html>
<?php 

// print_r($_POST);
$good['qiyou']=$_POST['qiyou'];
$good['luntai']=$_POST['luntai'];
$good['zhoucheng']=$_POST['zhoucheng'];
$good['address']=$_POST['address'];
$date=date('Y-m-d H:i:s');
$DOCUMENT_ROOT=$_SERVER{'DOCUMENT_ROOT'};
// print_r($good);

$total=$good['qiyou']+$good['luntai']+$good['zhoucheng'];

define(QIYOU, 50);
define(LUNTAI, 200);
define(ZHOUCHENG, 100);

$totalamount=$good['qiyou']*QIYOU+
			$good['luntai']*LUNTAI+
			$good['zhouccheng']*ZHOUCHENG;

@$fp=fopen("$DOCUMENT_ROOT/sublimetext/2013/08/31/file_php_mysql/order.txt", 'ab');
if (!$fp) {
	echo '打开文件失败，请稍后再试';
	exit;
}
//这里为了避免一个文件被同时打开
flock($fp, LOCK_EX);
$str=$date."\t 汽油：".$good['qiyou']."\t 轮胎：".$good['luntai']."\t 轴承：".$good['zhoucheng']."\t 地址：".$good['address']."\n";
fwrite($fp, $str);
// 写完之后释放锁定文件
flock($fp, LOCK_UN);
// 关闭文件
fclose($fp);
echo '您的商品为汽油：'.$good['qiyou']."\t 轮胎：".$good['luntai']."\t 轴承：".$good['zhoucheng']."<br/>";
echo '总计消费：'.$totalamount.'元<br/>';

echo '订单已写入';
 ?>