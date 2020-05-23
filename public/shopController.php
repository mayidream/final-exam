<?php
require_once 'autoload.php';
session_start();
$pro_id=$_GET['pro_id'];
$username=$_SESSION['username'];
$user=new Db('user');
$link=$user->link;
$user_sql="select * from user where uname='$username'";
$user_result=mysqli_query($link,$user_sql);
$user_results=mysqli_fetch_assoc($user_result);
$user_id=$user_results['user_id'];
$shopping_cart=new Db('shopping_cart');
$shopping_cart_sql="insert into shopping_cart(id,pro_id,user_id,buy) value (null,'$pro_id','$user_id',1)";
$shopping_cart_result=mysqli_query($link,$shopping_cart_sql);
if ($shopping_cart_result){
    header('refresh:5;url=details.php');
    echo '加入购物车成功,三秒后自动跳转到<a href="details.php" style="color: red;text-decoration: none">产品详情页</a>';
}else{
    echo '加入购物车失败，请检查数据库';
}