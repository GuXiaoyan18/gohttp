<?php
$ch = curl_init();
$name = $_REQUEST['name'];
$pwd = md5($_REQUEST['pwd']);
$url = '192.168.64.166:8080/login/' . $name . '/' . $pwd;

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //希望返回的内容作为变量储存而不是直接输出
curl_setopt($ch, CURLOPT_TIMEOUT, 500);

$output = curl_exec($ch);
curl_close($ch);

echo $output;


//header('Content-Type:text/json;charset=utf-8');
//$str = array(
//    );
//
//$jsonencode = json_encode($str);
//echo $jsonencode;
