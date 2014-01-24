 <script type="text/javascript">
	$(document).ready(function(){
      

          $("#work").click(function(){
        	  $("#down_area").load("work.php?community="+$("#cid").val());
          });

          $("#announcement").click(function(){
        	  $("#down_area").load("announcement.php?community="+$("#cid").val());
          });

          $("#interact").click(function(){
        	  $("#down_area").load("interact.php?community="+$("#cid").val());
          });

          $("#property_tell").click(function(){
        	  $("#down_area").load("property_tell.php?community="+$("#cid").val());
          });

          $("#notice").click(function(){
        	  $("#down_area").load("notice.php?community="+$("#cid").val());
          });

          $("#map").click(function(){
        	  $("#down_area").load("map.php?community="+$("#cid").val());
          });

          $("#promotion").click(function(){
        	  $("#down_area").load("promotion.php?community="+$("#cid").val());
          });

          $("#traffic").click(function(){
        	  $("#down_area").load("traffic.php?community="+$("#cid").val());
          });

          $("#book").click(function(){
        	  $("#down_area").load("book.php?community="+$("#cid").val());
          });

          $("#ticket").click(function(){
        	  $("#down_area").load("ticket.php?community="+$("#cid").val());
          });
          
          $("#handbook").click(function(){
        	  $("#down_area").load("handbook.php?community="+$("#cid").val());
          });

          $("#repair").click(function(){
        	  $("#down_area").load("repair.php?community="+$("#cid").val());
          });
          

          
        });
</script>


	<!-- 房管市政 -->
	<div id="content_title_area">
		<table width=100%>
			<tr>
				<td class="title2">&nbsp;&nbsp;&nbsp;&nbsp;房管市政</td>
				<td align=right>
				<iframe name="weather_inc" src="http://tianqi.xixik.com/cframe/9" width="500" height="60" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
				</td>
			</tr>
		</table>
	</div>
	
	
	<div class="blank1">&nbsp;</div>
	
	<table id="fgsz_list">
		<tr>
			<td id="announcement"><img src="images/icon09.png"></img></td>
			<td id="handbook"><img src="images/icon10.png"></img></td>
			<td id="interact"><img src="images/icon11.png"></img></td>
			<td id="work"><img src="images/icon12.png"></img></td>
		</tr>
	</table>
	
	<div class="blank1">&nbsp;</div>
	
	
	<!-- 物业服务 -->
	<div id="property">
		<div class="blank1">&nbsp;</div>
		<table width="100%">
			<tr>
				<td class="title2" width="20%">&nbsp;&nbsp;&nbsp;&nbsp;物业服务</td>
				<td >
				<marquee>做人要厚道!做人要厚道!做人要厚道!</marquee> 
				</td>
			</tr>
		</table>
		<div class="blank1">&nbsp;</div>
	</div>
        
        
	<div class="blank1">&nbsp;</div>
	
	<table id="property_list" >
		<tr>
			<td width="70%" >
				<table id="property_left" width="100%">
					<tr>
						<td id="property_tell"><img src="images/icon01.png"></img></td>
						<td id="notice"><img src="images/icon02.png"></img></td>
						<td id="map"><img src="images/icon03.png"></img></td>
						<td id="repair"><img src="images/icon04.png"></img></td>
					</tr>
					<tr>
						<td>物业公示</td>
						<td>通知信息</td>
						<td>小区地图</td>
						<td>保修预约</td>
					</tr>
					<tr>
						<td id="promotion"><img src="images/icon05.png"></img></td>
						<td id="book"><img src="images/icon06.png"></img></td>
						<td id="traffic"><img src="images/icon07.png"></img></td>
						<td id="ticket"><img src="images/icon08.png"></img></td>
					</tr>
					<tr>
						<td>促销打折</td>
						<td>手机图书</td>
						<td>市政交通</td>
						<td>手机票务</td>
					</tr>
				</table>
			</td>
			<td>
				<img src="images/erweima.png">
				<p>更多优惠便利</p>
				<p>请下载app</p>
			</td>
		</tr>
	</table>


    </div>