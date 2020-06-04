<?php
session_start();
if (!$_SESSION['username']){
    header('location:sign_in.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>会员中心</title>
<!--    导航栏css样式  勿动-->
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="./layui/layui.js"></script>
    <link rel="stylesheet" href="./layui/css/daohang.css">
    <link rel="stylesheet" href="css/huiyuan.css">
    <!--    导航栏css样式  勿动-->



</head>
<body>
<div class="header">
<ul class="layui-nav" lay-filter="">
    <li class="sign"><a href=""><img src="images/logo.png" width="100px" height="50px"></a></li>
    <li class="layui-nav-item "  style="margin-left: 100px"><a href="index.php">首页</a></li>
    <li class="layui-nav-item "><a href="Udingzhi.php">U定制</a></li>
    <li class="layui-nav-item"><a href="my_inn.php">我的客栈</a></li>
    <li class="layui-nav-item"><a href="gonglue.php">旅游攻略</a></li>
    <li class="layui-nav-item layui-this"><a href="huiyuan.php">会员中心</a></li>
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

<div id="zhong"><!--中部 -->

<div id="j"><!--中左部 -->
<ul class="layui-nav layui-nav-tree" lay-filter="test">
<!-- 侧边导航: <ul class="layui-nav layui-nav-tree layui-nav-side"> -->
<li class="layui-nav-item"><a href="">会员中心</a></li>
  <li class="layui-nav-item">
    <a href="javascript:;">订单</a>
    <dl class="layui-nav-child">
      <dd><a href="shop.php" style="color:#FFF">全部订单</a></dd>
      <dd><a href="shop.php" style="color:#FFF">客栈订单</a></dd>
      <dd><a href="Udingzhi.php" style="color:#FFF">U定制</a></dd>
      <dd><a href="">签证订单</a></dd>
      <dd><a href="">门票订单</a></dd>
    </dl>
  </li>
  <li class="layui-nav-item">
    <a href="javascript:;">钱包</a>
    <dl class="layui-nav-child">
      <dd><a href="">我的钱包</a></dd>
      <dd><a href="">优惠券</a></dd>
      <dd><a href="">银行卡</a></dd>
      <dd><a href="">礼品卡</a></dd>
      <dd><a href="">安全中心</a></dd>
    </dl>
  </li>
  <li class="layui-nav-item"><a href="">积分</a></li>
  <li class="layui-nav-item"><a href="">收藏</a></li>
  <li class="layui-nav-item"><a href="">电子发票</a></li>
  <li class="layui-nav-item"><a href="">常用信息</a></li>
  <li class="layui-nav-item"><a href="">个人中心</a></li>
  <li class="layui-nav-item"><a href="">我的悠游</a></li>
</ul>
</div><!--中左部 -->
<div id="jxc"><!--中中右部底部灰色，板块区分 -->
<div id="x" class="div-inline"><!--中中部 -->
<div id="x1">
<div id="shang">
<div id="zz">
<img src="images/会员头像.jpg" width="158" height="120"/>
</div>
<div id="zj">
<br/>
<br/>
<a href="#"><p style="font-size:20px; font-family:微软雅黑; color:#fff;">尊敬的会员 <font color="red"> <?php if (@$_SESSION['username']){echo ','.$_SESSION['username'];}  ?></font></p></a>
<br/>
    <?php
    require_once 'autoload.php';
    $mysql=new Db('user');
    $link=$mysql->link;
    $user_uname=@$_SESSION['username'];
    $sql="select * from user where uname='$user_uname' ";
    $res=mysqli_query($link,$sql);
    $result=mysqli_fetch_assoc($res);
    ?>
<a href="grxx.php?user_id=<?php echo $result['user_id'] ?>"><p style="font-size:16px;  font-family:微软雅黑; color:#FFF;">更改会员信息</p></a>
</div>
<div id="yy">
<a href="#"><p align="center"><img src="images/信封.png" width="60" height="60"/></p></a>
<a href="#"><p align="center" style="font-size:14px;  font-family:微软雅黑; color:#FFF;">
收件箱</p></a>
</div>
</div>
<div id="xia">
<ul>
  <li><a href="">礼品卡</a><p align="center" style="color:#09F; font-size:16px;">￥0</p></li>
  <li><a href="">现金值</a><p align="center" style="color:#09F; font-size:16px;">￥0</p></li>
  <li><a href="">返现值</a><p align="center" style="color:#09F; font-size:16px;">￥0</p></li>
  <li><a href="">积分值</a><p align="center" style="color:#09F; font-size:16px;">￥40</p></li>
  <li><a href="">优惠券</a><p align="center" style="color:#09F; font-size:16px;">￥0</p></li>
</ul>
</div>
</div>
<div class="x5"></div><!--留空,区分板块 -->
<div id="x2">
<div id="sh">
<ul>
<li><a href="">全部订单</a></li>
  <li><a href="">未出行</a></li>
  <li><a href="">待付款</a></li>
  <li><a href="">待评价</a></li>
</ul>
</div> 
<div id="xia2">
<div id="zz1">
<img src="images/建筑.png" width="40" height="50"/>
</div>
<div id="zj1">
<a href="#"><p style="font-size:20px; font-family:微软雅黑; color: #666;">嘉兴拾忆青旅</p></a>
<br/>
<a href="#"><p style="font-size:16px;  font-family:微软雅黑; color: #CCC;">姜堰市街道35号3楼</p></a>
<a href="#"><p style="font-size:16px;  font-family:微软雅黑; color: #CCC;">2020-01-01至2020-01-02晚1间</p></a>
</div>
<div id="yy1">
<p align="right" style="font-size:16px;  font-family:微软雅黑; color: #FC3;">￥88</p>
<p  align="right" style="font-size:16px;  font-family:微软雅黑; color: #CCC;">已成交</p>
<br/>
<a href="#"><input class="button"  value="酒店点评"/></a>
</div>
</div>
</div>
<div class="x5"></div><!--留空,区分板块 -->
<div id="x3">
<a href="#"><p align="center" style="font-size:20px;  font-family:微软雅黑; color: #09F;">最新收藏</p></a>
<hr/>
<img src="images/空截图.jpg" width="680" height="180"/>
</div>
<div class="x5"></div><!--留空,区分板块 -->
<div id="x4">
<a href="#"><p align="center" style="font-size:20px;  font-family:微软雅黑; color: #09F;">浏览历史</p></a>
<hr/>
<img src="images/空截图.jpg" width="680" height="180"/>
</div>
<div class="x5"></div><!--留空,区分板块 -->
<div id="x6">
<a href="#"><p align="center" style="font-size:20px;  font-family:微软雅黑; color: #09F;">我的关注</p></a>
<hr/>
<img src="images/空截图.jpg" width="680" height="180"/>
</div>
</div><!--中中部 -->
<div id="c" class="div-inline"><!--中右部 -->
<div id="c1"><a href=""><img src="images/c3.jpg" width="300" height="160"></a></div>
<div class="c6"></div><!--留空,区分板块 -->
<div id="c2"><a href=""><img src="images/c1.jpg" width="300" height="200"></a></div>
<div class="c6"></div><!--留空,区分板块 -->
<div id="c3"><a href=""><img src="images/c2.jpg" width="300" height="200"></a></div>
<div class="c6"></div><!--留空,区分板块 -->
<div id="c4">
<p style="float:left; margin-top:15px; margin-left:20px; font-family:'微软雅黑'; font-size:14px;">我的会员特权</p>
<p style="float:right;margin-top:15px; margin-right:20px; font-family:'微软雅黑';"><a href="">更多&nbsp;></a></p>
<p style="margin-left:20px; font-family:'微软雅黑';color: #F90;font-size:12px; padding-top:50px;"><strong>积分奖励</strong></p>
<p style="margin-left:20px; margin-right:50px; font-family:'微软雅黑';padding-top:3px; font-size:12px">预定成交享有积分奖励，会员等级越高，积分累加更多！签到、点评、抽奖等也都可获得积分!</p>
<p style="margin-left:20px; font-family:'微软雅黑';color: #F90;font-size:12px; padding-top:10px;"><strong>积分兑换丰富利品</strong></p>
<p style="margin-left:20px; margin-right:50px; font-family:'微软雅黑'; padding-top:3px; font-size:12px">您可以使用积分卡，使用积分进行礼品兑换</p>
</div>
<div class="c6"></div><!--留空,区分板块 -->
<div id="c5">
<p style="float:left; margin-top:15px; margin-left:20px; font-family:'微软雅黑'; font-size:14px;">会员规则</p>
<p style="float:right;margin-top:15px; margin-right:20px; font-family:'微软雅黑';"><a href="">更多&nbsp;></a></p>
<p style="margin-left:20px; font-family:'微软雅黑';color: #F90;font-size:12px; padding-top:50px;"><strong>会员升级标准</strong></p>
<p style="margin-left:20px; margin-right:50px; font-family:'微软雅黑';padding-top:3px; font-size:12px">等级分是根据您在悠游网的个人账户近12个月内的订单消费情况、任务活动完成情况及信誉记录，来综合计算得出的相应分值。分值每日更新，等级分的变化对应您在会员身份的变动</p>
<p style="margin-left:20px; font-family:'微软雅黑';color: #F90;font-size:12px; padding-top:10px;"><strong>特权解析</strong></p>
<p style="margin-left:20px; margin-right:50px; font-family:'微软雅黑'; padding-top:3px; font-size:12px">高铁休息室、精美茶点、住房立减...</p>
</div>
</div><!--中右部 -->
</div><!--中中右部底部灰色，板块区分 -->
</div><!--中部 -->

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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" style="color:#FFF">首&nbsp;页</a>&nbsp;&nbsp;&nbsp;
|
&nbsp;&nbsp;&nbsp;<a href="#" style="color:#FFF">服&nbsp;务&nbsp;建&nbsp;议</a>&nbsp;&nbsp;&nbsp;
|
&nbsp;&nbsp;&nbsp;<a href="gonglue.php" style="color:#FFF">新&nbsp;闻&nbsp;资&nbsp;讯</a>&nbsp;&nbsp;&nbsp;
|
&nbsp;&nbsp;&nbsp;<a href="#" style="color:#FFF">意&nbsp;见&nbsp;反&nbsp;馈</a>&nbsp;&nbsp;&nbsp;
</div><!--two-->

<div id="three" class="div-inline">&nbsp;&nbsp;<br/>
<img src="images/er.jpg" width="80"><!--二维码 -->
</div>

<div style="font-family: '微软雅黑'; font-size: 10px; text-align:center">COPYRIGHT © 2020 悠游网 All Rights Reserved 豫ICP备66668888号</div>
</div>

</div><!--zong-->

<script>
    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element;

        //…
    });
</script>
</body>
</html>