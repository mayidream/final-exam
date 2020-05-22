<?php
session_start();
require_once 'autoload.php';
//var_dump($_SESSION);
//var_dump($_POST);
//exit();
$uname=$_POST['uname'];
$user_id=$_GET['user_id'];
$password=$_POST['password'];
$telphone=$_POST['telphone'];
$msql=new Db('user');
$link=$msql->link;
$sql="select * from user where uname='$uname'";
$result=mysqli_query($link,$sql);
$results=mysqli_fetch_assoc($result);
if($results){
    $_SESSION['error']='此用户名已存在';
    header('location:member_update.php');
}else{
    $_SESSION['error']='';
    date_default_timezone_set("Asia/Shanghai");
    $update_time=time();
    $sql="update user set uname='$uname',upass='$password',telphone='$telphone',update_time='$update_time' where user_id=$user_id";
    if (mysqli_query($link,$sql)){
        header('refresh:5;url=index.php');
        echo '用户更新成功，五秒后自动跳转至<a href="member_list.php" style="text-decoration: none"><strong style="color: red;">用户列表页</strong></a>';
    }else{
        echo '数据插入失败';
    }
}


