<?php
	require './fb-sdk/src/facebook.php';

	class facebook_services{
		// get upcoming events
		// mode=side, full
		public static function getEvents($lastestCount, $mode) {
			date_default_timezone_set('America/New_York');

			//initializing keys
			$facebook = new Facebook(array(
				'appId'  => '473557999376407',
				'secret' => 'b8bedea6d015d9ece6726ff1e38dbbad',
				'cookie' => true, // enable optional cookie support
			));
			
						
			$fql = "SELECT eid, name, pic_small, description, start_time,
			 end_time, location FROM event WHERE creator = 103502296492906 AND eid IN (SELECT eid
			 FROM event_member WHERE uid = 103502296492906)";
						
			$param  =   array(
			'method'    => 'fql.query',
			'query'     => $fql,
			'callback'  => ''
			);
						
			$gResult  = $facebook->api('/103502296492906/events');
			
			$todays_date = date("Y-m-d");
			
			$finalHTML = "";
			$eventHTML = "";
			
			$arrResult = $gResult["data"];
			$resultArray = array();

			//looping through retrieved data
			foreach( $arrResult as $keys => $values ){
				
				$start_date = date('l, F d, Y', strtotime($values['start_time']));
				$start_date_time = date('l, F d, Y G:i:s', strtotime($values['start_time']));
				$compare_date = date('Y-m-d', strtotime($values['start_time']));
				
				// text displayed in screen
				$date = date('M', strtotime($values['start_time']));
				$month = date('j', strtotime($values['start_time']));
				$time = date('G:i:s', strtotime($values['start_time']));
			
				//printing the data
				if($compare_date >= $todays_date) {
					if($mode == "full") {
						$eventHTML = $eventHTML . "<li class='blog_shortcode'>
								<a class='imgborder clearfix thumb' title='{$values['name']}'>";
						if( isset($values['pic']) && $values['pic'] != "" )
							$eventHTML = $eventHTML . "<img alt='img05v' class='attachment-blog_shortcode wp-post-image' src='{$values['pic']}' style='width:150; height:100;'/>";
						else
							$eventHTML = $eventHTML . "<img alt='img05v' class='attachment-blog_shortcode wp-post-image' src='./images/event_default.jpg' style='width:150; height:100;'/>";
							
						$eventHTML = $eventHTML . "	</a>
								<p class='meta_date'><strong>{$month}</strong><a style='left:186px;'></a><span>{$date}</span></p>
								<a class='entry-title' href='#'>{$values['name']}</a>";
						
						if( $time == "0:00:00" ) {
							$eventHTML = $eventHTML . "<span><b>Date/Time:</b> {$start_date}</span>";
						}
						else{
							$eventHTML = $eventHTML . "<span><b>Date/Time:</b> {$start_date_time}</span>";
						}
								
						$eventHTML = $eventHTML . "  <span><b>Location:</b> {$values['location']}</span>
								<span><b>More Info:</b> {$values['description']}</span>
							</li>";
					} else if($mode == "side") {
						$eventHTML = $eventHTML . "<li>";
							
						$eventHTML = $eventHTML . "<p class='meta_date'><strong>{$month}</strong><a></a><span>{$date}</span></p>
													<a class='entry-title' href='#'>{$values['name']}</a>";
						
						if( $time == "0:00:00" ) {
							$eventHTML = $eventHTML . "<span>on {$start_date}</span>";
						}
						else{
							$eventHTML = $eventHTML . "<span>on {$start_date_time}</span>";
						}
								
						$eventHTML = $eventHTML . "  <span>{$values['location']}</span>
							</li>";
					}
					
					$resultArray[] = $eventHTML;
				}

				$eventHTML = "";
			}
			
			// get required count
			array_reverse($resultArray);
			$index = 1;
			$requiredCount = intval($lastestCount);
			$total = count($resultArray);
			
			foreach( $resultArray as $value ){
				if($index > $total - $requiredCount) {
					$finalHTML = $value . $finalHTML;
				}
				else {
					$index ++;
					continue;
				}
				
				$index ++;
			}
			
			return $finalHTML;	
		}
	}
?>