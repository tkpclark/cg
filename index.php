<?php require_once 'get_content.php';?>
    <head>
        <meta charset="utf-8">
        <title>cg3</title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="../easyui/jquery.min.js"></script>
		<script type="text/javascript" src="keyboard/jquery.keypad.js"></script>
		



        <script type="text/javascript" language="javascript">
        
        

		</script>
    </head>
	<body>
	
	<?php if(!isset($_REQUEST['cid'])){echo "no cid!"; exit;} else{$cid=$_REQUEST['cid'];}?>
	<?php if(!isset($_REQUEST['gid'])){echo "no gid!"; exit;} else{$gid=$_REQUEST['gid'];}?>
	<input id="cid" type="hidden" value="<?php echo $cid;?>">
	<input id="gid" type="hidden" value="<?php echo $gid;?>">
	<input id="duration" type="hidden" value="">
	
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
		<img src="images/ma2.jpg">
		
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
    	width="1070"
      	height="802"
      	allowfullscreen="no"
      	toolbar="no"
        id="vlc"
    	></embed>
		
		<div class="blank1">&nbsp;</div>
		
		<div id="down_area"></div>
		
	   </div>
	    
    </body>
<script type="text/javascript">  
function go_front(){
	$("#down_area").load("front.php?gid="+$("#gid").val()+"&community="+$("#cid").val());
	lastid=$("#duration").val();
	clearTimeout(lastid);
}
function auto_return(){
	
	//clear
	lastid=$("#duration").val();
	clearTimeout(lastid);
	
	//set new
	var duration=<?php echo get_content_by_name("空闲回主页时间");?>*1000;
	if(duration < 1)
	{
		duration=110000;
	}
	id=setTimeout("go_front()",duration);
	//clearTimeout(id);
	$("#duration").val(id);
	console.log("lastid:"+lastid+" new duration:"+duration+" newn settimeid:"+id);
}



/******************VLC**********************/


var pp=0;//event每次会将此变量++
var checked_pp=0;
var doubt_cout=0;
var vlc = document.getElementById('vlc');
//var uri = "http://live.64ma.com/livePlay.asp?uid=279&amp;rn=b3a8NiaNibe9baZ88ZSS";
//var uri = "http://qqlive.dnion.com:1863/2515002412.flv?apptype=live&amp;pla=WIN&amp;time=1390830090&amp;cdn=zijian&amp;vkey=91AB32CA49F45608ABEFA90119620493D1FA61F4D23029098BC1DEF973DF135FC794708E87BCDABB";
//var uri = "mms://tv.jxgdw.com/jxtv1";
//var uri = "http://live.64ma.com/livePlay.asp?uid=202&amp;rn=b3a8NiaNibf9bcZc3Z3f";
//var uri="http://qqlive.dnion.com:1863/2515002412.flv?apptype=live&pla=WIN&time=1390958535&cdn=zijian&vkey=27C9D236518FB1A44F1F36372E7887615A1DF1ACBAF0E830AD48AD9AB950F76111FF0100409BDB72";
//var uri="http://116.77.70.81/live/1,TWSX0004200211100000?format=mpegts&codec=x264&bitrate=2000k";
var uri="http://live.64ma.com/livePlay.asp?uid=279&amp;rn=b3a8NiaNibe9baZ88ZSS";//jiangsu
//var uri="http://live.64ma.com/livePlay.asp?uid=202&amp;rn=b3a8NiaNibf9bcZc3Z3f";//cctv2
//var uri="http://114.113.146.18:9900/player.swf?type=http&file=y01.flv";

function handleEvents(event) {
    pp++;
    if(pp>1000000)
        pp=0;
    //console.log("pp:"+pp);
}
/*
function check_video()
{
	if(checked_pp==pp)//doube
	{
		doubt_cout++;
		console.log("stopped "+doubt_cout+" time");
		if(doubt_cout > 5)
		{
			console.log("restarting...");
			vlc.playlist.stop();
			//vlc.playlist.clear();
			vlc.playlist.play();
			//window.location.reload();
		}
	}
	else
	{
		checked_pp=pp;
		//console.log("status ok!");
		doubt_cout=0;
	}
}
*/

function check_video()
{
	if(checked_pp!=pp)//doube
	{
		checked_pp=pp;
		//console.log("status ok!");
		$.get("http://localhost:9999");
	}
}

vlc.playlist.add(uri,uri, "");
vlc.playlist.play(); 


//vlc.addEventListener('MediaPlayerNothingSpecial', handleEvents,false);
	
	vlc.addEventListener('MediaPlayerOpening', handleEvents,false);
//	vlc.addEventListener('MediaPlayerBuffering', handleEvents,false);
	//vlc.addEventListener('MediaPlayerPlaying', handleEvents,false);
//	vlc.addEventListener('MediaPlayerPaused', handleEvents,false);
	//vlc.addEventListener('MediaPlayerForward', handleEvents,false);
	//vlc.addEventListener('MediaPlayerBackward', handleEvents,false);
	//vlc.addEventListener('MediaPlayerEncounteredError', handleEvents,false);
	//vlc.addEventListener('MediaPlayerEndReached', handleEvents,false);
	//vlc.addEventListener('MediaPlayerTimeChanged', handleEvents,false);
	vlc.addEventListener('MediaPlayerPositionChanged', handleEvents,false);
	//vlc.addEventListener('MediaPlayerSeekableChanged', handleEvents,false);
	//vlc.addEventListener('MediaPlayerPausableChanged', handleEvents,false);


setInterval("check_video()",3000);

function adjust_volumn(){
	var d=new Date();
	var h=d.getHours();

	var lower_volumn=20;
	var higher_volumn=200;
	
	if((h>=7)&&(h<=19))
		vlc.audio.volume=higher_volumn;
	else
		vlc.audio.volume=lower_volumn;
	
    console.log("adjust volumn:"+vlc.audio.volume);
	
}

setInterval("adjust_volumn()",50000); 
/******************VLC**********************/













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
	//console.log(mydate);
	$("#date").html(mydate);
}








$(document).ready(function(){
	go_front();
	//console.log($("#cid").val()) ;  
	
	/*
	var player = VLCobject.embedPlayer('video', 400, 300, true);
    player.play('mms://tv.jxgdw.com/jxtv1');
    */
   
   setInterval("display_date()",10000);
   
});

</script>
