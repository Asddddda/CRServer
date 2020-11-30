<?php
//更新数据库人数
header('Content-type: application/json;charset=utf-8');
$db = new mysqli("localhost:3308", "root", "123456", "zixidatabase");
$json = file_get_contents('people_number_for_pictures.json');
$data = json_decode($json,true);
foreach ($data as $key => $value) {
    $sql = 'update classroom set pnum='.'"'.$value.'"'.'where classroom='.'"'.$key.'";';
    $res = $db->query($sql);
    if (!$res) die('更新发生错误');
}
echo '更新完毕';
