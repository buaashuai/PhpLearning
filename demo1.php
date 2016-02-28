<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>基础教程</title>
</head>
<style type="text/css">
    body,html,div{padding:0;margin:0;}
    body{
        width:80%;
        margin:0 auto 0 auto;
    }
    .demo{
        height: 50px;
        color:red;
        line-height: 50px;
    }
    .spiltLine{
        width:100%;
        color:aquamarine;
    }
</style>
<body>
<?php

header("Content-type: text/html; charset=utf-8");

echo '<div class="demo"><hr class="spiltLine"/>global关键字用于在函数内访问全局变量...</div>';

$x=5;
$y=10;
print $x+$y;

$str='haha';

function test(){
    global $str, $x;    //global关键字用于在函数内访问全局变量
    echo "<br/>$str<br/>$x";
    $x++;
}
tEst(); //函数的大小写不敏感，变量的大小写敏感
print "<br/>$str<br/>$x<br/>";

echo '<div class="demo"><hr class="spiltLine"/>$GLOBALS[index] 的数组中存储了所有的全局变量。下标存有变量名。这个数组在函数内也可以访问，并能够用于直接更新全局变量。...</div>';

$xx=5;
function test2(){
    $GLOBALS['xx']=2;
    $GLOBALS['x']="hello";// $GLOBALS[index] 的数组中存储了所有的全局变量。下标存有变量名。这个数组在函数内也可以访问，并能够用于直接更新全局变量。

}
test2();
echo "$xx<br/>$x<br/>";

echo '<div class="demo"><hr class="spiltLine"/>函数执行结束之后变量不销毁，使用static关键字...</div>';

function test3($y){
    static $x=0; //当函数完成/执行后，会删除所有变量。不过，有时我需要不删除某个局部变量。声明变量时使用 static 关键词即可使函数执行结束之后变量不销毁
    echo $x++,'   ',$y,'<br/>';
}
test3('a');test3('b');test3('c');

echo '<div class="demo"><hr class="spiltLine"/>echo - 能够输出一个以上的字符串，print - 只能输出一个字符串，并始终返回 1,var_dump() 会返回变量的数据类型和值...</div>';

$str1="kle";
$str2="w3c.school";
$cars=array("宝马","保时捷","奥迪");
echo $str1,",","strsdfsdfsdf $str2","   ","my car is {$cars[2]}";
print "my car is {$cars[1]}<br/>";
var_dump($cars);
var_dump($str1);

echo '<div class="demo"><hr class="spiltLine"/>PHP 对象...</div>';

class Car
{
    var $color;
    function Car($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}

function print_vars($obj) {
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "\t$prop = $val\n";
    }
}

$aoDi = new Car("black");

echo "奥迪A6: Properties</br>";
print_vars($aoDi);

echo '<div class="demo"><hr class="spiltLine"/>PHP全局常量的定义...</div>';

define("hello","<br/>hello world!",true);//false表示对大小写敏感,true表示对大小写不敏感
echo hellO;
echo hello;

echo '<div class="demo"><hr class="spiltLine"/>字符串，strlen计算长度，strpos查找字符/字符串 位置...</div>';

$str3="hello";$str4="world";
echo $str3."    ".$str4;
echo strlen($str3);
echo "<br/>",strpos($str3,"lo");

echo '<div class="demo"><hr class="spiltLine"/>for+foreach 循环输出...</div>';

$x=array("a"=>"中国","b"=>"美国");
$y=array("c"=>"英国","d"=>"法国");
$z=array("aa","bb","cc");
$x+=$y;
var_dump($x);
echo "<br/>".$x["a"].",".$z[1]."    ".count($z)."<br/>";
for($t=0;$t<count($z);$t++){
    echo $z[$t].",";
}
echo '<br/>';
foreach ($x as $key=>$value) {
    echo $key."=>".$value;
}

echo '<div class="demo"><hr class="spiltLine"/>PHP 函数+数组 ...</div>';

function printKeyValue($x){
    foreach ($x as $key=>$value) {
        echo $key."=>".$value.'<br/>';
    }
    return "你好";
}
$y=array("d"=>"英国","c"=>"法国");
$z=array("dd","bb","cc");
$re = printKeyValue($y);
krsort($y);
printKeyValue($y);
echo $re."<br/>".$y['d'];

echo '<div class="demo"><hr class="spiltLine"/>PHP全局变量...</div>';

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br/>".'这是第 “ '  . __DIR__ . ' ” 行';
?>

</body>
</html>