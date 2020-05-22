<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员注册提示信息页面</title>
</head>
<body>
<?php
require_once 'autoload.php';
$ad_uname=$_POST['uname'];
$ad_pass=$_POST['password'];
$ad_repass=$_POST['repassword'];
$type=$_POST['type'];

if (isset($ad_uname) && isset($ad_pass) && isset($type)){
    if ($ad_pass==$ad_repass){


    $mysql=new  Db('admin');
    $link=$mysql->link;
    $sql="SELECT * FROM admin where ad_uname='$ad_uname'";
    $result=mysqli_query($link,$sql);
    $results=mysqli_fetch_assoc($result);
    if ($results){
        $_SESSION['error']='该用户名已存在';
        header('location:admin_insert.php');
    }else{
        date_default_timezone_set("Asia/Shanghai");
        $create_time=time();
        $sql="INSERT INTO admin(ad_id,ad_uname,ad_upass,create_time,update_time,type) VALUE(null,'$ad_uname','$ad_pass','$create_time',null,'$type')";
        $result=mysqli_query($link,$sql);
        if ($result){
            header('refresh:5;url=index.php');
            echo '管理员信息添加成功，五秒后自动跳转至<a href="admin_list.php" style="text-decoration: none"><strong style="color: red;">管理员列表页</strong></a>';
        }else{
            echo '插入失败';
        }
    }
    }else{
        $_SESSION['error']='两次输入的密码不一致';
        header('location:admin_insert.php');
    }
}

?>
</body>
</html>