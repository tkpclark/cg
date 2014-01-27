<?php require_once 'get_content.php';?>

    <head>
        <meta charset="utf-8">
        <title>cg2</title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="../easyui/jquery.min.js"></script>
        <script type="text/javascript" src="../../easyui/jquery.easyui.min.js"></script>
        <script type="text/javascript" src="keyboard/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="keyboard/jquery.keypad.js"></script>
		
		<!-- 
		<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script language="javascript" src="http://revolunet.github.com/VLCcontrols/src/jquery-vlc.js"></script>
		<link rel="stylesheet" type="text/css" href="http://revolunet.github.com/VLCcontrols/src/styles.css" />
	 	-->


        <script type="text/javascript" language="javascript">

        function play(tgt) {
          //  var uri = "http://live.64ma.com/livePlay.asp?uid=279&amp;rn=b3a8NiaNibe9baZ88ZSS";
             var uri = "http://qqlive.dnion.com:1863/2515002412.flv?apptype=live&amp;pla=WIN&amp;time=1390830090&amp;cdn=zijian&amp;vkey=91AB32CA49F45608ABEFA90119620493D1FA61F4D23029098BC1DEF973DF135FC794708E87BCDABB";
            if (document.all) tgt += "_IE"
            var tgt = document.getElementById(tgt);
           // alert(tgt);
            if (document.all) tgt.playlist.add(uri,uri, new Array());
            else     tgt.playlist.add(uri,uri, "");
            tgt.playlist.play(); 
        }
		
        function display_date(){
        	
        	
        	var weekday=new Array(7);
        	weekday[0]="星期日";
        	weekday[1]="星期一";
        	weekday[2]="星期二";
        	weekday[3]="星期三";
        	weekday[4]="星期四";
        	weekday[5]="星期五";
        	weekday[6]="星期六";
        	
        	var d= new Date();
        	var mydate=d.getFullYear()+"年"+(d.getMonth()+1)+"月"+d.getDate()+"日 "+weekday[d.getDay()] ;
        	console.log(mydate);
        	$("#date").html(mydate);
        }
        
        /*
        var handler = function(){
        	var vlc = document.getElementById("vlc");
		    vlc.audio.volume=160;
		   // alert(vlc.audio.volume);
        	
        }
        
        setTimeout(handler,10000); 
        */
        
        $(document).ready(function(){
        	$("#down_area").load("front.php?community="+$("#cid").val()+"&gid="+$("#gid").val());
			//console.log($("#cid").val()) ;  
			
			/*
			var player = VLCobject.embedPlayer('video', 400, 300, true);
	        player.play('mms://tv.jxgdw.com/jxtv1');
	        */
	       
	        
	        
	        setInterval(display_date(),1000);
	        
	        
	        play('vlc');
        });
  
		</script>
    </head>
	<body>
	
	<?php if(!isset($_REQUEST['cid'])){echo "no cid!"; exit;} else{$cid=$_REQUEST['cid'];}?>
	<?php if(!isset($_REQUEST['gid'])){echo "no gid!"; exit;} else{$gid=$_REQUEST['gid'];}?>
	<input id="cid" type="hidden" value="<?php echo $cid;?>">
	<input id="gid" type="hidden" value="<?php echo $gid;?>">
	<input id="duration" type="hidden" value="<?php echo get_content_by_name("空闲回主页时间");?>">
	
	   <div id="bg">
	   
	    <!-- title -->
		<div id="title_bg">
		<table width="100%" style="height:100px">
		<tr>
			<td width="30%" ></td>
			<td width="30%" id="title_text" style="font-size: 42pt"><?php echo get_cat_name($_REQUEST['cid']); ?></td>
			<td width="30%" id="date" style="font-size: 22pt;vertical-align:bottom;"></td>
		</tr>
		</table>
		</div>
		
		<!-- video -->
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
    	version="VideoLAN.VLCPlugin.2"
    	width="1080"
      	height="864"
        id="vlc"
    	></embed>
    	
    	
		
		<div class="blank1">&nbsp;</div>
		
		<div id="down_area"></div>
		
	   </div>
	    
    </body>
    
   