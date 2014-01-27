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

	<div class="cat_name_area">
		<table class="cat_table" width="100%">
			<tr>
				<td class="title2">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo get_cat_name($_REQUEST['gid']);?></td>
				<td style="vertical-align:middle; text-align:right;font-size: 30pt;"><?php echo get_content_by_name("天气预报");?>
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
					//echo "<script>$('#cat_".$row[0]."').click(function(){	$('#down_area').load('tpl1.php?community=".$_REQUEST['gid']."&catid=".$row[0]."')});</script>";
					echo "<script>$('#cat_".$row[0]."').click(function(){	$('#down_area').load('tpl1.php?ask_type=cat&catid=".$row[0]."')});</script>";
				}
			}
			?>
			
			
		</tr>
	</table>
	
	<div class="blank1">&nbsp;</div>
	
	
	<!-- 物业服务 -->
	<div class="cat_name_area">
		<table  class="cat_table" >
			<tr>
				<td width="40%" >&nbsp;&nbsp;&nbsp;&nbsp;物业服务</td>
				<td style="font-size: 30pt;">
				<marquee><?php echo get_recom($_REQUEST['community'])?></marquee> 
				</td>
			</tr>
		</table>
	</div>
        
        
	<div class="blank1">&nbsp;</div>
	
	<table id="property_list" >
		<tr>
			<td width="80%" >
				
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
						echo "<script>$('#cat_".$row[0]."').click(function(){	$('#down_area').load('tpl1.php?ask_type=cat&catid=".$row[0]."')});</script>";
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
						echo "<script>$('#cat_".$row[0]."').click(function(){	$('#down_area').load('tpl1.php?ask_type=cat&catid=".$row[0]."')});</script>";
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
				<?php echo get_content_by_name("二维码区域");?>
			</td>
		</tr>
	</table>


    </div>
    
    
    