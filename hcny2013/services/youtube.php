<?php 
	require_once("./services/youtube_services.php");
	
	$final = $final . "<div class='clearfix'></div><br /><hr /><br /><div class='two_third'><h2>The Latest Chinese Sunday Sermon</h2><br /><article id='post-article' class='blog_shortcode'>" . youtube_services::getPlayList("PL3BMsMGanxj2aVNAIZH2Pf_nKm9FvuYzf");
	
	$final = $final . "<div class='clearfix'></div><br /><hr /><br /><div class='two_third'><h2>The Latest Church Worship</h2><br /><article id='post-article' class='blog_shortcode'>" . youtube_services::getPlayList("PL3BMsMGanxj3k0tr20J3TqYVrBEgqCJn4");

	$final = $final . "<div class='clearfix'></div><br /><hr /><br /><div class='two_third'><h2>The Latest English Sunday Sermon</h2><br /><article id='post-article' class='blog_shortcode'>" . youtube_services::getPlayList("PL3BMsMGanxj1IFyFKcmcia-SV8mvQrCaL");
	
	$final = $final . "<div class='clearfix'></div><br /><hr /><br /><div class='two_third'><h2>The Latest Church Life Video</h2><br /><article id='post-article' class='blog_shortcode'>" . youtube_services::getPlayList("PL3BMsMGanxj0NkYBdsOqe3nbJPP09N93i");
	// Output final response
	echo $final;
?>
