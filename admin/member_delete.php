<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>会员删除</title>
</head>
<body>
<?php require_once 'autoload.php';
$user_id=@$_GET['user_id'];
$mysql=new Db('user');
$link=$mysql->link;
$sql="SELECT * from user WHERE user_id=$user_id";
$result=mysqli_query($link,$sql);

if ($results=mysqli_fetch_assoc($result)){
    $sql="delete from user where user_id=$user_id";
    if ($result=mysqli_query($link,$sql)){
        header('refresh:5;url=index.php');
        echo '用户删除成功，五秒后自动跳转至<a href="member_list.php" style="text-decoration: none"><strong style="color: red;">用户列表页</strong></a>';
    }

}
?>
</body>
</html>