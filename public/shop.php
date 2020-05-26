<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购物车</title>
<!--    导航栏css样式  勿动-->
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="./layui/layui.js"></script>
    <link rel="stylesheet" href="./css/shop.css">
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
<?php session_start(); ?>
<div class="header">
<ul class="layui-nav" lay-filter="">
    <li class="sign"><a href=""><img src="images/logo.png" width="100px" height="50px"></a></li>
    <li class="layui-nav-item" style="margin-left: 100px"><a href="index.php">首页</a></li>
    <li class="layui-nav-item "><a href="details.php">U定制</a></li>
    <li class="layui-nav-item"><a href="my_inn.php">我的客栈</a></li>
    <li class="layui-nav-item"><a href="gonglue.php">旅游攻略</a></li>
    <li class="layui-nav-item"><a href="">会员中心</a></li>
    <li class="layui-nav-item layui-this" style="margin-left: 20px ; margin-right: 20px"><a href="shop.php"><img src="images/购物车.png" width="20px" height="20px"></a></li>

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

<!--  这下面写HTML代码-->

<!-- 条目中可以是任意内容，如：<img src=""> -->
<div id="yi">

<div id="da">
<div id="daohang">
<ul>
    <li class="zt"><a href="my_inn.php"><font color="#EE7D00">全部商品</font></a></li>
    <li class="zt"><a href="#">降价商品</a></li>
    <li class="zt"><a href="#">库存紧张</a></li>
    
</ul>
</div>
</div>

<div id="er">
    <?php
    require_once 'autoload.php';
    $username=@$_SESSION['username'];
    $user=new Db('user');
    $link=$user->link;
    $user_sql="SELECT * FROM user where uname='$username'";
    $select_result=mysqli_query($link,$user_sql);
    $select_results=mysqli_fetch_assoc($select_result);
    $user_id=$select_results['user_id'];
    $shopping_cart=new Db('shopping_cart');
    $shopping_sql="SELECT * FROM shopping_cart where user_id='$user_id' ";
    $shopping_cart_result=mysqli_query($link,$shopping_sql);
    while ($shopping_cart_results=mysqli_fetch_assoc($shopping_cart_result)) {
        $status = $shopping_cart_results['buy'];
        $pro_id = $shopping_cart_results['pro_id'];
    $hot_area=new Db('hot_area');
    $hot_area_sql="SELECT * FROM hot_area where pro_id='$pro_id'";
    $hot_area_result=mysqli_query($link,$hot_area_sql);
    while ($hot_area_results=mysqli_fetch_assoc($hot_area_result)) {


    ?>
<div id="ry">

<ul>
    <li><p class="one"></p></li>
    <li><img src="<?php echo $hot_area_results['pro_path'] ?>" width="125" height="130"/></li>
    <li><a href="#"><?php echo $hot_area_results['pro_name'] ?></a></li>
    <li><a href="#">规格:五星级</a><br/><a href="#">日期：6天</a></li>
    <li><a href="#"><p style="color:#333; font-size:16px" >￥<?php echo $hot_area_results['price'] ?></p></a></li>
    <li><a href="#"><p class="on"></p></a></li>
    <li><a href="#"><p style="color:#C33; font-size:16px" >￥<?php echo $hot_area_results['price'] ?></p></a></li>
    <li><a href="fukuan.php?user_id=<?php echo $user_id;?>" style="color: red"> <?php if ($status==1){ echo '未付款';}else{echo '已付款';} ?></a><br/><a href="shopping_delete.php?user_id=<?php echo $user_id;?>&&pro_id=<?php echo $pro_id;?>">删除</a></li>
</ul>
</div>
    <?php }?>
    <?php }?>
</div>

<div id="duo">
<div id="dz">
<ul>
    <li><p class="one"></p></li>
    <li><a href="#">全选</a></li>
    <li><a href="#">删除</a></li>
</ul>
</div>
<div id="dd">
</div>
<div id="dy">
<ul>
     <li><a href="#">已选商品&nbsp;&nbsp;件</a></li>
     <li><a href="#">合计（不计运费）</a></li>
     <li><input class="button"  value="结算"/></li>
  </ul>
</div> 
</div> 
<div id="san">
 <p align="center" style="font-size:28px; color:#F63">猜你喜欢</p>
 </div>
<div id="si">
<ul>
    <li><img src="images/旅游2.jpg" width="235" height="250"/>
    <a href="#"><p align="right" class="jg">￥1944</p></a>
    <a href="#"><p align="center" class="z">自驾|象岛芭提雅3日</p>
    </a>
    </li>
    <li><img src="images/旅游2.png" width="235" height="250"/>
    <a href="#"><p align="right" class="jg">￥944</p></a>
    <a href="#"><p align="center" class="z">自驾|美丽时光3日</p>
    </a>
    </li>
    <li><img src="images/旅游1.jpg" width="235" height="250"/>
    <a href="#"><p align="right" class="jg">￥2944</p></a>
    <a href="#"><p align="center" class="z">跟团|海角天涯6日</p>
    </a>
    </li>
    <li><img src="images/旅游3.png" width="235" height="250"/>
    <a href="#"><p align="right" class="jg">￥1944</p></a>
    <a href="#"><p align="center" class="z">日本|芭提雅4日</p>
    </a>
    </li> 
</ul>
</div>  
  <div id="wu">
<ul>
    <li><img src="images/旅游1.jpg" width="235" height="250"/>
    <a href="#"><p align="right" class="jg">￥1944</p></a>
    <a href="#"><p align="center" class="z">泰国|象岛芭提雅3日</p>
    </a>
    </li>
    <li><img src="images/旅游2.png" width="235" height="250"/>
    <a href="#"><p align="right" class="jg">￥944</p></a>
    <a href="#"><p align="center" class="z">自驾|芭提雅2日</p>
    </a>
    </li>
    <li><img src="images/旅游3.png" width="235" height="250"/>
    <a href="#"><p align="right" class="jg">￥2944</p></a>
    <a href="#"><p align="center" class="z">跟团游|缤纷桂英7日</p>
    </a>
    </li>
    <li><img src="images/旅游2.jpg" width="235" height="250"/>
    <a href="#"><p align="right" class="jg">￥1944</p></a>
    <a href="#"><p align="center" class="z">自驾|丝凡达6日</p>
    </a>
    </li>
    
</ul>
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