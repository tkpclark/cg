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

<?php require_once 'get_content.php';?>
	<!-- 房管市政 -->
	<div id="content_title_area">
		<table width=100%>
			<tr>
				<td class="title2">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo get_cat_name($_REQUEST['gid']);?></td>
				<td align=right>
				<iframe name="weather_inc" src="http://tianqi.xixik.com/cframe/9" width="500" height="60" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
				</td>
			</tr>
		</table>
	</div>
	
	
	<div class="blank1">&nbsp;</div>
	
	<table id="fgsz_list">
		<tr>
		
			<?php 
			$rows = get_front_list($_REQUEST['gid']);
			if($rows)
			{
				foreach ($rows as $row)
				{
					echo "<td id='cat_$row[0]'><img src='$row[2]'></img></td>";
					//echo "<script>$('#cat_$row[0]').click(function(){	$('#down_area').load('$row[3]?community=".$_REQUEST['gid']."&catname='+$('#cid').val())});</script>";
					echo "<script>$('#cat_".$row[0]."').click(function(){	$('#down_area').load('tpl1.php?community=".$_REQUEST['gid']."&catid=".$row[0]."')});</script>";
					//echo "<script>$('#cat_".$row[0]."').click(function(){	$('#down_area').load('xxxx.php?community=xxx&catname=xxx)});</script>";
				}
			}
			?>
			
			
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
					<?php 
					$i=0;
					$rows = get_front_list($_REQUEST['community']);
					foreach ($rows as $row)
					{
						if(++$i>4) break;
						echo "<td id='cat_$row[0]'><img src='$row[2]'></img></td>";
						//echo "<script>$('#cat_$row[0]').click(function(){	$('#down_area').load('$row[3]?community=".$_REQUEST['gid']."&catname='+$('#cid').val())});</script>";
						echo "<script>$('#cat_".$row[0]."').click(function(){	$('#down_area').load('tpl1.php?community=".$_REQUEST['gid']."&catid=".$row[0]."')});</script>";
						//echo "<script>$('#cat_".$row[0]."').click(function(){	$('#down_area').load('xxxx.php?community=xxx&catname=xxx)});</script>";
					}
					?>
					</tr>
					<?php 
					$i=0;
					$rows = get_front_list($_REQUEST['community']);
					foreach ($rows as $row)
					{
						if(++$i>4) break;
						echo "<td>$row[1]</td>";
					}
					?>
					<tr>
					</tr>
					<?php 
					$i=0;
					foreach ($rows as $row)
					{
						if(++$i<5) continue;
						echo "<td id='cat_$row[0]'><img src='$row[2]'></img></td>";
						//echo "<script>$('#cat_$row[0]').click(function(){	$('#down_area').load('$row[3]?community=".$_REQUEST['gid']."&catname='+$('#cid').val())});</script>";
						echo "<script>$('#cat_".$row[0]."').click(function(){	$('#down_area').load('tpl1.php?community=".$_REQUEST['gid']."&catid=".$row[0]."')});</script>";
						//echo "<script>$('#cat_".$row[0]."').click(function(){	$('#down_area').load('xxxx.php?community=xxx&catname=xxx)});</script>";
					}
					?>
					<tr>
					<?php 
					$i=0;
					$rows = get_front_list($_REQUEST['community']);
					foreach ($rows as $row)
					{
						if(++$i<5) continue;
						echo "<td>$row[1]</td>";
					}
					?>
					</tr>
					<tr>

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