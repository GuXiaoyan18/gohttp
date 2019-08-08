<?php


set_time_limit(0);

$name = $_REQUEST['name'];
$pwd = $_REQUEST['pwd'];
$ch = curl_init();
$url = '192.168.64.166:8080/score/' . $name . '/' . $pwd;
$count = 0;

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //希望返回的内容作为变量储存而不是直接输出
curl_setopt($ch, CURLOPT_TIMEOUT, 500);

while(true){
    $count++;
    sleep(5);
    $output = curl_exec($ch);
    if($output){
        curl_close($ch);
        echo $output;
        exit();
    }


    if($count == $_REQUEST['time']){
        exit();
    }
}

