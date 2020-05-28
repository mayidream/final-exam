<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加产品</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="./layui/layui.js"></script>
</head>
<body>
<?php
session_start();
?>
<form class="layui-form" method="post" style="margin: 20px 500px"  action="products_add2.php" enctype="multipart/form-data">
    <div class="layui-form-item">
        <label class="layui-form-label">产品标题：</label>
        <div class="layui-input-inline">
            <input type="text"  name="pro_name" required lay-verify="required" placeholder="请输入产品标题" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red">*为必填项'</font> </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">评分：</label>
        <div class="layui-input-inline">
            <input type="text"  name="grade" required lay-verify="required" placeholder="请输入评分" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red">*为必填项'</font></div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">产品描述：</label>
        <div class="layui-input-inline">
            <input type="text"  name="pro_introduction" required lay-verify="required" placeholder="请输入产品描述" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red"> *为必填项</font></div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">价格：</label>
        <div class="layui-input-inline">
            <input type="text"  name="price" required lay-verify="required" placeholder="请输入价格" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red"> *为必填项</font></div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">宝贝主图：</label>
        <div class="layui-input-inline">
            <input style="margin-top: 5px" type="file"  name="images" required lay-verify="required" >

        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red"> <?php if ($_SESSION['error']){echo $_SESSION['error'];}else{echo '*为必填项';} ?></font></div>
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