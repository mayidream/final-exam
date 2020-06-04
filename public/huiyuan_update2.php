<?php
require_once 'autoload.php';
if ($_POST['submit']=='保存修改'){
$mysql=new Db('user');
$link=$mysql->link;
$user_id=$_GET['user_id'];
$password=$_POST['password'];
$telphone=$_POST['telphone'];
$address=$_POST['address'];
$update_time=time();
$uname=$_POST['uname'];
$sex=$_POST['sex'];
$email=$_POST['email'];

$sql="update  user set uname='$uname',sex='$sex',email='$email',telphone='$telphone',upass='$password',address='$address',update_time='$update_time' where user_id=$user_id";
$result=mysqli_query($link,$sql);
if ($result){
    header('refresh:3;url=huiyuan.php');
    echo '用户信息更新成功，三秒后自动跳转到<a href="huiyuan.php">会员页面</a>';
}else{
    echo '用户信息更新失败';
}
}else{
    header('location:grxx.php');
}
