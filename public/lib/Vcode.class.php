<?php



class Vcode
{
    //成员方法
    private $width;//设置验证码宽度
    private $height;//设置验证码高度
    private $image;//设置验证码对象
    private $font;//设置字体
    private $codeNum;//设置输出的字符数
    function __construct($width=70,$height=40,$codeNum=4)//构造方法，创建实例时自动调用，赋初值
    {
        //开启session
        session_start(); //为了保存数据与用户输入的数据进行对比
        $this->width = $width;
        $this->height = $height;
        $this->codeNum = $codeNum;
    }
    function __toString() //__toString方法不能使用private等关键词限制
    {
        //创建图像
        $this->getImage();
        //创建像素点
        $this->setPixel();
        //创建干扰线
        $this->setLine();
        //输出字体
        $this->setChar();
        //输出图像
        $this->outputImage();
        //保存会话给浏览器
        $_SESSION['code']=$this->font;
        return '';  //__toString()方法必须返回一个字符串类型
    }

    private function getImage(){
        //创建画布
        $this->image=imagecreatetruecolor($this->width,$this->height);
        //填充画布颜色
        $back=imagecolorallocate($this->image,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
        //填充背景
        imagefill($this->image,0,0,$back);
        //绘制边框背景颜色
        $bordercolor=imagecolorallocate($this->image,255,0,0);
        //为背景设置边框颜色
        imagerectangle($this->image,0,0,$this->width-1,$this->height-1,$bordercolor);
    }
    private function setPixel(){


        for ($i=0;$i<100;$i++){
            //设置像素点颜色
            $pixelcolor=imagecolorallocate($this->image,mt_rand(150,200),mt_rand(150,200),mt_rand(150,200));
            //设置像素点
            imagesetpixel($this->image,mt_rand(0,$this->width),mt_rand(0,$this->height),$pixelcolor);
        }
    }
    private function setLine(){
        //设置线条颜色
        for ($i=0;$i<=4;$i++){
            $linecolor=imagecolorallocate($this->image,mt_rand(150,200),mt_rand(150,200),mt_rand(150,200));
            imageline($this->image,mt_rand(0,$this->width/2-1),mt_rand(0,$this->height/2-1),mt_rand($this->width/2-1,$this->width),mt_rand($this->height/2-1,$this->height),$linecolor);
        }
    }
    private function setChar(){
        //传入字符串
        $str='abcdefghigkLmaokqrstuvwxyz147258369';
        //获取随机的四个字符
        for ($i=0;$i<$this->codeNum;$i++){
            $this->font.=$str{mt_rand(0,strlen($str)-1)};
        }

        for ($i=0;$i<strlen($this->font);$i++){
            $fontColor=imagecolorallocate($this->image,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
            //设置字体左上角的Y点
            $x=$this->width/$this->codeNum*$i+mt_rand(3,8);
            $y=mt_rand(10,$this->height/2);
            //写入字体
            imagechar($this->image,mt_rand(3,5),$x,$y,$this->font{$i},$fontColor);
        }
    }
    private  function  outputImage(){
        header('Content-type:image/jpeg');
        imagejpeg($this->image);
    }
    function __destruct(){
        imagedestroy($this->image);

    }
}
//$a=new Vcode();
//echo $a;