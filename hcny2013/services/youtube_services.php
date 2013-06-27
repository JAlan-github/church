<?php
	class youtube_services{

	// English Sermons
		public static function getPlayList($playlist_id) {
			$url = "https://gdata.youtube.com/feeds/api/playlists/".$playlist_id."?v=2&alt=json";
			$url = "https://gdata.youtube.com/feeds/api/playlists/".$playlist_id."?v=2&alt=json";
			$data = json_decode(file_get_contents($url),true);
			$info = $data["feed"];
			$video = $info["entry"];
			$video = array_reverse($video);
			$nVideo = count($video);
			
			// Lastest video
			$title = $video[0]['title']['$t'];
			$description = $video[0]['media$group']['media$description']['$t'];
			$link = $video[0]['link'][0]['href'];
			$published = date('d M Y', strtotime ($video[0]['published']['$t']));
			$recorded = date('d M Y', strtotime (substr($title, -10)));
			preg_match_all('/v\/(.*?)\?/',$video[0]['content']['src'],$videoId);
			
			$response = $response . "<div class='video_gallery'>
										<p class='meta_date'>
										<strong>".date('d', strtotime (substr($title, -10)))."</strong>
										<span>".date('M', strtotime (substr($title, -10)))."</span></p>
										<a class='entry-title' href='".$link."' target='_blank'>".$title."</a>
										<span>".$description."</span>
									</div>
									<a class='imgborder clearfix thumb' title='".$title."' target='_blank' href='".$link."'>
										<iframe width='560' height='315' src='http://www.youtube.com/embed/" .$videoId[1][0]."?list=".$playlist_id."' frameborder='0' allowfullscreen></iframe>
									</a>
								</article>
							</div>";
			
			// other video
			$response = $response . "<div class='one_third last'>
										<h2>Other Videos ( ".($nVideo-1)." videos )</h2>
										<br /><br />
											<ul class='upcoming_events'>";
												
			for($i=1;$i<min(4, $nVideo);$i++){
				$title = $video[$i]['title']['$t'];
				$description = $video[$i]['media$group']['media$description']['$t'];
				$link = $video[$i]['link'][0]['href'];
				$published = date('d M Y', strtotime ($video[$i]['published']['$t']));
				$recorded = date('d M Y', strtotime (substr($title, -10)));
				preg_match_all('/v\/(.*?)\?/',$video[$i]['content']['src'],$videoId);	
				
				$response = $response . "<li>
											<p class='meta_date'>
												<strong>".date('d', strtotime (substr($title, -10)))."</strong>
												<span>".date('M', strtotime (substr($title, -10)))."</span>
											</p>
											<a class='entry-title' href='".$link."' target='_blank'>".$title."</a>
											<span>".$description."</span>
										</li>";
			}	
			
			$response = $response . "		</ul>
										<a href='http://www.youtube.com/user/HarvestChurchofNY' target='_blank'>View All Videos >>></a>
									</div>";
									
			// return
			return $response;
		}   
	}
?>