<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>产品信息修改页面</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="./layui/layui.js"></script>
</head>
<body>
<?php
require_once 'autoload.php';
session_start();
$pro_id=@$_GET['pro_id'];
$mysql=new Db('products');
$link=$mysql->link;
$sql="select * from products where pro_id='$pro_id' ";
$result=mysqli_query($link,$sql);
$results=@mysqli_fetch_assoc($result);
?>

<form class="layui-form" method="post" style="margin: 20px 500px"  action="./products_update2.php?pro_id=<?php echo $pro_id ?>">
    <div class="layui-form-item">
        <label class="layui-form-label">产品标题：</label>
        <div class="layui-input-inline">
            <input type="text" value="<?php echo $results['pro_name'] ?>" name="pro_name" required lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red"><?php if ($_SESSION['error']){echo $_SESSION['error'];}else echo '*为必填项'?></font> </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">产品评分：</label>
        <div class="layui-input-inline">
            <input type="text" value="<?php echo $results['grade'] ?>" name="grade" required lay-verify="required" placeholder="请输入评分" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red"><?php if ($_SESSION['error']){echo $_SESSION['error'];}else echo '*为必填项'?></font> </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">产品简介：</label>
        <div class="layui-input-inline">
            <input type="text" value="<?php echo $results['pro_introduction'] ?>" name="pro_introduction" required lay-verify="required" placeholder="请输入产品描述" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red"><?php if ($_SESSION['error']){echo $_SESSION['error'];}else echo '*为必填项'?></font> </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">产品价格：</label>
        <div class="layui-input-inline">
            <input type="text" value="<?php echo $results['price'] ?>" name="price" required lay-verify="required" placeholder="请输入价格" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red"><?php if ($_SESSION['error']){echo $_SESSION['error'];}else echo '*为必填项'?></font> </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>

</form>
<script>
    //Demo
    layui.use('form', function(){
        var form = layui.form;


    });
</script>
</body>
</html>