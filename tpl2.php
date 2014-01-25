<?php require_once 'get_content.php';?>
<?php $catid=$_REQUEST['catid'];?>
<input id="catid" type="hidden" value="<?php echo $catid;?>">

	<div id="content_title_area">
		<table width=100%>
			<tr>
				<td id="catname" class="title2">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo get_cat_name($catid);?></td>
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
			<?php echo get_content($_REQUEST['content_id']);?>
			<div class="blank1">&nbsp;</div>
			</div>
		</div>
		
		
		
	</div>
	
	<div class="blank1">&nbsp;</div>

    </div>
    
    
    
    
<script type="text/javascript"> 
$("#return_button").click(function(){
	 $("#down_area").load("tpl1.php?catid="+$("#catid").val());

});
</script>