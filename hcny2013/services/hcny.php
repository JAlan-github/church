<?php 
	include_once("./mysql/mysqlConfig.php");
	include_once("./mysql/mysqlOpen.php");
	
	include_once("./services/newsService.php");
	
	// get year criteria from request, will be current year by default;
	$year = $_POST['year'];
	// Create userVO to contain the search criterias
	$articleVO = new articleVO();
	$latestNumber = 10;
	
	$articleVO->setCategory( 'churchNews' );
	$articleVO->setDate( $year );
	
	// Create newsService to select all church news
	$newsService = new newsService();
	
	$result = $newsService->selectTheLatestSubject($articleVO, $latestNumber);
	
	$responseHTML = "";
	$count = 0;
	
	if( $result ) {
		while( $row = mysql_fetch_array( $result ) ) {
			$count ++;
			
			$responseHTML = $responseHTML . "<li class='blog_shortcode'>
								<a class='entry-title'>" . $row['title'] . "</a>
                                <span><b>More Info:</b> " . $row['content'] . "</span>
                                <span><b>Publish Date/Time:</b> " . $row['date'] . "</span>
							</li>";
		}
	}				
	
	echo $responseHTML;
	
	include_once("./mysql/mysqlClose.php");	
?>
