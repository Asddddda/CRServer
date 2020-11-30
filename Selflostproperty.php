<?php
//从数据库搜索数据
header('Content-type: application/json;charset=utf-8');
$db = new mysqli("localhost:3308", "root", "123456", "zixidatabase");
$temp0 = array_keys($_GET);
$temp1 = array_values($_GET);
$key = $temp0[0];
$value = $temp1[0];
$sql = "select * from lostproperty where ".$key.'="' . $value . '" order by lptime desc;';
$result = $db->query($sql);
$count = $db->query( "select COUNT(*) from lostproperty where ".$key.'="' . $value . '" order by lptime desc;');
$len = $count->fetch_assoc();
if ($result) {
    $a = 0;
    echo '[{"len": ';
    echo '"' . $len['COUNT(*)'] . '"},';
    while ($attr=mysqli_fetch_object($result)) {
        $a++;
        if ($a > 1) {
            echo ',';
        }
        echo json_encode($attr,JSON_UNESCAPED_UNICODE);
    }
    echo ']';
}