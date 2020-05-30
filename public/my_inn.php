<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的客栈</title>
<!--    导航栏css样式  勿动-->
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="./layui/layui.js"></script>
    <link rel="stylesheet" href="./layui/css/daohang.css">
    <link rel="stylesheet" href="css/my_inn.css">
    <!--    导航栏css样式  勿动-->



</head>
<?php session_start();
?>
<body>
<div class="header">
<ul class="layui-nav" lay-filter="">
    <li class="sign"><a href=""><img src="images/logo.png" width="100px" height="50px"></a></li>
    <li class="layui-nav-item " style="margin-left: 100px"><a href="index.php">首页</a></li>
    <li class="layui-nav-item "><a href="Udingzhi.php">U定制</a></li>
    <li class="layui-nav-item layui-this"><a href="my_inn.php">我的客栈</a></li>
    <li class="layui-nav-item"><a href="gonglue.php">旅游攻略</a></li>
    <li class="layui-nav-item"><a href="">会员中心</a></li>
    <li class="layui-nav-item" style="margin-left: 20px ; margin-right: 20px"><a href="shop.php"><img src="images/购物车.png" width="20px" height="20px"></a></li>

    <?php
    if (@$_SESSION['username'] &&@$_COOKIE['username']){
        echo "<li class='layui-nav-item'>
                <a href=''><img src='./images/touxiang.jpeg' class='layui-nav-img'>".$_SESSION['username']."</a>
                <dl class='layui-nav-child''>
                    <dd><a href=''>修改信息</a></dd>
                    <dd><a href=''>安全管理</a></dd>
                    <dd><a href='sign_out.php'>退出登录</a></dd>
               </dl>
               </li>";
    }else{echo "<li class='sign' style='list-style: none'><a href='sign_in.php'>登录</a> |<a href='sign_up.php'>注册</a> </li>";} ?>
</ul>
</div>

<div id="zong"><!--总布局（去除导航栏） -->
<div style="height:50px;width:1200px"></div><!--上中部留空 -->

<div id="zhong"><!--中间部分-->

<div id="yi"><!--搜索加广告-->
<div id="zuo"><!--搜索-->
<div id="aa"></div><!--留空 -->
<div id="bb"> <label><input name="diqu" type="radio">国内 港澳台</label> <label><input name="diqu" type="radio">海外酒店</label></div>
<hr>
<div id="cc">
        <label style="margin-left: 20px; line-height: 40px;vertical-align: center;float: left" ><font color="#c2c2c2">目的地</font></label>
    <div style="margin-top: 10px">
            <select name="city" lay-verify="required" style="width:350px;height:20px; border: none;float: left;text-align: center ">
                <option value="">请选择</option>
                <option value="0">北京</option>
                <option value="1">上海</option>
                <option value="2">广州</option>
                <option value="3">深圳</option>
                <option value="4">杭州</option>
            </select>
    </div>
</div>
<div>
    <div class="" style=" float:left;width: 200px; margin-left: 20px; height: 40px;border: 1px #c2c2c2 solid; border-radius: 10px;margin-top: 13px"> <font style="line-height: 40px;color:#c2c2c2;vertical-align: center">入住</font>
        <input type="text" class="layui-input" id="test2" style="border:none; width: 120px;height: 40px;float: right;">
    </div>
    <div class="" style="margin-top: 13px;float:left;width: 200px; margin-left: 20px; height: 40px;border: 1px #c2c2c2 solid; border-radius: 10px"> <font style="line-height: 40px;color:#c2c2c2;vertical-align: center">离店</font>
        <input type="text" class="layui-input" id="test3" style="border:none; width: 120px;height: 40px;float: right">
    </div>
</div>
<div style="height: 130px;width: 450px">
<font color="c2c2c2" style="margin-top: 10px;float: left;margin-left: 20px;line-height: 40px;vertical-align: center">关键词</font>
<input type="text" placeholder="试试搜 首都机场" style="margin-top: 10px;border: none;height:40px;margin-left: 20px;line-height: 40px; vertical-align:center">
</div>
    <div >
        <input type="submit" name="search" value="搜索" style=" color:#fff;height: 40px; width: 450px;border: 1px #c2c2c2 solid;border-radius: 10px;background-color: #FF5722">
    </div>
</div><!--搜索-->
<div id="you">
  <div class="layui-carousel" id="test1">
    <div carousel-item>
        <div><a href="#"><img src="images/h.jpg"></a> </div>
        <div><a href="#"><img src="images/a.jpg"></a> </div>
        <div><a href="#"><img src="images/i.jpg"></a> </div>
        <div><a href="#"><img src="images/hai.jpg"></a> </div>
    </div>
  </div>
</div>
</div><!--搜索加广告-->

<div style="height:10px;width:1200px"></div><!--留空 -->

<div id="er"><!--客栈必住榜-->
<div id="daohang">
	<ul>
    <li><a href="#"><strong>必住客栈</strong></a></li>
    <li><a href="#">北京</a></li>
    <li><a href="#">成都</a></li>
    <li><a href="#">上海</a></li>
    <li><a href="#">青岛</a></li>
    <li><a href="#">三亚</a></li>
    <li><a href="#">西安</a></li>
    <li><a href="#">郑州</a></li>
	<li><a href="#">more >></a></li>
</ul>
</div>
<div id="ke">
<div id="j"><br><strong><p style="font-size: 18px; color: #000;">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">必住情侣酒店榜&nbsp;></a></p></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;旅途二人，私人尽享</div> 

