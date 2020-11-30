<?php
//从数据库删除数据
header('Content-type:application/x-www-form-urlencoded;charset=utf-8');
$db = new mysqli("localhost:3308", "root", "123456", "zixidatabase");
$dir = './LostImage/';
$temp = $_GET['lpphoto'];
$sql = 'delete from lostproperty where lpphoto = ' .'"'.$temp.'";';
$result = $db->query($sql);
if ($result) {
    $filepath = $dir . $temp;
    unlink($filepath);
    echo '{"msg":"删除成功"}';
} else {
    echo '{"msg":"删除失败"}';
}