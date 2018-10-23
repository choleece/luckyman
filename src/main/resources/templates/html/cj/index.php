<!DOCTYPE html>
<html>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>jquery随机抽奖</title>
	<head>
	<script id="jquery_172" type="text/javascript" class="library" src="js/jquery-1.7.2.min.js"></script>
<?php
$name=$_GET['id'];
	 $con= mysql_connect("localhost", "root","123456")or die("对不起，数据库服务连接失败");
      mysql_select_db("carpart");


    mysql_query('SET NAMES UTF8');  

$check_query = mysql_query("select num,name from list where status='0'");
$arr = array();
while ($row = mysql_fetch_row($check_query)) {
   $arr[] = $row[0]."-".$row[1];


}

?>
	<script type="text/javascript">
		
	$(function(){
		
   var alldata =<?php echo json_encode($arr);?>;
		var num = alldata.length - 1;
		var show = $("#show");
		var btn = $("#btn");
		var bt = $("#bt");
	     //var image=$("#image");
		var open = false;
	    var openn = false;
		function change(){
			var randomVal = Math.round(Math.random() * num);
			var prizeName = alldata[randomVal];
			show.text(prizeName);
		}
		
		function run(){
			if(!open){
				timer=setInterval(change,30);
				if(alldata.length=='1'){alert("只剩下一个，不用抽了");} 
				else{
				btn.removeClass('start').addClass('stop').text('停止');
				open = true;}
			}else{
			    var name=document.getElementById("show").innerText;

			   remove(alldata,name);
				clearInterval(timer);
				btn.removeClass('stop').addClass('start').text('开始抽奖');
				open = false;
			}
		}
		
		

btn.click(function(){run();})

	
		
function remove(array,index)
{ 

  for(var i=0;i<array.length;i++)
  { 
 if(array[i]==index){
   
     for( var j=i;j<array.length;j++)
  { 
        
   array[j]=array[j+1]; 
  } 
   
   array.length=array.length-1; 
var name=document.getElementById("show").innerText;
 $.ajax({
			url:"info.php",
			type: "POST",
			async: true,
			data: {
				"name" : name
},
			dataType: "text",
	
		error: function(httpResqustObj,errorMsg) {
				alert("错误信息："+errorMsg);
			}
});
       
   }
  
  } 

 return array; 
}

	function runn(){
			if(!openn){
					
				bt.removeClass('start').addClass('stop').text('停止签到');
					openn = true;
  $('#image').css('background-image','url(login/images/code.png)')
		
			}else{
			  location.reload();
				bt.removeClass('stop').addClass('start').text('开始签到');
			
					openn = false;
			}}
bt.click(function(){runn();})
		




	}
	
	
	
	)
		
	</script>
	<style>
	body{     background:url("login/images/new.jpg") no-repeat;
  background-size: 100%;}
	.title{width:500px; margin:50px auto; font-family:"微软雅黑";}
	.wrap{ width:300px; margin:100px auto; font-family:"微软雅黑";}
	.image{width:350px; height:450px ; margin:0px auto;position:fixed;top:100px;right:50px;Background-size:100% ;}

	.show{ width:300px; height:300px; background-color:#9AC0CD; line-height:300px; text-align:center; color:#fff; font-size:28px; -moz-border-radius:150px; -webkit-border-radius:150px; border-radius:150px; background-image: -webkit-gradient(linear,0% 0%, 0% 100%, from(#FF9600), to(#F84000), color-stop(0.5,#fb6c00)); -moz-box-shadow:2px 2px 10px #BBBBBB; -webkit-box-shadow:2px 2px 10px #BBBBBB; box-shadow:2px 2px 10px #BBBBBB;}
	.btn a{ display:block; width:120px; height:50px; margin:30px auto; text-align:center; line-height:50px; text-decoration:none; color:#fff; -moz-border-radius:25px; -webkit-border-radius:25px; border-radius:25px;}
	.bt a{ display:block; width:120px; height:50px; margin:30px auto; text-align:center; line-height:50px; text-decoration:none; color:#fff; -moz-border-radius:25px; -webkit-border-radius:25px; border-radius:25px;z-index: 99;position: fixed;	top: 20px; right:170px;}
	.bt a.start{ background:#80b600;}
	.bt a.start:hover{ background:#75a700;}
	.bt a.stop{ background:#00a2ff;}
	.bt a.stop:hover{ background:#008bdb;}
	.btn a.start{ background:#80b600;}
	.btn a.start:hover{ background:#75a700;}
	.btn a.stop{ background:#00a2ff;}
	.btn a.stop:hover{ background:#008bdb;}
	</style>
	
	</head>

	<body>
	   <div class="title"> <h1 ><?php echo $name;?><h1></div>
	   <div class="bt"><a href="javascript:void(0)" class="start" id="bt">开始签到</a></div>
	    <div class="image" id="image"></div>
	<div class="wrap">
		<div class="show" id="show">已签入：<?php echo sizeof($arr); ?>人</div>
		<div class="btn">
			<a href="javascript:void(0)" class="start" id="btn">开始抽奖</a>
			<audio id="aaa" src="bk.wav" autoplay controls loop="loop"></audio>
		</div>
	</div>
<div style="text-align:center;clear:both">

</div>

	</body>
</html>