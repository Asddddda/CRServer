<?php
//上传图片
header('Content-type: application/json;charset=utf-8');
if(empty($_FILES)) die('{"msg1":"没有图片",');
require_once 'imgCompress.php';
$dirPath = './LostImage/';//设置文件保存的目录
foreach($_FILES as $key => $value) {
    //循环遍历数据
    $tmp = $value['name'];//获取上传文件名
    $tmpName = $value['tmp_name'];//临时文件路径
    //上传的文件会被保存到php临时目录，调用函数将文件复制到指定目录
    $image = (new imgcompress($tmpName))->compressImg($dirPath . $tmp);
    if (!$image) {
        echo '{"msg1":"图片上传成功",';
    } else {
        echo '{"msg1":"图片上传失败",';
    }
}



////if(!is_dir($dirPath)){
////    //目录不存在则创建目录
////    @mkdir($dirPath);
////}
////$count = count($_FILES);//所有文件数
////if($count<1) die('{"msg":"图片上传错误"}');//没有提交的文件
////$success = $failure = 0;
//foreach($_FILES as $key => $value){
//    //循环遍历数据
//    $tmp = $value['name'];//获取上传文件名
//    $tmpName = $value['tmp_name'];//临时文件路径
    //上传的文件会被保存到php临时目录，调用函数将文件复制到指定目录
//    if(move_uploaded_file($tmpName,$dirPath.$tmp)){
////        $success++;
//        echo '{"msg1":"图片上传成功",';
//    }else{
////        $failure++;
//        echo '{"msg1":"图片上传失败",';
//    }
//}
