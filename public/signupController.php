<?php
session_start();
//var_dump($_SESSION);
//var_dump($_POST);
//exit();
require_once 'autoload.php';
if (@$_POST['submit']=='注册') {

    if ($_SESSION['_token'] == $_POST['_token']) {


        if ($_POST['username'] == '') {
            $_SESSION['error'] = '用户名不能为空';
            header('location:sign_up.php');
            exit();
        }
        if ($_POST['tel'] == '') {
            $_SESSION['error'] = '手机号不能为空';
            header('location: sign_up.php');
            exit();
        }
        if ($_POST['password'] == '') {
            $_SESSION['error'] = '密码不能为空';
            header('location:sign_up.php');
            exit();
        }
        if ($_POST['verify'] == '') {
            $_SESSION['error'] = '验证码不能为空';
            header('location:sign_up.php');
            exit();
        }
        if (strtoupper($_SESSION['code']) !== strtoupper($_POST['verify'])) {
            $_SESSION['error'] = '验证码错误';
            header('location:sign_up.php');
            exit();
        }
        $username = $_POST['username'];
        $password = $_POST['password'];
        $telphone = $_POST['tel'];
        $create_time = time();
        //连接数据库**
        $mysql = new Db('user');
        $link = $mysql->link;
        $selectsql = "select * from user where  uname='$username'";
        $select_result = mysqli_query($link, $selectsql);
        $select_results = mysqli_fetch_array($select_result);
        if ($select_results) {
            $_SESSION['error'] = '该用户名已存在';
            header('location:sign_up.php');
            exit();
        } else {


            $sql = "INSERT INTO `user` (`user_id`, `uname`, `telphone`, `upass`, `create_time`, `update_time`) VALUES (NULL, '$username', '$telphone', '$password', '$create_time', NULL );";
            $result = mysqli_query($link, $sql);
            if ($result == true) {
                $url = 'sign_in.php';
                skip($url, '注册成功');
            } else {
               var_dump($result);
            }

        }
    }else{
                header('location:sign_up.php');
            }

}else{
    header('location:sign_up.php');
}

function skip($url,$message){
    $html=<<<A
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="3;URL={$url}" />
<title>正在跳转中...</title>
<style>
a{
text-decoration: none;
color: red;
}
</style>
</head>
<body>
<div class="notice"><span>{$message}</span><a href="{$url}">，三秒后自动跳转！</a> </div>
</body>
</html>
A;
    echo  $html;

}
