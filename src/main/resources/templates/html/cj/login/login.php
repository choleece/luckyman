<?php
header('Content-type: text/html; charset=utf-8');
if(!isset($_POST['login'])){  
  echo "<script>location.href='index.html';</script>"; 
    
} 
session_start();

if($_SESSION['yzcode'] != $_POST['code'])
{
	echo "<center><font color='red'>验证码错误!</font></center>";
	echo "<center><a href='login.html'><img src='../image/login_1.png' width='240' height='80' border='0'  /></a></center>";
	exit;
}
$_SESSION['yzcode'] == rand(1,100000);
 $con= mysql_connect("localhost", "root","1qazxsw2")or die("对不起，数据库服务连接失败");
      mysql_select_db("choujiang");


    mysql_query('SET NAMES UTF8');  
    $account= $_POST['account'];
 $name= $_POST['name'];
 $tel= $_POST['tel'];
 if($account=='' || $name==''){
     echo "<script>location.href='index.html';</script>"; 
 }else{
    $cha="select * from list where num='{$account}' and name='{$name}'";
    $re=mysql_fetch_array(mysql_query($cha));
if( $re != null){echo "<script>alert('提交失败，".$account."及".$name."已存在，请勿重复提交，谢谢！'),history.back()</script>";}else{


$sql= "INSERT INTO list VALUES(null,'{$account}','{$name}','{$tel}',now(),'0')";
$result = mysql_query($sql) or die("Error in query: $query. ".mysql_error());  
mysql_close($con);  
if($result){
    echo "<body style='background-image: url(images/new.jpg);'></body>"; 
echo "<script>alert('提交成功');</script>"; 
 include('index.html'); 
}
else{
	echo "<script>alert('提交失败'),history.back()</script>";}}
 }

	


?>