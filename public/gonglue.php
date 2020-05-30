<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>旅游攻略</title>
<!--    导航栏css样式  勿动-->
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="./layui/layui.js"></script>
    <link rel="stylesheet" href="./css/gonglue.css">
    
    <!--    导航栏css样式  勿动-->
    <!--    海报css样式  勿动-->
    <style>
        .test{
            width: 1200px;
            
            margin: 0 auto;
        }
    </style>
    <!--    海报css样式  勿动-->
</head>
<body>

<div class="header">
<ul class="layui-nav" lay-filter="">
    <li class="sign"><a href=""><img src="images/logo.png" width="100px" height="50px"></a></li>
    <li class="layui-nav-item " style="margin-left: 100px"><a href="index.php">首页</a></li>
    <li class="layui-nav-item "><a href="Udingzhi.php">U定制</a></li>
    <li class="layui-nav-item"><a href="my_inn.php">我的客栈</a></li>
    <li class="layui-nav-item layui-this"><a href="gonglue.php">旅游攻略</a></li>
    <li class="layui-nav-item"><a href="huiyuan.php">会员中心</a></li>
  <li class="layui-nav-item" style="margin-left: 20px ; margin-right: 20px"><a href="shop.php"><img src="images/购物车.png" width="20px" height="20px"></a></li>

    <?php  session_start();
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

<!--  这下面写HTML代码-->
<div class="test">
<div class="layui-carousel" id="test1">
    <div carousel-item>
        <div><img src="images/1.png"></div>
        <div><img src="images/2.jpg"></div>
        <div><img src="images/3.jpg"></div>
        <div><img src="images/4.jpg"></div>
    </div>
</div>
</div>
</div>
<!-- 条目中可以是任意内容，如：<img src="">  -->

<div class="first" align="center">
 <div class="location">
   <div class="lo1"><img src="images/位置.png" width="25" height="25" alt="lo1"></div>
   <div class="lo2" align="center">我在郑州</div>
   <span class="city">切换城市></span>
 </div>
 <div class="sousuo"> 
    <input maxlength="40" type="text" data-default="搜目的地/攻略/用户" value="搜目的地/攻略/用户" class="black">
    <a class="btn" herf="#" rel="nofollow" data-beacon="search-header"> </a>
 </div>
 <div class="ex" align="left">精选活动</div> 
</div>

<!--下面为悠友说内容-->
<div class="haha" >

<div class="jia2">
  <div class="liu" align="right">
    <p align="center" class="j"><a href="#">悠友说</a></p>
    <p align="center" class="t">YOU YOU SAY</p>
    <p align="right" class="y3"><a href="#"><img src="images/短信.png" width="30" height="30" alt="短信"></a></p>
    <p align="left" class="y4">我来说</p>
  </div>


<div id="l1"><a href="#">
    <p align="left" class="hb1">超全&nbsp; |</p>
    <p align="left" class="hb2">吃遍杭州26家大店</p>
    <p align="center" class="y5">在我的印象中，杭州是一个充满诗情画意的地方，到处散发这山水的气息，就在2018年的3月，我决定
去杭州一趟我想把我的春天交给杭州...</p>
    <p align="center" class="y6">爱旅游的小猫咪</p>
    <p align="center" class="y7"><img src="images/实心星星.jpg" width="35" height="5" alt="星星"></p>
    <p align="center" class="y8">2019.08.31</p></a>
</div>

<div id="l2"><a href="#">
    <p align="left" class="hb1">浪漫&nbsp; |</p>
    <p align="left" class="hb2">三亚之旅</p>
    <p align="center" class="y5">在我的印象中，三亚是一个充满诗情画意的地方，到处散发这山水的气息，就在2018年的3月，我决定
去杭州一趟我想把我的春天交给杭州...</p>
    <p align="center" class="y6">爱旅游</p>
    <p align="center" class="y7"><img src="images/实心星星.jpg" width="35" height="5" alt="星星"></p>
    <p align="center" class="y8">2019.08.31</p></a>
</div>
<div class="s1"><a href="#"><img src="images/activity1.png" width="270" height="160" alt="activity1"></a></div>
</div>


<div class="jia1">
 <div id="l1"><a href="#">
    <p align="left" class="hb1">惊喜&nbsp; |</p>
    <p align="left" class="hb2">上有天堂下有苏杭</p>
    <p align="center" class="y5">在我的印象中，苏杭是一个充满诗情画意的地方，到处散发这山水的气息，就在2018年的3月，我决定
去杭州一趟我想把我的春天交给杭州...</p>
    <p align="center" class="y6">小猫咪</p>
    <p align="center" class="y7"><img src="images/实心星星.jpg" width="35" height="5" alt="星星"></p>
    <p align="center" class="y8">2019.11.25</p></a>
 </div>

 <div id="l2"><a href="#">
    <p align="left" class="hb1">浪漫&nbsp; |</p>
    <p align="left" class="hb2">三亚之旅</p>
    <p align="center" class="y5">在我的印象中，三亚是一个充满诗情画意的地方，到处散发这山水的气息，就在2018年的3月，我决定
去杭州一趟我想把我的春天交给杭州...</p>
    <p align="center" class="y6">爱旅游</p>
    <p align="center" class="y7"><img src="images/实心星星.jpg" width="35" height="5" alt="星星"></p>
    <p align="center" class="y8">2019.08.31</p></a>
 </div>
 <div class="s1"><a href="#"><img src="images/activity2.png" width="270" height="160" alt="activity2"></a></div>
