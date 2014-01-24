<?php
	require 'mysql.php';
	$gov="24";
	
	function get_cat_img($community,$catname)
	{
		global $mysqli;
		mysqli_query($mysqli, "set names utf8");
		$sql=sprintf("select catid from v9_category where catname='%s' and parentid in (select catid from v9_category where catid=%s);",$catname, $community);
		//echo $sql;
		$res = mysqli_query($mysqli, $sql);
		if (!$res) {
			$logging->info("Failed to run query: (" . $mysqli->errno . ") " . $mysqli->error);
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

	function get_list($community,$catname)
	{
		global $mysqli;
		mysqli_query($mysqli, "set names utf8");
		$sql=sprintf("select id,title from `v9_news` where catid IN (select catid from v9_category where catname='%s' and parentid in (select catid from v9_category where catid=%s) );",$catname, $community);
		//echo $sql;
		$res = mysqli_query($mysqli, $sql);
		if (!$res) {
			$logging->info("Failed to run query: (" . $mysqli->errno . ") " . $mysqli->error);
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
	function get_content($content_id)
	{
		global $mysqli;
		mysqli_query($mysqli, "set names utf8");
		$sql=sprintf("select content from v9_news_data where id='%s'",$content_id);
		//echo $sql;
		$res = mysqli_query($mysqli, $sql);
		if (!$res) {
			$logging->info("Failed to run query: (" . $mysqli->errno . ") " . $mysqli->error);
			exit;
		}
		//echo "number: ".$res->num_rows;
		
		$row = $res->fetch_array(MYSQLI_ASSOC);
		return $row['content'];
		
		
	}
?>