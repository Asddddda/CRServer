<?php
//header('Content-type: application/json;charset=utf-8');
//if(empty($_FILES)) die('{"status":0,"msg":"错误提交"}');
//$dirPath = './image/';//设置文件保存的目录
//if(!is_dir($dirPath)){
//    //目录不存在则创建目录
//    @mkdir($dirPath);
//}
//$count = count($_FILES);//所有文件数
//if($count<1) die('{"status":0,"msg":"错误提交"}');//没有提交的文件
//$success = $failure = 0;
//foreach($_FILES as $key => $value){
//    //循环遍历数据
//    $tmp = $value['name'];//获取上传文件名
//    $tmpName = $value['tmp_name'];//临时文件路径
//    //上传的文件会被保存到php临时目录，调用函数将文件复制到指定目录
//    if(move_uploaded_file($tmpName,$dirPath.date('YmdHis').'_'.$tmp)){
//        $success++;
//    }else{
//        $failure++;
//    }
//}
//$arr['status'] = 1;
//$arr['msg']   = '提交成功';
//$arr['success'] = $success;
//$arr['failure'] = $failure;
//echo json_encode($arr);

//
//header('Content-type: application/json;charset=utf-8');
//$db = new mysqli("localhost:3308", "root", "123456", "zixidatabase");
//ini_set('always_populate_raw_post_data',-1);
//$HTTP_RAW_POST_DATA = file_get_contents('php://input');
//if(empty($HTTP_RAW_POST_DATA)) die('{"status":0,"msg":"错误提交"}');
//$result = json_decode($HTTP_RAW_POST_DATA,true);
//$lpphoto = $result['lpphoto'];
//$lpdesc = $result['lpdesc'];
//$lptime = $result['lptime'];
//$lpfname = $result['lpfname'];
//$uid = $result['uid'];
//$sql = 'insert into lostproperty values('.$lpphoto.','.$lpdesc.','.$lptime.','.$lpfname.','.$uid.')';
//if ($db->query($sql)) {
//    echo '{"status":1,"msg":"成功提交"}';
//} else {
//    echo '{"status":0,"msg":"数据错误"}';
//}



//echo json_encode($result);

//可行
//header('Content-type:application/x-www-form-urlencoded;charset=utf-8');
//echo $_POST['key'];
//require_once 'imgCompress.php';
//$source = './image/1.jpg';
//$dst_img = './image/10';
//$image = (new imgcompress($source))->compressImg($dst_img);

//header('Content-type: application/json;charset=utf-8');
//$db = new mysqli("localhost:3308", "root", "123456", "zixidatabase");
//$len = $db->query("select COUNT(*) from lostproperty;");
//$rownumval = $len->fetch_assoc();
//echo $rownumval['COUNT(*)'];
//header('Content-type: application/json;charset=utf-8');
//$db = new mysqli("localhost:3308", "root", "123456", "zixidatabase");
//$begin = '2020-09-07 00:00:00';
//$diff = time() - strtotime($begin) + 8*60*60;
//$week = floor($diff / (24 * 60 * 60 * 7))+1;
//$weekday = floor($diff % (24 * 60 * 60 * 7) / (24 * 60 * 60));
//$hour = ((time() + 8 * 60 * 60) % (24 * 60 * 60)) / 3600;
//if (6.5 <= $hour && $hour < 9.75) {
//    $section = 1;
//} elseif (9.75 <= $hour && $hour < 12.5) {
//    $section = 2;
//} elseif (12.5 <= $hour && $hour < 15.75) {
//    $section = 3;
//} elseif (15.75 <= $hour && $hour < 18.5) {
//    $section = 4;
//} elseif (18.5 <= $hour && $hour < 20.75) {
//    $section = 5;
//} elseif (20.75 <= $hour && $hour < 23.5) {
//    $section = 6;
//}else{
//    echo '再学等着猝死吧';
//}

//$url = "https://cyxbsmobile.redrock.team/234/newapi/roomEmpty?week=12&weekDayNum=6&buildNum=2&sectionNum=4";
//$stream_opts = [
//    "ssl" => [
//        "verify_peer"=>false,
//        "verify_peer_name"=>false,
//    ]
//];
//$response = file_get_contents($url,false, stream_context_create($stream_opts));
//$temp = json_decode($response,true);
//$result = $temp['data'];
//var_dump($result);
//$str = '(';
//for ($i = 0; $i < count($result); $i++) {
//    $str = $str .$result[$i];
//    if($i<count($result)-1) $str = $str . ',';
//}
//$str = $str . ')';
//$sql = 'SELECT `classroom`, `pnum` FROM `classroom` WHERE classroom IN '.$str.' order by pnum asc;';
//$res = $db->query($sql);
//if ($res) {
//    $a = 0;
//    echo '[';
//    while ($attr=mysqli_fetch_object($res)) {
//        $a++;
//        if ($a > 1) {
//            echo ',';
//        }
//        echo json_encode($attr,JSON_UNESCAPED_UNICODE);
//    }
//    echo ']';
//}
//
