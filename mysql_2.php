<?php

$server = '127.0.0.1';
$user = 'root';
$pwd = '123456';
$conn = new mysqli($server, $user, $pwd);

// var_dump($conn->connect_error);

var_dump($conn);

if (!$conn) {
    var_dump($conn);
}

// if($conn->connect_error) {
//     die("连接失败：" . $conn->connect_error);
// }

$test = 0;
if ($test == '') {
    echo '<br />' . $test . ' == ""'; //被输出
}
if ($test === '') {
    echo '<br />' . $test . ' === ""'; //不被输出
}
if ($test == null) {
    echo '<br />' . $test . ' == null'; //被输出
}
if ($test === null) {
    echo '<br />' . $test . ' === null'; //不被输出
}
if ($test == false) {
    echo '<br />' . $test . ' == false'; //被输出
}
if ($test === false) {
    echo '<br />' . $test . ' === false'; //不被输出
}
if (null == '') {
    echo '<br />null == ""';
}
if (false == '') {
    echo '<br />flase == ""';
}
