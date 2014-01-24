

function display_content(){
	
	 url="get_content.php?type=list&community="+$("#cid").val()+"&catname="+$("#catname").text();
	
	 $.get(url, function(result){
		 //console.log(result);
		 var strs = new Array();
		 var html = "";
		 strs = result.split("\n");
		 html = "<div align='center'>";
		
		 
		 $.each(strs, function (index, tx)
		 { 
			//console.log(tx);
			var r = new Array();
			
			//每一条的格式是： id，title
			r = tx.split(",");
			var content_id = r[0];
			var title = r[1];
			
			var id="item"+content_id;
			
			html += "<p id='"+id+"'>"+title+"</p>"; 
			//$("#content").append(html);
			
			/*
			$("#"+eval(id)).click(function(){
				url="get_content.php?type=content&content_id="+content_id;
				$("#content").load(url);
		 	});
		 	*/
		 });
		 
		 html +="</div>";
		 $("#content").html(html);
		 
		 //set up click of title
		 $.each(strs, function (index, tx)
		 { 
			//console.log(tx);
			var r = new Array();
			
			//每一条的格式是： id，title
			r = tx.split(",");
			var content_id = r[0];

			
			var id="item"+content_id;
			
			
			var return_html=$("#content").html();
			$("#"+id).click(function(){
				url="get_content.php?type=content&content_id="+content_id;
				$("#content").load(url);
				
				//return button
				/*
				$("#return_button").unbind();
				$("#return_button").click(function(){
					$("#content").html(return_html);
				});
				*/
				
		 	});
		 	
		 });
		 
	 });
	 
	 

	
}
