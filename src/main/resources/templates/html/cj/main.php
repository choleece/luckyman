<!DOCTYPE html>
<html>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>jquery随机抽奖</title>
	<head>
	<script id="jquery_172" type="text/javascript" class="library" src="js/jquery-1.7.2.min.js"></script>
<script>
var idTmr;
        function  getExplorer() {
            var explorer = window.navigator.userAgent ;
            //ie 
            if (explorer.indexOf("MSIE") >= 0) {
                return 'ie';
            }
            //firefox 
            else if (explorer.indexOf("Firefox") >= 0) {
                return 'Firefox';
            }
            //Chrome
            else if(explorer.indexOf("Chrome") >= 0){
                return 'Chrome';
            }
            //Opera
            else if(explorer.indexOf("Opera") >= 0){
                return 'Opera';
            }
            //Safari
            else if(explorer.indexOf("Safari") >= 0){
                return 'Safari';
            }
        }
        function method1(tableid) {//整个表格拷贝到EXCEL中
            if(getExplorer()=='ie')
            {
                var curTbl = document.getElementById(tableid);
                var oXL = new ActiveXObject("Excel.Application");

                //创建AX对象excel 
                var oWB = oXL.Workbooks.Add();
                //获取workbook对象 
                var xlsheet = oWB.Worksheets(1);
                //激活当前sheet 
                var sel = document.body.createTextRange();
                sel.moveToElementText(curTbl);
                //把表格中的内容移到TextRange中 
                sel.select;
                //全选TextRange中内容 
                sel.execCommand("Copy");
                //复制TextRange中内容  
                xlsheet.Paste();
                //粘贴到活动的EXCEL中       
                oXL.Visible = true;
                //设置excel可见属性

                try {
                    var fname = oXL.Application.GetSaveAsFilename("Excel.xls", "Excel Spreadsheets (*.xls), *.xls");
                } catch (e) {
                    print("Nested catch caught " + e);
                } finally {
                    oWB.SaveAs(fname);

                    oWB.Close(savechanges = false);
                    //xls.visible = false;
                    oXL.Quit();
                    oXL = null;
                    //结束excel进程，退出完成
                    //window.setInterval("Cleanup();",1);
                    idTmr = window.setInterval("Cleanup();", 1);

                }

            }
            else
            {
				
                tableToExcel(tableid);
            }
        }
        function Cleanup() {
            window.clearInterval(idTmr);
            CollectGarbage();
        }
        var tableToExcel = (function() {
              var uri = 'data:application/vnd.ms-excel;base64,',
              template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>',
                base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) },
                format = function(s, c) {
                    return s.replace(/{(\w+)}/g,
                    function(m, p) { return c[p]; }) }
                return function(table, name) {
                if (!table.nodeType) table = document.getElementById(table)
                var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
                window.location.href = uri + base64(format(template, ctx))
              }
            })()
  
</script>
		<style>
	body{     background:url("login/images/new.jpg") no-repeat;
  background-size: 100%;}
	.title{width:500px; margin:50px auto; font-family:"微软雅黑";}
	.wrap{ width:300px; margin:100px auto; font-family:"微软雅黑";}
	.image{width:350px; height:450px ; margin:0px auto;position:fixed;top:100px;right:50px;Background-size:100% ;}

	.show{ width:300px; height:300px; background-color:#9AC0CD; line-height:300px; text-align:center; color:#fff; font-size:28px; -moz-border-radius:150px; -webkit-border-radius:150px; border-radius:150px; background-image: -webkit-gradient(linear,0% 0%, 0% 100%, from(#FF9600), to(#F84000), color-stop(0.5,#fb6c00)); -moz-box-shadow:2px 2px 10px #BBBBBB; -webkit-box-shadow:2px 2px 10px #BBBBBB; box-shadow:2px 2px 10px #BBBBBB;}
	.btn a{ display:block; width:120px; height:50px; margin:30px auto; text-align:center; line-height:50px; text-decoration:none; color:#fff; -moz-border-radius:25px; -webkit-border-radius:25px; border-radius:25px;}
	.bt a{ display:block; width:80%; height:100%; margin:30px auto; text-align:center; line-height:50px; text-decoration:none; color:#fff; -moz-border-radius:25px; -webkit-border-radius:25px; border-radius:25px;z-index: 99;position: fixed;	top: 20px; right:170px;}
	.bt a.start{ background:#80b600;}
	.bt a.start:hover{ background:#75a700;}
	.bt a.stop{ background:#00a2ff;}
	.bt a.stop:hover{ background:#008bdb;}
	.btn a.start{ background:#80b600;}
	.btn a.start:hover{ background:#75a700;}
	.btn a.stop{ background:#00a2ff;}
	.btn a.stop:hover{ background:#008bdb;}
	.button{ background:#80b600;}
	.button:hover{ background:#008bdb;}
	table.hovertable {
   color: #fff;
  font-family: 'Helvetica Neue', Helvetica, 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif;
    font-size:12px;
   
    border-width: 1px;

    border-collapse: collapse;
	width:100%;
	align:center;
}
table.hovertable th {
    background-color:#336666;
    border-width: 1px;
    padding: 8px;
    border-style: solid;

	  color: #ffffdf;
}
table.hovertable tr {

}
table.hovertable td {
    border-width: 1px;
    padding: 8px;
    border-style: solid;

	width: 10%;
	
}
	</style>
	
	</head>

	<body>
	   <div class="title"> <h1 >随机抽后台<h1></div>
	   <div class="bt">
	       <?php
  

    $con= mysql_connect("localhost", "root","1qazxsw2")or die("对不起，数据库服务连接失败");
   mysql_select_db("choujiang");
   mysql_query('SET NAMES UTF8');
echo "<center><font size='6' color ='black'>登记明细</font></center> <div class='cheack'>
<input type='button' class='button'  id='export1' value='导出数据' onclick='method1(resultTable)' />  &nbsp;&nbsp;&nbsp;<input type='button' class='button'  id='export2' value='清空系统数据' onclick=\"window.location.href='del.php?name=123456'\" /></div>" ;




 $check_query = mysql_query("select  * from list   order by status");

 
echo "<table  class='hovertable' id='resultTable' name='resultTable'>";

   echo "
   <tr>
             <th>抽奖好</th>
             <th>姓名</th>
			 <th>手机号</th>
			 <th>签入时间</th>
             <th>状态</th>

             </tr>";                                                     
   
 while ($myrow = mysql_fetch_row($check_query)){    
 

  $car_id = substr_replace($myrow[2], '********', 6, 8);


  

       printf("<tr onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#ababab'\">
						   <td>%s</td>
                           <td>%s</td>
                           <td>%s</td>
						   <td>%s</td>
                           <td>%s</td>
						
					   ",$myrow[1],$myrow[2], $myrow[3],$myrow[4],$myrow[5]);
            
     echo "</tr>\n";  	
	 }





?>
	       
	   </div>
	    <div class="image" id="image"></div>

<div style="text-align:center;clear:both">

</div>

	</body>
</html>