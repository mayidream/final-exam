<?php
require_once 'autoload.php';
$pro_id=$_GET['pro_id'];
$pro_name=$_POST['pro_name'];
$grade=$_POST['grade'];
$pro_introduction=$_POST['pro_introduction'];
$price=$_POST['price'];
$update_time=time();
$mysql=new Db('products');
$link=$mysql->link;
$sql="update  products set pro_name='$pro_name',grade='$grade',pro_introduction='$pro_introduction',price='$price',update_time='$update_time' where pro_id='$pro_id'";
$result=mysqli_query($link,$sql);
if ($result){
    header('refresh:5;url=products_list.php');
    echo '产品修改成功，5秒后自动跳转到<a href="products_list.php" style="color: red;text-decoration: none">产品列表页</a>';
}