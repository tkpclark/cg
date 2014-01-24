<?php $catname="物业公示";?>
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
		<div height="10px">&nbsp;</div>
		<p align="center"><img src="images/button09.png">&nbsp;&nbsp;<img src="images/button10.png"></img></p>
		<div height="10px">&nbsp;</div>
		
		<!-- text board -->
		<div class="text_bg">
			<!-- text area -->
			<div class="text_area">
			<div class="blank1">&nbsp;</div>
			<?php
			require_once 'get_content.php';
			
			echo get_content($_REQUEST['content_id']);
			?>
			<div class="blank1">&nbsp;</div>
			</div>
		</div>
		
		
		
	</div>
	
	<div class="blank1">&nbsp;</div>

    </div>
    
    
    
    
<script type="text/javascript"> 
$("#return_button").click(function(){
	 $("#down_area").load("property_tell.php?community="+$("#cid").val());


	
});
</script>