<?php $catname="保修预约";?>

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
			<table align="center" ><tr>
			<td><input type="text" id="block" style="width:100px; height:50px;font-size: 30pt"/></td>
			<td style="font-size: 36pt">号楼&nbsp;&nbsp;</td>
			<td><input type="text" id="unit" style="width:100px; height:50px;font-size: 30pt"/></td>
			<td style="font-size: 36pt">单元&nbsp;&nbsp;</td>
			<td><input type="text" id="number" style="width:100px; height:50px;font-size: 30pt"/></td>
			<td style="font-size: 36pt">号&nbsp;&nbsp;</td>
			</tr></table>
			<div class="blank1">&nbsp;</div>
			</div>
		</div>
		<div class="blank1">&nbsp;</div>
		<div class="repair_form">
			<!-- text area -->
			<div class="text_area">
			<div class="blank1">&nbsp;</div>
			<table align="center" border=1px>
				<tr>
					<td style="font-size: 36pt">马桶</td>
					<td> <input type="checkbox" id="" style="zoom:480%;"> </td>
					<td style="font-size: 36pt">家具</td>
					<td><input type="checkbox" id="2" style="zoom:480%;" /></td>
					<td style="font-size: 36pt">墙壁</td>
					<td><input type="checkbox" id="3" style="zoom:480%;"/></td>
				</tr>
				<tr>
					<td style="font-size: 36pt">马桶</td>
					<td> <input type="checkbox" id="" style="zoom:480%;"> </td>
					<td style="font-size: 36pt">家具</td>
					<td><input type="checkbox" id="2" style="zoom:480%;" /></td>
					<td style="font-size: 36pt">墙壁</td>
					<td><input type="checkbox" id="3" style="zoom:480%;"/></td>
				</tr>
			
			</table>
			<div class="blank1">&nbsp;</div>
			</div>
		</div>
		
		
		
		
	</div>
	
	<div class="blank1">&nbsp;</div>

    </div>
    
    
    
    
<script type="text/javascript"> 
$("#return_button").click(function(){
	$("#down_area").load("front.php");
});

$(function () {
	$('#block').keypad();
	$('#unit').keypad();
	$('#number').keypad();
});


</script>

<style type="text/css">
@import "keyboard/jquery.keypad.css";
</style>



