<?php
$dbhost = '172.18.0.1'; //数据库服务器,容器名称
$dbport = 3316; //端口
$dbname = 'test'; //数据库名称
$dbuser = 'root'; //用户名
$dbpass = '123456'; //密码

// 连接
try {
    $db = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$dbname, $dbuser, $dbpass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //设置错误模式
    $db->query('SET NAMES utf8;');
    echo 'The connection is successfu.';
} catch(PDOException $e) {
    var_dump($e);
    echo '{"result":"failed", "msg":"连接数据库失败！"}';
    exit;
}