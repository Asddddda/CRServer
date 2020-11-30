<?php
//发送教室信息
header('Content-type: application/json;charset=utf-8');
$db = new mysqli("localhost:3308", "root", "123456", "zixidatabase");
$begin = '2020-09-07 00:00:00';//学期开始时间
$diff = time() - strtotime($begin) + 8*60*60;
$week = floor($diff / (24 * 60 * 60 * 7))+1;
$weekday = floor($diff % (24 * 60 * 60 * 7) / (24 * 60 * 60)) + 1;
$hour = ((time() + 8 * 60 * 60) % (24 * 60 * 60)) / 3600;
if (5.5 <= $hour && $hour < 9.75) {
    $section = 0;
} elseif (9.75 <= $hour && $hour < 12.5) {
    $section = 1;
} elseif (12.5 <= $hour && $hour < 15.75) {
    $section = 2;
} elseif (15.75 <= $hour && $hour < 18.5) {
    $section = 3;
} elseif (18.5 <= $hour && $hour < 20.75) {
    $section = 4;
} elseif (20.75 <= $hour && $hour < 23.5) {
    $section = 5;
}else{
    die('休息一下吧...');
}
$buildNum = $_GET['buildNum'];
$url = "https://cyxbsmobile.redrock.team/234/newapi/roomEmpty?week=$week&weekDayNum=$weekday&buildNum=$buildNum&sectionNum=$section";
$stream_opts = [
    "ssl" => [
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ]
];
$response = file_get_contents($url,false, stream_context_create($stream_opts));
$temp = json_decode($response,true);
$result = $temp['data'];
$str = '(';
for ($i = 0; $i < count($result); $i++) {
    $str = $str .$result[$i];
    if($i<count($result)-1) $str = $str . ',';
}
$str = $str . ')';
$sql = 'SELECT `classroom`, `pnum` FROM `classroom` WHERE classroom IN '.$str.' order by pnum ASC;';
$res = $db->query($sql);
$count = $db->query('SELECT COUNT(*) FROM `classroom` WHERE classroom IN '.$str.';');
$len = $count->fetch_assoc();
if ($res) {
    $a = 0;
    echo '[{"len": ';
    echo '"' . $len['COUNT(*)'] . '"},';
    while ($attr=mysqli_fetch_object($res)) {
        $a++;
        if ($a > 1) {
            echo ',';
        }
        echo json_encode($attr,JSON_UNESCAPED_UNICODE);
    }
    echo ']';
}