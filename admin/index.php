<?php
session_start();
if (!$_SESSION['username']){
    header('location:login.php');
}
require_once 'autoload.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>悠游网后台管理</title>
<!--    layui样式-->
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="./layui/layui.js"></script>
    <!--    layui样式-->
    <link rel="stylesheet" href="./css/index.css">
</head>
<body style="overflow: hidden">
<!--头部开始-->
<div id="header">
<div id="logo">
<!--    logo-->
    <a href=""> <img src="image/logo.jpg" width="100" height="50"></a>
</div>
    <div class="user"><a href="../public/index.php" style="color: #fff">前台首页</a> </div>
<div class="user layui-icon"> <ul class="li">
        <li>
            <?php echo $_SESSION['username'] ?>&#xe625;
        <ul style="display: none">
            <li>
                <a href=""> 个人信息</a> </li>
            <li>
                <a href="">切换账号</a></li>
            <li>
                <a href="logout.php">退出</a></li>
        </ul>
        </li>
    </ul>
</div>
</div>
<!--头部结束-->
<!--右侧导航栏开始-->
    <ul style="margin-top:50px; padding-top: 20px" class="layui-nav layui-nav-tree layui-nav-side">
    <li class="layui-nav-item layui-nav-itemed layui-icon">
        <a href="javascript:;">&#xe770; 会员管理</a>
        <dl class="layui-nav-child">
            <dd><a class="member_list" href="member_list.php">&nbsp;&nbsp;会员列表</a></dd>
        </dl>
    </li>
    <li class="layui-nav-item">
        <a href="javascript:;">&#xe63c; 产品管理</a>
        <dl class="layui-nav-child">
            <dd><a href="products_list.php">&nbsp;&nbsp;产品详情</a></dd>
        </dl>
    </li>
        <li class="layui-nav-item">
            <a href="javascript:;">&#xe66f;管理员管理</a>
            <dl class="layui-nav-child">
                <dd><a href="admin_list.php">&nbsp;&nbsp;管理员列表</a></dd>
                <dd><a href="">&nbsp;&nbsp;角色列表</a></dd>
            </dl>
        </li>

    </ul>
<!--右侧导航栏结束-->
<!--中间内容开始-->
<div class="x-body" >
    <blockquote class="layui-elem-quote" style="margin-left: 210px; margin-top: 20px">
        欢迎管理员:
        <span class="x-red" style="color: red;"><?php date_default_timezone_set("Asia/Shanghai"); echo $_SESSION['username'] ?></span>
        !当前时间：<?php echo  date('Y年m月d日') ?>
    </blockquote>
    <fieldset class="layui-elem-field" style="margin-left: 250px;margin-top: 40px">
        <legend>数据统计</legend>
        <div class="layui-field-box">
            <div class="layui-col-md12">
                <div class="layui-card">
                    <div class="layui-card-body">
                                <ul class="layui-row layui-col-space10 layui-this" >
                                    <li class="layui-col-xs2" style="background-color: #e6e6e6;margin-right: 10px">
                                        <a href="">
<!--                                            从数据库中取出文章数据-->
                                            <?php
                                            $mysql=new Db('comment');
                                            $link=$mysql->link;
                                            $sql="SELECT count(*) from comment";
                                            $result=mysqli_query($link,$sql);
                                            $results=mysqli_fetch_row($result);
                                            ?>
                                            <h3>评论数</h3>
                                            <p style="color: blue;font-size: 30px;margin-top: 20px"><?php echo $results[0]; ?></p>
                                        </a>
                                    </li>
                                    <li class="layui-col-xs2" style="background-color: #e6e6e6;margin-right: 10px">
                                        <?php
                                        $sql="SELECT count(*) from user";
                                        $result=mysqli_query($link,$sql);
                                        $results=mysqli_fetch_row($result);
                                        ?>
                                        <a href="javascript:;">
                                            <h3>会员数</h3>
                                            <p style="color: blue;font-size: 30px;margin-top: 20px"><?php echo $results[0]; ?></p>
                                        </a>
                                    </li>
                                    <li class="layui-col-xs2" style="background-color: #e6e6e6;margin-right: 10px">
                                        <a href="javascript:;">
                                            <h3>网站点击数</h3>
                                            <p style="color: blue;font-size: 30px;margin-top: 20px">66</p>
                                        </a>
                                    </li>
                                    <li class="layui-col-xs2" style="background-color: #e6e6e6;margin-right: 10px">
                                        <?php
                                        $sql="SELECT count(*) from products";
                                        $result=mysqli_query($link,$sql);
                                        $results=mysqli_fetch_row($result);

                                        ?>
                                        <a href="javascript:;">
                                            <h3>商品数</h3>
                                            <p style="color: blue;font-size: 30px;margin-top: 20px"><?php echo $results[0];?></p>
                                        </a>
                                    </li>
                                    <li class="layui-col-xs2" style="background-color: #e6e6e6;margin-right: 10px">
                                        <?php
                                        $sql="SELECT count(*) from shopping_cart";
                                        $result=mysqli_query($link,$sql);
                                        $results=mysqli_fetch_row($result);
                                        ?>
                                        <a href="javascript:;">
                                            <h3>加购人数</h3>
                                            <p style="color: blue;font-size: 30px;margin-top: 20px"><?php echo $results[0] ?></p>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

        </div>
    </fieldset>
<div class="content">
    <iframe class="iframe" frameborder="0" src="./welcome.php"  width="100%" height="100%" scrolling="no">
    </iframe>
    <iframe class="iframe2" frameborder="0" src="./member_list.php"  width="100%" height="100%" scrolling="no">
    </iframe>
</div>
</div>

<!--中间内容结束-->

<script>
    layui.use('element', function(){
        var element = layui.element; //导航的hover效果、二级菜单等功能，需要依赖element模块

        //监听导航点击
        element.on('nav(demo)', function(elem){
            //console.log(elem)
            layer.msg(elem.text());
        });
    });

    //下面可是我自己写的哦
    var li=document.querySelector('.li');
    var lis=li.children;
    lis
    for (var i=0;i<lis.length;i++){
        lis[i].onmouseover=function () {
            this.children[0].style.display='block';
        }
        lis[i].onmouseout=function () {
            this.children[0].style.display='none';
        }
    }

    //增加鼠标经过事件
    var page=document.querySelectorAll('.layui-col-xs2');
    page[0].onmouseover=function () {
        page[0].style.backgroundColor='red';
    }
    page[0].onmouseout=function () {
        page[0].style.backgroundColor='#e6e6e6';
    }
    page[1].onmouseover=function () {
        page[1].style.backgroundColor='red';
    }
    page[1].onmouseout=function () {
        page[1].style.backgroundColor='#e6e6e6';
    }
    page[2].onmouseover=function () {
        page[2].style.backgroundColor='red';
    }
    page[2].onmouseout=function () {
        page[2].style.backgroundColor='#e6e6e6';
    }
    page[3].onmouseover=function () {
        page[3].style.backgroundColor='red';
    }
    page[3].onmouseout=function () {
        page[3].style.backgroundColor='#e6e6e6';
    }
    page[4].onmouseover=function () {
        page[4].style.backgroundColor='red';
    }
    page[4].onmouseout=function () {
        page[4].style.backgroundColor='#e6e6e6';
    }

</script>

</body>
</html>