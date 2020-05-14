<?php
session_start();
require_once 'autoload.php';

if (@$_POST['submit']=='登录'){
    //验证验证码
    if ($_POST['username']==''){
        $_SESSION['error']='用户名不能为空';
        header('location:login.php');
        exit();
    }
    if ($_POST['password']==''){
        $_SESSION['error']='密码不能为空';
        header('location:login.php');
        exit();
    }
    if ($_POST['verify']==''){
        $_SESSION['error']='验证码不能为空';
        header('location:login.php');
        exit();
    }
    if (strtoupper($_SESSION['code'])!=strtoupper($_POST['verify'])){
        $_SESSION['error']='验证码错误';
        header('location:login.php');
        exit();
    }

    $username=$_POST['username'];
    $password=$_POST['password'];
    //创建数据库对象
    $mysql = new Db('user');
    $link= $mysql->link;
    $sql="select * from user where uname='$username' and upass='$password' ";
    $result=mysqli_query($link,$sql);
    $results=mysqli_fetch_assoc($result);
    //判断用户输入的密码和账号是否一致
    if ($results['uname']==$username && $results['upass']==$password){

            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
            $_SESSION['error']='';
            header('location:shouye.php');
    }else{
        $_SESSION['error']='用户名或密码错误';
        header('location:login.php');
    }
}else{
    header('location:login.php');
}
