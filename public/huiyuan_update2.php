<?php
require_once 'autoload.php';
$mysql=new Db('user');
$link=$mysql->link;
$user_id=$_GET['user_id'];
$upass=$_POST['upass'];
$telphone=$_POST['telphone'];
$address=$_POST['address'];
$update_time=time();
$sql="update  user set telphone='$telphone',upass='$upass',address='$address',update_time='$update_time' where user_id=$user_id";
$result=mysqli_query($link,$sql);
if ($result){
    header('refresh:3;url=huiyuan.php');
    echo '用户信息更新成功，三秒后自动跳转到<a href="huiyuan.php">会员页面</a>';
}else{
    echo '用户信息更新失败';
}