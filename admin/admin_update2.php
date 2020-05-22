<?php
session_start();
require_once 'autoload.php';
//var_dump($_SESSION);
//var_dump($_POST);
//exit();
$uname=$_POST['uname'];
$ad_id=$_GET['ad_id'];
$password=$_POST['password'];
$msql=new Db('admin');
$link=$msql->link;
$sql="select * from admin where ad_uname='$uname'";
$result=mysqli_query($link,$sql);
$results=mysqli_fetch_assoc($result);
if($results){
    $_SESSION['error']='此用户名已存在';
    header("location:admin_update.php?ad_id=$ad_id");
}else{
    $_SESSION['error']='';
    date_default_timezone_set("Asia/Shanghai");
    $update_time=time();
    $sql="update admin set ad_uname='$uname',ad_upass='$password',update_time='$update_time' where ad_id=$ad_id";
    if (mysqli_query($link,$sql)){
        header('refresh:5;url=index.php');
        echo '管理员信息更新成功，五秒后自动跳转至<a href="admin_list.php" style="text-decoration: none"><strong style="color: red;">管理员列表页</strong></a>';
    }else{
        echo '请关闭浏览器重试！';
    }
}