<div id="x"><br><strong><p style=" font-size:18px">&nbsp;&nbsp;&nbsp;<a href="#">&nbsp;必住商务酒店榜&nbsp;</a>></a></p></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;品质商旅，品味随行</div> 

<div id="c"><br><strong><p style="font-size: 18px; color: #FFF;">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">必住主题酒店榜&nbsp;></a></a></p></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;主题酒店，回味主题</div>
 
<div id="l"><br><strong><p style="font-size: 18px; font-family: '微软雅黑'; color: #FFF;">&nbsp;&nbsp;&nbsp;<a href="#">&nbsp;试睡员推荐榜&nbsp;></a></a></p></strong></div>
</div>
</div><!--客栈必住榜-->

<div id="san"><!--民宿推荐-->
<div id="daohang">
	<ul>
    <li><a href="#"><strong>民宿推荐</strong></a></li>
    <li><a href="#">北京</a></li>
    <li><a href="#">三亚</a></li>
    <li><a href="#">上海</a></li>
    <li><a href="#">青岛</a></li>
    <li><a href="#">成都</a></li>
    <li><a href="#">西安</a></li>
    <li><a href="#">郑州</a></li>
	<li><a href="#">more >></a></li>
</ul>
</div>
    <?php
    require_once 'autoload.php';
    $mysql=new Db('products');
    $link=$mysql->link;
    $sql="select * from products";
    $result=mysqli_query($link,$sql);
    while ($res=mysqli_fetch_assoc($result)){


    ?>

<div id="min"><!--民-->
<div id="m1"><!--m1-->
<div class="n1"><a href="#"><img src="<?php echo $res['pro_path']?>" width="350" height="221"></a></div>
<div class="n2">
<p style="background-color: #edf4f8; width: 60px;margin-left: 5px; font-family: '微软雅黑'; color: #617888; font-size: 12px; text-align:center; float:left;">今日甩卖</p>
<p style="background-color: #edf4f8; width: 60px; margin-left: 10px; font-family: '微软雅黑'; color: #617888; font-size: 12px; text-align:center;float:left;">连住优惠</p>
<p style="background-color: #edf4f8; width: 60px; margin-left: 10px; font-family: '微软雅黑'; color: #617888; font-size: 12px; text-align:center;float:left;">超赞房东</p>
</div>
<div class="n3"><p><strong style="font-family: '微软雅黑'; font-size:20px;"><a href="#"><?php echo $res['pro_name']?></a></strong></p></div>
<div class="n4"><p style="font-family:'微软雅黑'"><strong style="color: #6C0; margin-left:10px;"><?php echo $res['grade']?>分</strong>/&nbsp;66条点评·<?php echo $res['pro_introduction']?></p></div>
<div class="n5">
<p style="color:#ff6c4f; font-family:'微软雅黑'; margin-left:10px;">￥
<strong style="font-size:22px"><?php echo $res['price']?></strong>/晚
</p>
</div>
</div><!--m1-->
    <?php } ?>


</div><!--宿-->
</div><!--民宿推荐-->

</div><!--中间部分-->


<div style="height:3px;width:1200px"></div><!--中尾部留空 -->
<div id="wei"><!--结尾 -->
<div style="height:20px;width:1200px"></div><!--留空 -->

<div id="one" class="div-inline">
<div style="height:40px; width:400px;float:right; text-align:center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/logo1.png" width="100"></div><!--空格对齐 -->
<div style="height: 60px; width: 400px; float: right; ">
<div style="height: 60px; width: 30px; float: left; "></div><!--留空 -->
<div style="height: 60px; width: 170px; float: right; color: #FFF; font-family: '微软雅黑';">电话：66668888<br/>邮箱：66668888<br/>地址：河南牧业经济学院</div>
</div>
</div><!--one-->

<div id="two" class="div-inline">
&nbsp;&nbsp;<br/>&nbsp;&nbsp;<br/>&nbsp;&nbsp;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;首&nbsp;页&nbsp;&nbsp;&nbsp;
|
&nbsp;&nbsp;&nbsp;服&nbsp;务&nbsp;建&nbsp;议&nbsp;&nbsp;&nbsp;
|
&nbsp;&nbsp;&nbsp;新&nbsp;闻&nbsp;资&nbsp;讯&nbsp;&nbsp;&nbsp;
|
&nbsp;&nbsp;&nbsp;意&nbsp;见&nbsp;反&nbsp;馈&nbsp;&nbsp;&nbsp;
</div><!--two-->

<div id="three" class="div-inline">&nbsp;&nbsp;<br/>
<img src="images/er.jpg" width="80"><!--二维码 -->
</div>

<div style="font-family: '微软雅黑'; font-size: 10px; text-align:center">COPYRIGHT © 2020 悠游网 All Rights Reserved 豫ICP备66668888号</div>
</div>

</div><!--zong-->

<script>
    layui.use('carousel', function(){
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#test1'
            ,width: '520px' //设置容器宽度
            ,arrow: 'always' //始终显示箭头
            //,anim: 'updown' //切换动画方式
			,height: '300px'
        });
    });
</script>
<script>
    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element;

        //…
    });
</script>
<script>
    //Demo
    layui.use('form', function(){
        var form = layui.form;
    });
    layui.use('laydate', function(){
        var laydate = layui.laydate;

        //执行一个laydate实例
        laydate.render({
            elem: '#test2' //指定元素
        });
    });
    layui.use('laydate', function(){
        var laydate = layui.laydate;

        //执行一个laydate实例
        laydate.render({
            elem: '#test3' //指定元素
        });
    });
</script>
</body>
</html>