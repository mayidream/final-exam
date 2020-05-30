<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>订单管理</title>
<!--    导航栏css样式  勿动-->
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="./layui/layui.js"></script>
    <link rel="stylesheet" href="./css/dingdanguanli.css">
    <!--    导航栏css样式  勿动-->
    <!--    海报css样式  勿动-->
    <style>
        .test{
            width: 1200px;
            height: 500px;
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
    <li class="layui-nav-item"><a href="gonglue.php">旅游攻略</a></li>
    <li class="layui-nav-item"><a href="huiyuan.php">会员中心</a></li>
    <li class="layui-nav-item" style="margin-left: 20px ; margin-right: 20px"><a href="shop.php"><img src="images/购物车.png" width="20px" height="20px"></a></li>

    <?php session_start();
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
<div class="cidaohang"><a href="kong.html">首页</a> > <a href="kong.html">我的</a> > <a href="kong.html">订单管理</a></div> 
<div class="detail">
  <div class="navigation" style="position:static">
    <ul>
     <li class="active"><a href="kong.html">全部订单</a></li>
     <li class><a href="kong.html">未付款</a></li>
     <li class><a href="kong.html">已付款</a></li>
    </ul>
  </div>
<div class="hlm">
	<p class="bb" align="center">宝贝</p>
	<p class="dj">单价</p>
	<p class="sl" align="center">数量</p>
	<p class="sfk" align="center">实付款</p>
	<p class="spcz" align="center">商品操作</p>
	<p class="jycz" align="center">交易操作</p>
	</div>
<div class="ding1">	
<div class="ds1">
<p class="sj1" align="center">2020-4-20</p>
<p class="ddh1" align="left">订单号：994095104862276035</p>
<div class="lm">
	<div class="l1"><img src="images/blogo.png" width="35"></div>
	<p class="sjm1" align="left"><a href="kong.html">香格里拉大酒店</a></p>
	</div>
<div class="sc"><a href="kong.html"><img src="images/shanchu.png" width="27"></a></div>
	</div>
<div class="dx1">
<div class="tp" align="center"><img src="images/jd.jpg" height="100"></div>	
<div class="xx">
	<div><p><a href="kong.html">【未来HOUSE】LOFT奢侈房-近太古里/IFS/春熙路/</a></p>
	<p><a href="kong.html">339电视塔/九眼桥兰桂坊/U37</a></p></div>
	<div class="t1"><a href="kong.html"><img src="images/t1.jpg" width="30"></a></div>
	<div class="t2"><a href="kong.html"><img src="images/t2.jpg" width="30"></a></div>
	<div class="t3"><a href="kong.html"><img src="images/t3.jpg" width="30"></a></div>
	<div class="t4"><a href="kong.html"><img src="images/t4.jpg" width="30"></a></div>
	</div>	
<div class="dj">
	<p>￥590.00</p>
	</div>	
<div class="sl" align="center">
	<p>2</p>
	</div>	
<div class="sfk1" align="center">
	<p>￥1180.00</p>
	</div>
<div class="spcz" align="center">
	<p><a href="kong.html">交易成功</a></p>
	<p><a href="kong.html">订单详情</a></p>
	<p><a href="kong.html">申请售后</a></p>
	<p><a href="kong.html">投诉商家</a></p>
	</div>
<div class="jycz" align="center">
	<p class="page-item page-page" active><a href="kong.html">评价</a></p>
	<p><a href="kong.html">再次购买</a></p>
	</div>
	</div>	
	</div>
<div class="ding1">	
<div class="ds1">
<p class="sj1" align="center">2020-3-20</p>
<p class="ddh1" align="left">订单号：994095104862276035</p>
<div class="lm">
	<div class="l1"><img src="images/ylogo.png" width="35"></div>
	<p class="sjm1" align="left"><a href="kong.html">天涯游 </a></p>
	</div>
<div class="sc"><a href="kong.html"><img src="images/shanchu.png" width="27"></a></div>
	</div>
<div class="dx1">
<div class="tp" align="center"><img src="images/ly.jpg" height="100"></div>	
<div class="xx">
	<div><p><a href="kong.html">【跟团游】全称0购物&nbsp;郑州-焦作云台山、开封2天1夜</a></p>
	<p><a href="kong.html">经济型舒适酒店+转业导游讲解</a></p></div>
	<div class="t1"><a href="kong.html"><img src="images/t1.jpg" width="30"></a></div>
	<div class="t2"><a href="kong.html"><img src="images/t2.jpg" width="30"></a></div>
	<div class="t3"><a href="kong.html"><img src="images/t3.jpg" width="30"></a></div>
	</div>	
<div class="dj">
	<p>￥410.00</p>
	</div>	
<div class="sl" align="center">
	<p>1</p>
	</div>	
<div class="sfk1" align="center">
	<p>￥410.00</p>
	</div>
<div class="spcz" align="center">
	<p><a href="kong.html">交易成功</a></p>
	<p><a href="kong.html">订单详情</a></p>
	<p><a href="kong.html">申请售后</a></p>
	<p><a href="kong.html">投诉商家</a></p>
	</div>
<div class="jycz" align="center">
	<p class="page-item page-page" active><a href="kong.html">评价</a></p>
	<p><a href="kong.html">再次购买</a></p>
	</div>
	</div>	
	</div>
<div class="ding1">	
<div class="ds1">
<p class="sj1" align="center">2020-4-20</p>
<p class="ddh1" align="left">订单号：994095104862276035</p>
<div class="lm">
	<div class="l1"><img src="images/blogo.png" width="35"></div>
	<p class="sjm1" align="left"><a href="kong.html">香格里拉大酒店</a></p>
	</div>
<div class="sc"><a href="kong.html"><img src="images/shanchu.png" width="27"></a></div>
	</div>
<div class="dx1">
<div class="tp" align="center"><img src="images/jd.jpg" height="100"></div>	
<div class="xx">
	<div><p><a href="kong.html">【未来HOUSE】LOFT奢侈房-近太古里/IFS/春熙路/</a></p>
	<p><a href="kong.html">339电视塔/九眼桥兰桂坊/U37</a></p></div>
	<div class="t1"><a href="kong.html"><img src="images/t1.jpg" width="30"></a></div>
	<div class="t2"><a href="kong.html"><img src="images/t2.jpg" width="30"></a></div>
	<div class="t3"><a href="kong.html"><img src="images/t3.jpg" width="30"></a></div>
	<div class="t4"><a href="kong.html"><img src="images/t4.jpg" width="30"></a></div>
	</div>	
<div class="dj">
	<p>￥590.00</p>
	</div>	
<div class="sl" align="center">
	<p>2</p>
	</div>	
<div class="sfk1" align="center">
	<p>￥1180.00</p>
	</div>
<div class="spcz" align="center">
	<p><a href="kong.html">交易成功</a></p>
	<p><a href="kong.html">订单详情</a></p>
	<p><a href="kong.html">申请售后</a></p>
	<p><a href="kong.html">投诉商家</a></p>
	</div>
<div class="jycz" align="center">
	<p class="page-item page-page" active><a href="kong.html">评价</a></p>
	<p><a href="kong.html">再次购买</a></p>
	</div>
	</div>	
	</div>
<div class="ding1">	
<div class="ds1">
<p class="sj1" align="center">2020-3-20</p>
<p class="ddh1" align="left">订单号：994095104862276035</p>
<div class="lm">
	<div class="l1"><img src="images/ylogo.png" width="35"></div>
	<p class="sjm1" align="left"><a href="kong.html">天涯游 </a></p>
	</div>
<div class="sc"><a href="kong.html"><img src="images/shanchu.png" width="27"></a></div>
	</div>
<div class="dx1">
<div class="tp" align="center"><img src="images/ly.jpg" height="100"></div>	
<div class="xx">
	<div><p><a href="kong.html">【跟团游】全称0购物&nbsp;郑州-焦作云台山、开封2天1夜</a></p>
	<p><a href="kong.html">经济型舒适酒店+转业导游讲解</a></p></div>
	<div class="t1"><a href="kong.html"><img src="images/t1.jpg" width="30"></a></div>
	<div class="t2"><a href="kong.html"><img src="images/t2.jpg" width="30"></a></div>
	<div class="t3"><a href="kong.html"><img src="images/t3.jpg" width="30"></a></div>
	</div>	
<div class="dj">
	<p>￥410.00</p>
	</div>	
<div class="sl" align="center">
	<p>1</p>
	</div>	
<div class="sfk1" align="center">
	<p>￥410.00</p>
	</div>
<div class="spcz" align="center">
	<p><a href="kong.html">交易成功</a></p>
	<p><a href="kong.html">订单详情</a></p>
	<p><a href="kong.html">申请售后</a></p>
	<p><a href="kong.html">投诉商家</a></p>
	</div>
<div class="jycz" align="center">
	<p class="page-item page-page" active><a href="kong.html">评价</a></p>
	<p><a href="kong.html">再次购买</a></p>
	</div>
	</div>	
	</div>	
<div class="ding1">	
<div class="ds1">
<p class="sj1" align="center">2020-4-20</p>
<p class="ddh1" align="left">订单号：994095104862276035</p>
<div class="lm">
	<div class="l1"><img src="images/blogo.png" width="35"></div>
	<p class="sjm1" align="left"><a href="kong.html">香格里拉大酒店</a></p>
	</div>
<div class="sc"><a href="kong.html"><img src="images/shanchu.png" width="27"></a></div>
	</div>
<div class="dx1">
<div class="tp" align="center"><img src="images/jd.jpg" height="100"></div>	
<div class="xx">
	<div><p><a href="kong.html">【未来HOUSE】LOFT奢侈房-近太古里/IFS/春熙路/</a></p>
	<p><a href="kong.html">339电视塔/九眼桥兰桂坊/U37</a></p></div>
	<div class="t1"><a href="kong.html"><img src="images/t1.jpg" width="30"></a></div>
	<div class="t2"><a href="kong.html"><img src="images/t2.jpg" width="30"></a></div>
	<div class="t3"><a href="kong.html"><img src="images/t3.jpg" width="30"></a></div>
	<div class="t4"><a href="kong.html"><img src="images/t4.jpg" width="30"></a></div>
	</div>	
<div class="dj">
	<p>￥590.00</p>
	</div>	
<div class="sl" align="center">
	<p>2</p>
	</div>	
<div class="sfk1" align="center">
	<p>￥1180.00</p>
	</div>
<div class="spcz" align="center">
	<p><a href="kong.html">交易成功</a></p>
	<p><a href="kong.html">订单详情</a></p>
	<p><a href="kong.html">申请售后</a></p>
	<p><a href="kong.html">投诉商家</a></p>
	</div>
<div class="jycz" align="center">
	<p class="page-item page-page" active><a href="kong.html">评价</a></p>
	<p><a href="kong.html">再次购买</a></p>
	</div>
	</div>	
	</div>	
	

	
	
</div>
<div class="page">
 <div class="page-box">
 <span class="page-item page-page" active><a href="kong.html">上一页</a></span>
 <span class="page-item page-page" active><a href="kong.html">下一页</a></span>
 <span class="page-item page-prev"><a href="kong.html"><</a></span>
 <span class="page-item page-page" data-page="1"><a href="kong.html">1</a></span>
 <span class="page-item page-page" active><a href="kong.html">2</a></span>
 <span class="page-item page-page" data-page="3"><a href="kong.html">3</a></span>
 <span class="page-item page-prev"><a href="kong.html">></a></span>
 <span class="page-item page-page" active><a href="kong.html">跳转</a></span>
 <span class="page-item page-page" active><a href="kong.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
 <span  class="page-item page-page">页</span>
 </div></div>
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