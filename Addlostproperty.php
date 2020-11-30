<?php
//向数据库添加数据
header('Content-type: application/json;charset=utf-8');
$db = new mysqli("localhost:3308", "root", "123456", "zixidatabase");
ini_set('always_populate_raw_post_data',-1);
$HTTP_RAW_POST_DATA = file_get_contents('php://input');
if(empty($HTTP_RAW_POST_DATA)) die('{"msg":"错误提交"}');
$result = json_decode($HTTP_RAW_POST_DATA,true);
$lpphoto = $result['lpphoto'];
$address = $result['address'];
if (strcmp($address,'') == 0) die('{"msg":"ADDRESS错误提交"}');
$lpdesc = $result['lpdesc'];
$lptime = $result['lptime'];
$lpfname = $result['lpfname'];
$uid = $result['uid'];
$sql = 'insert into lostproperty values("'.$lpphoto.'","'.$address.'","'.$lpdesc.'","'.$lptime.'","'.$lpfname.'",'.$uid.');';
if ($db->query($sql)) {
    echo '"msg2":"数据成功提交"}';
} else {
    echo '{"msg":"数据提交错误"}';
}