</div>



<!-- 推荐游记板块-->

<div class="second">
   <p class="sec1">推荐游记</p>
   <p class="sec2"><a href="#">更多</a></p>
   <p class="sec3" align="right">什么是优质游记？秘籍必看！</p>
   <p class="sec4"><a href="#">头条</a></p>
   <p class="sec5"><a href="#">推荐</a></p>
   <p class="sec5"><a href="#">更新</a></p>
   <p class="sec6">热门咨询</p>
</div>
<!--推荐图文板块-->

<div class="third">
<div class="sanzuo">  
<div class="sanzuo1">
	<div class="th1"><a href="#"><img src="images/7.png" width="270" height="160" alt="th1"></a></div>
   <div class="text">
     <p class="text1"><a href="#">[流奶与蜜]的应许：耶路撒冷Promised Land:Jerusalem(耶路撒冷6日深度游)</a></p>
     <p class="text2">念小透  发表于2019-12-18</p>
     <p class="text3">开篇《Exodus》3：8So I have come down to rescue</p>
   </div>
</div>
<div class="sanzuo1">
	<div class="th1"><a href="#"><img src="images/6.png" width="270" height="160" alt="th1"></a></div>
   <div class="text">
     <p class="text1"><a href="#">跟着“少年的你”进入市井气十足的重庆——电影取景地和超全景点逛吃攻略！</a></p>
     <p class="text2">摄影师花生  发表于2019-11-16</p>
     <p class="text3">文章分为三部分，关于“少年的你”电影取景地实拍，重庆美食推荐和花生三次重庆&nbs</p>
   </div>
</div>
<div class="sanzuo1">
	<div class="th1"><a href="#"><img src="images/5.png" width="270" height="160" alt="th1"></a></div>
   <div class="text">
     <p class="text1"><a href="#">安麓之旅，和孩子归隐的三天两晚，一场穿越时空的旅行</a></p>
     <p class="text2">折腾的小肉团  发表于2010-4-18</p>
     <p class="text3">在一本杂志中偶然读到：安麓，安于麓间，“安”取平静，安静之意；“麓”为山脚之下，隐居</p>
   </div>
</div>
<div class="sanzuo1">
	<div class="th1"><a href="#"><img src="images/7.png" width="270" height="160" alt="th1"></a></div>
   <div class="text">
     <p class="text1"><a href="#">[流奶与蜜]的应许：耶路撒冷Promised Land:Jerusalem(耶路撒冷6日深度游)</a></p>
     <p class="text2">念小透  发表于2019-12-18</p>
     <p class="text3">开篇《Exodus》3：8So I have come down to rescue</p>
   </div>
</div>
</div>
<div class="sanyou">
<div class="sanyou1">
	<div class="xmfh">·</div>
	<div class="wenzi"><a href="#">爱上慢时光，杨硕在这座绝美边城找回初心</a></div>
</div>
<div class="sanyou1">
	<div class="xmfh">·</div>
	<div class="wenzi"><a href="#">想去踏春去哪里比较好？</a></div>
</div>
<div class="sanyou1">
	<div class="xmfh">·</div>
	<div class="wenzi"><a href="#">去越南旅游，看完7个景点已经够了</a></div>
</div>
<div class="sanyou1">
	<div class="xmfh">·</div>
	<div class="wenzi"><a href="#">绿茵山涧VS清凉大海，夏季去哪里呢</a></div>
</div>
<div class="gdzx"><a href="#">更多资讯</a></div>	
</div>
<div class="page">
 <div class="page-box">
 <span class="page-item page-page" active><a href="#">上一页</a></span>
 <span class="page-item page-page" active><a href="#">下一页</a></span>
 <span class="page-item page-prev"><a href="#"><</a></span>
 <span class="page-item page-page" data-page="1"><a href="#">1</a></span>
 <span class="page-item page-page" active><a href="#">2</a></span>
 <span class="page-item page-page" data-page="3"><a href="#">3</a></span>
 <span class="page-item page-prev"><a href="#">></a></span>
 <span class="page-item page-page" active><a href="#">跳转</a></span>
 <span class="page-item page-page" active><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
 <span  class="page-item page-page">页</span>
 </div></div>
</div>
<div id="qi">
    <p align="right" class="q10">关于我们</p>
    <p align="center" class="q11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ABOUT US</p>
</div>

<div id="qi1">
    <p align="center" class="q12"><img src="images/住宿.png" width="100" height="100" alt="住宿"></p>
    <p align="center" class="q13">住宿</p>
</div>  
  
<div id="qi2">
    <p align="center" class="q12"><img src="images/旅游.png" width="100" height="100" alt="旅游"></p>
    <p align="center" class="q13">旅游</p>
</div>    

<div id="qi3">
    <p align="center" class="q12"><img src="images/跟团.png" width="100" height="100" alt="跟团"></p>
    <p align="center" class="q13">跟团</p>
</div>    

<div id="qi4">
    <p align="left" class="q12">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/定制.png" width="100" height="100" alt="定制"></p>
    <p align="left" class="q14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;定制</p>
</div>    
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




</div>

<script src="/public/layui/layui.js"></script>
<script>
    layui.use('carousel', function(){
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#test1'
            ,width: '100%' //设置容器宽度
            ,arrow: 'always' //始终显示箭头
            //,anim: 'updown' //切换动画方式
			,height: '400px'
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
</body>
</html>