<?php
require_once 'autoload.php';
$user_id=$_GET['user_id'];
$mysql=new Db('shopping_cart');
$link=$mysql->link;
$sql="update  shopping_cart set buy=2  where user_id=$user_id";
$result=mysqli_query($link,$sql);
if ($result){
    header('refresh:5;url=shopn.php');
    echo '您已付款成功，三秒后跳转到<a href="shop.php" style="text-decoration: none;color: red">购物车页面</a>';
}else{
    echo '付款失败，请检查自己的账户余额';
}