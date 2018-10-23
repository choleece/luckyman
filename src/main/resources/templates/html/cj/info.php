<?php
  header('Content-type: text/html; charset=utf-8');
$name=$_POST['name'];
    $con= mysql_connect("localhost", "root","1qazxsw2")or die("对不起，数据库服务连接失败");
   mysql_select_db("choujiang");

echo "<meta http-equiv=refresh content='1800'>";
  mysql_query('SET NAMES UTF8');   
 $sql= "INSERT INTO log VALUES(null,'{$name}',now())";
$result = mysql_query($sql) or die("Error in query: $query. ".mysql_error());  

$sql= "UPDATE list SET status='已抽' where concat_ws('-',num,name)='{$name}'";

$result = mysql_query($sql)or die("Error in query: $query. ".mysql_error());
mysql_close($con);  

  /**
 
	*	  if($ip!="10.43"){
	*		echo "<center>非贵州区内网络，3秒后自动跳转至顺丰官网。</center>";
	*		echo "<script>alert('非贵州区内网络，3秒后自动跳转至顺丰官网。')</script>";
	*	  	header("refresh:3;url=http://www.sf-express.com");
	*		break;}
  
   */
  ?> 