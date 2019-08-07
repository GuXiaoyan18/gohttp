<?php
$ch = curl_init();
$name = $_POST['name'];
$pwd = md5($_POST['pwd']); //密码以md5形式存储
$url = '192.168.64.166:8080/register/' . $name . '/' . $pwd;

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //希望返回的内容作为变量储存而不是直接输出
curl_setopt($ch, CURLOPT_TIMEOUT, 500);

curl_setopt($ch, CURLOPT_POST, 1);//POST方式发送请求.

$output = curl_exec($ch);

curl_close($ch);

echo $output;
