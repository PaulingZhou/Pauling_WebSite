<html>
<head>
<title>ZSH's web page!</title>
</head>
<meta charset="utf-8">
<body>
<?php
// comment used in php
echo "index.php in /mydata/index<br />";
echo "hello world<br />";
echo "my first cvm<br />";
$place = "上海";
echo "这里是$place<br />";
date_default_timezone_set("Asia/Shanghai");
echo "今天是 ". date("Y/m/d"). "<br />";
echo "当前时间：". date("h:i:sa"). "<br />";
echo "author:Pauling Zhou<br />";
echo htmlentities($_SERVER["PHP_SELF"]) . "<br/>";
function hi(){
    echo "Hello from function_hi()!";
    echo "<br/>";
}
hi();
include('hello_world.php');
if(function_exists("hello_world")){
    hello_world();
}else
    echo "function hello_world does not exist";
?>
<!--comment used in html--!>
</body>
</html>
