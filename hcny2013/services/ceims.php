<?php 
	$category = $_GET['category'];
	
	$host = "harvestims.db.5377530.hostedresource.com:3306";
	$username = "harvestims";
	$password = "Infy@123";
	$database = "harvestims";
	
	$connection = mysql_connect($host, $username, $password) or die("Connection Failure to Database");
	mysql_query("SET NAMES 'utf8'");
	mysql_select_db($database, $connection) or die ("Database not found.");
	
	if($category == "cn_slide") {
		$query1="select * from article where category = 'cn_slide' order by article_id desc";
		$result = mysql_db_query($database, $query1) or die("Failed Query");
		
		$responseJSON = "";
		
		while($row = mysql_fetch_assoc($result)) {  //get one row at a time
			$object[] = array("firstline" => $row['title'], "secondline" => $row['sub_title'], "media" => $row['media'], "title" => $row['media_title'], "url" => $row['url'], "image" => $row['image_link']); 
		}

		mysql_close($connection);
		$responseJSON = json_encode($object); 
		
		echo $responseJSON;
		
	} else {
		$query1="select * from article where category = 'cn_article' order by article_id desc limit 2";
		$result = mysql_db_query($database, $query1) or die("Failed Query");
		
		$responseHTML = "";
		
		while($row = mysql_fetch_assoc($result)) {  //get one row at a time
			$responseHTML = $responseHTML . 
							"<article id='post-article' class='blog_shortcode' style='height: 150px;'>
								<a class='imgborder clearfix thumb' title='" . $row['title'] . "' target='_blank' href='" . $row['url'] . "'>
									<img alt='" . $row['title'] . "' class='attachment-blog_shortcode wp-post-image' src='" . $row['thumbnail_pic'] . "' />
								</a>
								<h3 class='entry-title' style='font-size:16px;'>
									<a title='" . $row['title'] . "' rel='bookmark' target='_blank' href='" . $row['url'] . "'>" . $row['title'] . "</a>
								</h3>
								<div class='entry-content'>
									<p>" . $row['content'] . "</p>
								</div>
							</article>";
		}

		mysql_close($connection);
		
		echo $responseHTML;
	}
/*	include_once("./services/socketUtil.php");
	
	$post_data = array(
		'page' => 1,
		'rows' => 2
	);
	 
	$result = socketUtil::post_request('http://localhost/ceims-debug/services/ceims.php?article/search', $post_data);
	 
	if ($result['status'] == 'ok'){
		echo $result['content'];
		//var_dump($result); 
	}
	else {
		echo 'A error occured: ' . $result['error']; 
	}*/
	
	//$responseHTML = "lol";
	
	//echo $responseHTML;
?>
