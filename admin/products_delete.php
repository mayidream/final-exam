<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>删除页面</title>
</head>
<body>
<?php
require_once 'autoload.php';
$mysql=new Db('products');
$link=$mysql->link;
$pro_id=$_GET['pro_id'];
$sql="delete from products where pro_id='$pro_id'";
$res=mysqli_query($link,$sql);
if ($res){
    header('refresh:5;url=products_list.php');
    echo '产品删除成功，5秒后自动跳转到<a href="products_list.php" style="color: red;text-decoration: none">产品列表页<a/>';
}else{
    echo '产品删除失败，请重试';
}
?>
</body>
</html>