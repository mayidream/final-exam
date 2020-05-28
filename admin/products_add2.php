<?php
require_once 'autoload.php';
session_start();
$name=$_FILES['images']['name'];
$extension=pathinfo($name);
if ($extension['extension']=='jpg' ||$extension['extension']=='jpeg' ||$extension['extension']=='png'){
    $pro_name=$_POST['pro_name'];
    $grade=$_POST['grade'];
    $pro_introduction=$_POST['pro_introduction'];
    $price=$_POST['price'];
    $create_time=time();
    $_SESSION['error']='';
    $new_name=mt_rand(1,100).time();
    $res=move_uploaded_file($_FILES['images']['tmp_name'],'./images/'.$new_name.'.'.$extension['extension']);
    $pro_path='./images/'.$new_name.'.'.$extension['extension'];
    $mysql=new Db('products');
    $link=$mysql->link;
    $sql="insert into products(pro_id,pro_name,pro_path,grade,pro_introduction,price,create_time,update_time) value (null,'$pro_name','$pro_path','$grade','$pro_introduction','$price','$create_time',null )";
    $res=mysqli_query($link,$sql);
    if ($res){
        header('refresh:5;url=products_list.php');
        echo '产品添加成功，三秒后自动跳转到<a href="products_list.php">产品列表页</a>';
    }else{
        echo '插入失败';
    }
}else{
    $_SESSION['error']='上传的不是图片,请上传图片';
    header('location:products_add.php');

}