<html>

    <head>
        <meta charset="utf-8">
        <title>cg</title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="../easyui/jquery.min.js"></script>
        <script type="text/javascript" src="../../easyui/jquery.easyui.min.js"></script>
        <script type="text/javascript" src="keyboard/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="keyboard/jquery.keypad.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        	$("#down_area").load("front.php?community="+$("#cid").val()+"&gid="+$("#gid").val());
			console.log($("#cid").val()) ;       
     
        });
  
		</script>
    </head>
	<body>
	
	<?php if(!isset($_REQUEST['cid'])){echo "no cid!"; exit;} else{$cid=$_REQUEST['cid'];}?>
	<?php if(!isset($_REQUEST['gid'])){echo "no gid!"; exit;} else{$gid=$_REQUEST['gid'];}?>
	<input id="cid" type="hidden" value="<?php echo $cid;?>">
	<input id="gid" type="hidden" value="<?php echo $gid;?>">
	   <div id="bg">
	   
	    <!-- title -->
		<div id="title_bg">
			<div id="blank1">&nbsp;</div>
			<div id="title_text">幸福里社区</div>
			<div id="date">2014-01-24</div>
		</div>
		
		<!-- video -->
		<div id="video" >
		<img src="images/video.jpg">
		<!-- 
		<embed width="1080" height="720" src="http://114.113.146.18:9900/player.swf?type=http&file=y01.flv"></embed>
		 -->
		</div>
		<div class="blank1">&nbsp;</div>
		
		<div id="down_area"></div>
		
	   </div>
	    
    </body>
</html>