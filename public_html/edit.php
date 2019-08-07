<?php

$ch = curl_init();
$data = $_POST['json'];
$json = json_encode($data);

$url = '192.168.64.166:8080/edit/' . $data['Name'] . '/' . $data['Pwd'];

//var_dump($data);

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //希望返回的内容作为变量储存而不是直接输出
curl_setopt($ch, CURLOPT_TIMEOUT, 500);

curl_setopt($ch, CURLOPT_POST, 1);//POST方式发送请求.
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

$output = curl_exec($ch);
curl_close($ch);

echo $output;


