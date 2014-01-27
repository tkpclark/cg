<?php
	require 'mysql.php';
	$gov="24";
	
	function get_cat_name($catid)
	{
		global $mysqli;
		mysqli_query($mysqli, "set names utf8");
		$sql=sprintf("select catname from v9_category where catid='%s' limit 1;",$catid);
		//echo $sql;
		$res = mysqli_query($mysqli, $sql);
		if (!$res) {
			//$logging->info("Failed to run query: (" . $mysqli->errno . ") " . $mysqli->error);
			exit;
		}
		//echo "number: ".$res->num_rows;
		$row = $res->fetch_array(MYSQLI_ASSOC);
		return $row['catname'];
	}
	
	function get_front_list($catid)//$catid is gov or community
	{
		global $mysqli;
		mysqli_query($mysqli, "set names utf8");
		$sql=sprintf("select catid,catname,image,description from v9_category where parentid='%s' order by listorder asc,catid asc;",$catid);
		//echo $sql;
		$res = mysqli_query($mysqli, $sql);
		if (!$res) {
			//$logging->info("Failed to run query: (" . $mysqli->errno . ") " . $mysqli->error);
			exit;
		}
		
		$i=0;
		while($row = $res->fetch_array(MYSQLI_ASSOC))
		{
			$rows[$i][0]= $row['catid'];
			$rows[$i][1]= $row['catname'];
			$rows[$i][2]= $row['image'];
			$rows[$i][3]= $row['description'];
			$i++;
		
		}
		return isset($rows)?$rows:false;
	}
	/*
	function get_cat_img($community,$catname)
	{
		global $mysqli;
		mysqli_query($mysqli, "set names utf8");
		$sql=sprintf("select image from v9_category where catname='%s' and parentid in (select catid from v9_category where catid=%s);",$catname, $community);
		//echo $sql;
		$res = mysqli_query($mysqli, $sql);
		if (!$res) {
			//$logging->info("Failed to run query: (" . $mysqli->errno . ") " . $mysqli->error);
			exit;
		}
		//echo "number: ".$res->num_rows;
		$row = $res->fetch_array(MYSQLI_ASSOC);
		return $row['image'];
	}
	*/
	function get_cat_info($catid,&$cat_type)
	{
		//如果请求的cat的内容是目录则返回目录列表，如果是内容则返回内容
		
		global $mysqli;
		
		//先查看这个cat是文章类型还是图片类型，如果是文章类型则显示标题列表，如果是图片内容直接显示内容
		$sql=sprintf("select catid,modelid from v9_category where catid='%s'",$catid);
		$res = mysqli_query($mysqli, $sql);
		if (!$res) {
			//$logging->info("Failed to run query: (" . $mysqli->errno . ") " . $mysqli->error);
			exit;
		}
		if($res->num_rows==0)
		{
			$cat_type=0;
			return;
		}		
		
		
		$row = $res->fetch_array(MYSQLI_ASSOC);
		$cat_type=$row['modelid'];
		if($cat_type=="1")//文章类型，此时返回文件title列表
		{
			mysqli_query($mysqli, "set names utf8");
			$sql=sprintf("select id,title from `v9_news` where catid IN (select catid from v9_category where catid='%s') order by listorder asc, id desc",$catid);
			//echo $sql;
			$res = mysqli_query($mysqli, $sql);
			if (!$res) {
				//$logging->info("Failed to run query: (" . $mysqli->errno . ") " . $mysqli->error);
				exit;
			}
			//echo "number: ".$res->num_rows;
			
			$i=0;
			while($row = $res->fetch_array(MYSQLI_ASSOC))
			{
				$rows[$i][0]= $row['id'];
				$rows[$i][1]= $row['title'];
				$i++;
			
			}
			return isset($rows)?$rows:false;
		}
		else if($cat_type=="3")//图片类型，此时直接返回内容
		{
			mysqli_query($mysqli, "set names utf8");
			$sql=sprintf("select content,pictureurls from v9_picture_data where id in (select id from v9_picture where catid='%s' ) limit 1",$catid);
			//echo $sql;
			$res = mysqli_query($mysqli, $sql);
			if (!$res) {
				//$logging->info("Failed to run query: (" . $mysqli->errno . ") " . $mysqli->error);
				exit;
			}
			$rows = $res->fetch_array(MYSQLI_ASSOC);
			return $rows;
		}
	}	
	
	function get_content($content_id)
	{
		global $mysqli;
		mysqli_query($mysqli, "set names utf8");
		$sql=sprintf("select content from v9_news_data where id='%s'",$content_id);
		//echo $sql;
		$res = mysqli_query($mysqli, $sql);
		if (!$res) {
			//$logging->info("Failed to run query: (" . $mysqli->errno . ") " . $mysqli->error);
			exit;
		}
		//echo "number: ".$res->num_rows;
		
		$row = $res->fetch_array(MYSQLI_ASSOC);
		return $row['content'];
		
		
	}
	function get_content_by_name($name)
	{
		global $mysqli;
		mysqli_query($mysqli, "set names utf8");
		$sql="select content from v9_news_data where id in (select id from v9_news where title='$name')";
		//echo $sql;
		$res = mysqli_query($mysqli, $sql);
		if (!$res) {
			//$logging->info("Failed to run query: (" . $mysqli->errno . ") " . $mysqli->error);
			exit;
		}
		//echo "number: ".$res->num_rows;
		
		$row = $res->fetch_array(MYSQLI_ASSOC);
		return $row['content'];
	}
	function get_recom($cid)
	{
		global $mysqli;
		mysqli_query($mysqli, "set names utf8");
		$sql="select content from v9_news_data where id in(select id from v9_news where catid=(select catid from v9_category where catname='通知信息' and parentid='$cid')) order by id limit 1";
		//echo $sql;
		$res = mysqli_query($mysqli, $sql);
		if (!$res) {
			//$logging->info("Failed to run query: (" . $mysqli->errno . ") " . $mysqli->error);
			exit;
		}
		//echo "number: ".$res->num_rows;
	
		$row = $res->fetch_array(MYSQLI_ASSOC);
		$a=$row['content'];
		$a=str_replace("<br />","",$a);
		$a=str_replace("\n","",$a);
		$a=str_replace("&nbsp;","",$a);
		return $a;
	}
	
?>