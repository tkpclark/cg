<?php $catname="手机票务";?>
<script type="text/javascript" src="common.js"></script>

	<div id="content_title_area">
		<table width=100%>
			<tr>
				<td id="catname" class="title2">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $catname;?></td>
				<td class="return" align="right"><img id="return_button" src="images/button01.png"></img>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
		</table>
	</div>
	
	<div class="blank1">&nbsp;</div>
	
	<div id="content">
		
		<!-- text board -->
		<div class="text_bg">
			<!-- text area -->
			<div class="text_area">
			<div class="blank1">&nbsp;</div>
			<?php
			require_once 'get_content.php';
			
			$rows = get_list($_REQUEST['community'],$catname);
			if($rows)
			{
				foreach ($rows as $row)
				{
					echo "<li id='content_$row[0]'>$row[1]</li>";		
					echo "<script>$('#content_".$row[0]."').click(function(){	$('#down_area').load('ticket_content.php?content_id=".$row[0]."')});</script>";
				}
			}
			?>
			<div class="blank1">&nbsp;</div>
			</div>
		</div>
		
		
		
	</div>
	
	<div class="blank1">&nbsp;</div>

    </div>
    
    
    
    
<script type="text/javascript"> 
$("#return_button").click(function(){
	$("#down_area").load("front.php?community="+$("#cid").val());


	
});
</script>