<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员删除</title>
</head>
<body>
<?php require_once 'autoload.php';
$ad_id=@$_GET['ad_id'];
$mysql=new Db('admin');
$link=$mysql->link;
$sql="SELECT * from admin WHERE ad_id=$ad_id";
$result=mysqli_query($link,$sql);

if ($results=mysqli_fetch_assoc($result)){
    $sql="delete from admin where ad_id=$ad_id";
    if ($result=mysqli_query($link,$sql)){
        header('refresh:5;url=index.php');
        echo '管理员删除成功，五秒后自动跳转至<a href="admin_list.php" style="text-decoration: none"><strong style="color: red;">管理员列表页</strong></a>';
    }

}
?>
</body>
</html>