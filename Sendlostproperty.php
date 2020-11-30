<?php
//将数据发送给移动端
header('Content-type: application/json;charset=utf-8');
$db = new mysqli("localhost:3308", "root", "123456", "zixidatabase");
$count = $db->query("select COUNT(*) from lostproperty;");
$result = $db->query("select * from lostproperty order by lptime desc;");
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

