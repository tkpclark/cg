<?php require_once 'get_content.php';?>
<?php $catid=$_REQUEST['catid'];?>

<script type="text/javascript">
var t=0;
function go_front(){
	$("#down_area").load("front.php?gid="+$("#gid").val()+"&community="+$("#cid").val());
	clearTimeout(t);
}
function auto_return(){
	var duration=$("#duration").val()*1000;
	console.log("duration:"+duration);
	t=setTimeout("go_front()",duration);
}
auto_return();
</script>

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
			<?php
			$ask_type=$_REQUEST['ask_type'];
			
			if($ask_type=="cat")//请求栏目
			{
				$cat_type=-1;
				$rows = get_cat_info($catid,$cat_type);//$cat_type用于返回该cat的类型，1为文章类型，返回item列表，3为图片类型直接返回内容
				//echo "cattype:".$cat_type;
				if($cat_type=="1")//此为文章类型的栏目
				{
					if($rows)
					{
						foreach ($rows as $row)
						{
							//类别1：特征 文字列表，二级目录
							echo "<li id='content_$row[0]'>$row[1]</li>";
							//echo "<script>$('#content_".$row[0]."').click(function(){	$('#down_area').load('tpl2.php?catid=".$catid."&content_id=".$row[0]."')});</script>";
							echo "<script>$('#content_".$row[0]."').click(function(){	$('#down_area').load('tpl1.php?ask_type=item&catid=".$catid."&content_id=".$row[0]."')});</script>";
						}
					}
					else
					{
						echo "暂时还没有内容";
					}
				}
				if($cat_type=="3")//此为图片类型的栏目
				{
					if($rows)
					{
						eval("\$aa=".$rows['pictureurls'].";");
						for($i=0;$i<count($aa);$i++)
							echo "<img src='".$aa[0]['url']."'></img>";
						echo "<p>".$rows['content']."</p>";
					}
					else
					{
						echo "暂时还没有内容";
					}
				}
				
				?>
				<!-- 注册返回按钮 -->
				<script type="text/javascript"> 
				$("#return_button").unbind();
				$("#return_button").click(function(){
					go_front();
				});
				</script>
				<?php
			}
			if($ask_type=="item")//请求的是条目
			{
				echo get_content($_REQUEST['content_id']);
				?>
				<!-- 注册返回按钮 -->
				<script type="text/javascript"> 
				$("#return_button").unbind();
				$("#return_button").click(function(){
					$("#down_area").load("tpl1.php?ask_type=cat&catid=<?php echo $catid;?>");
				});
				</script>
				<?php
			}
			
			?>
			
			<div class="blank1">&nbsp;</div>
			</div>
		</div>
		
		
		
	</div>
	
	<div class="blank1">&nbsp;</div>

    </div>
    
    
    
    
