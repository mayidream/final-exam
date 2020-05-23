<?php
require_once 'autoload.php';
$user_id=$_GET['user_id'];
$pro_id=$_GET['pro_id'];
$mysql=new Db('shopping_cart');
$link=$mysql->link;
$sql="delete from shopping_cart where user_id='$user_id' and pro_id='$pro_id' ";
$result=mysqli_query($link,$sql);
if ($result){
    header('refresh:5;url=shop.php');
    echo '商品已成功从购物车删除,三秒后自动跳转到<a href="shop.php" style="color: red;text-decoration: none">购物车</a>';
}