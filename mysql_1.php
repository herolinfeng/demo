<?php

echo "实例 (MySQLi - 面向对象)<br/>";
$server = "127.0.0.1";
$user = "root";
$pwd = "123456";

date_default_timezone_set("Asia/Shanghai");

echo date("y-M-d H:i:s", strtotime('now'));

// 创建连接
$conn = new mysqli($server, $user, $pwd);
// 检测连接
if ($conn->connect_error) {
    die("连接失败：" . $conn->connect_error);
}

echo "连接成功<br/>";

//获取查询结果集
$result = $conn->query("show databases");
var_dump($result);
//使用查询结果集
$rows = $result->fetch_all();
var_dump($rows);
// print_r (each($rows));
foreach ($rows as $row) {
    echo $row[0] . "<br />";
}
//释放查询结果集
$result->close();

// 关闭数据库
$conn->close();

echo "关闭连接<br/>";
