<?php require_once 'get_content.php';?>
<html>

    <head>
        <meta charset="utf-8">
        <title>cg2</title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="../easyui/jquery.min.js"></script>
        <script type="text/javascript" src="../../easyui/jquery.easyui.min.js"></script>
        <script type="text/javascript" src="keyboard/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="keyboard/jquery.keypad.js"></script>
        <script type="text/javascript">
        
        var handler = function(){
        	var vlc = document.getElementById("vlc");
		    vlc.audio.volume=160;
		   // alert(vlc.audio.volume);
        	
        }
        
        setTimeout(handler,10000); 
        
        
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
			<div id="title_text"><?php echo get_cat_name($_REQUEST['cid']); ?></div>
			<div id="date">2014-01-24</div>
		</div>
		
		<!-- video -->
		<div id="video" >
		<!-- 
		<img src="images/video.jpg">
		
		<embed width="1080" height="720" src="http://114.113.146.18:9900/player.swf?type=http&file=y01.flv"></embed>
		 -->
		 <!--
		 <object type='application/x-vlc-plugin' pluginspage='http://www.videolan.org' id='vlc' events='True' width="1080" height="720">
	        <param name='mrl' value='mms://tv.jxgdw.com/jxtv1' />
	        <param name='volume' value='50' />
	        <param name='autoplay' value='true' />
	        <param name='loop' value='false' />
	        <param name='fullscreen' value='false' />
	        <param name="uiMode" value="invisible"	 /> 
	        <param name="ShowControls" value="false" />
            <param name="ShowStatusBar" value="false" />
            <param name="ShowDisplay" value="false" />
    	</object>
    	-->
    	<embed 
    	type="application/x-vlc-plugin" 
    	pluginspage="http://www.videolan.org" 
    	width="1080"
      	height="720"
        id="vlc"
    	mrl="mms://tv.jxgdw.com/jxtv1"/>
    	
    	
	<object classid="clsid:9BE31822-FDAD-461B-AD51-BE1D1C159921" codebase="http://download.videolan.org/pub/videolan/vlc/last/win32/axvlc.cab"></object>
		</div>
		<div class="blank1">&nbsp;</div>
		
		<div id="down_area"></div>
		
	   </div>
	    
    </body>
</html>
