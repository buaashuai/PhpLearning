<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>高级教程</title>
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

echo '<div class="demo"><hr class="spiltLine"/>多维数组...</div>';

$cars = array
(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    for ($col = 0; $col < 3; $col++) {
        echo "\t".$cars[$row][$col]."\t";
    }
    echo "</ul>";
}

echo '<div class="demo"><hr class="spiltLine"/>日期格式化...</div>';

echo "你好 ";
echo "今天是 " . date("Y/m/d") . "<br>";
echo "今天是 " . date("Y.m.d") . "<br>";
echo "今天是 " . date("Y-m-d") . "<br>";
echo "今天是 " . date("Y年m月d日") . "<br>";
echo "今天是 " . date("l"). "<br>";
date_default_timezone_set("Asia/Shanghai");
echo "现在时间是 " . date("H:i:sa"). "<br>";
$d=mktime(9, 12, 31, 6, 10, 2015);
echo "创建日期是 " . date("Y-m-d h:i:sa", $d). "<br>";
$d=strtotime("10:38pm April 15 2015");
echo "创建日期是 " . date("Y-m-d h:i:sa", $d). "<br>";

echo '<div class="demo"><hr class="spiltLine"/>文件操作...</div>';
echo readfile("webdictionary.txt"). "<br>". "<br>";

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Bill Gatesdfs\n";
fwrite($myfile, $txt);
$txt = "Stevsfsfde Jobs\n";
fwrite($myfile, $txt);
fclose($myfile);

?>



<div><?php include 'footer.php';?></div>
</body>
</html>
