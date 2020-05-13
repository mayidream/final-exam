<?php
require_once './autoload.php';
session_start();

//var_dump($_POST);
//var_dump($_SESSION);
if (@$_POST['submit']=='登录'){
    if($_SESSION['_token']==$_POST['_token']) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $mysql = new Db('admin');
        $link= $mysql->link;
        $sql="select * from admin where ad_uname='$username' and ad_upass='$password' ";
        $result=mysqli_query($link,$sql);
        $results=mysqli_fetch_assoc($result);
       if ($results['ad_uname']==$username && $results['ad_upass']==$password){

           $_SESSION['username']=$username;
           $_SESSION['pass']=$password;
           $_SESSION['error']='';
           header('location:index.php');
       }else{
           $_SESSION['error']='用户名或密码错误';
           header('location:login.php');
       }

    }
}else{
    header('location:login.php');
}