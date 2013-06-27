<?php session_start();?>
<html>
   <head>
		<title>紐約豐收靈糧堂 Harvest Church of New York</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Harvest Church of New York 紐約豐收靈糧堂" />
		<meta name="keywords" content="紐約豐收靈糧堂,纽约丰收灵粮堂,纽约华人教会,紐約華人教會,Harvest Church of New York, Chinese Church, church in New York" />
		<link rel="stylesheet" type="text/css" href="css/font.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/slides.js"></script>
   </head>
   <body id="body">
	<?php include_once('header.php');?>
      <div id="main" role="main">
         <div class="row" id="contentarea">
            <div class="grid_12">
               <article>
                  <div class="entry-content">
                  	 <!-- OUR MISSION -->
                     <div class="one_third ">
                        <a class="teaser_box" href="aboutUs.php">
                            <img alt="New here?" src="images/mission.jpg" />
                            <span class="teaser_title">
                                <span class="teaser_title_inner">關於我們</span>
                                <span class="teaser_more">教會牧者簡介</span>
                            </span>
                        </a><br />
                        <h2 style="text-align: center;">異象使命</h2>
                        <br />
                        <p class="section_desc" style="text-align: center;">動員信徒參與服事，透過“敬拜讚美、聖靈更新、小組教會、全地轉化和全家復興”建造榮耀的教會，帶來教會和社區的改變...</p>
                     </div>
                     <!-- CEREMONIES -->
                     <div class="one_third ">
                        <a class="teaser_box" href="videos.php">
                        	<img alt="worship & sermon" src="images/ceremonies.jpg" />
                            <span class="teaser_title">
                                <span class="teaser_title_inner">信息速遞</span>
                                <span class="teaser_more">講道與敬拜</span>
                            </span>
                        </a><br />
                        <h2 style="text-align: center;">主日崇拜</h2>
                        <br />
                        <p class="section_desc" style="text-align: center;">分享最新的主日敬拜贊美和牧師講道。通過視頻、相片、文字等多媒體手段，多渠道、多方面地展現我們的教會生活、屬靈成長...</p>
                     </div>
                     <!-- CHURCH NEWS -->
                     <div class="one_third last">
                        <a class="teaser_box" href="events.php">
                        	<img alt="what's happening" src="images/ministries.jpg" />
                            <span class="teaser_title">
                            	<span class="teaser_title_inner">教會動態</span>
                                <span class="teaser_more">最新報道</span>
                            </span>
                        </a><br />
                        <h2 style="text-align: center;">教會新聞</h2>
                        <br />
                        <p class="section_desc" style="text-align: center;">了解發生在我們身邊的事件，積極參與教會的活動，熱切關註教會的動態、溫暖關愛身邊的兄弟姐妹，要盡心盡義盡意盡力愛主你的神,又要愛人如己...</p>
                     </div>
                     
                     <div class="clearfix"></div>
                     <hr />
                     <br />
                     
                     <!-- Latest News -->
                     <div class="two_third ">
                        <h2 class="">最新報道</h2>
                        <br />
                        <?php
						   		require_once("./services/ceims.php");
						?>                        
                     </div>
                     
                     <!-- Upcoming Events -->
                     <div class="one_third last">
                        <h2>近期活動</h2>
                        <br />
                        <ul class="upcoming_events">
                           <?php
						   		require_once("./services/facebook_services.php");
								echo facebook_services::getEvents(3, "side");
						   ?>
                        </ul>
                     </div>
                  </div>
               </article>
            </div>
         </div>
      </div>
      <?php include_once('footer.php') ?>
   </body>
</html>