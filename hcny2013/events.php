<?php session_start();?>
<html>
   <head>
		<title>紐約豐收靈糧堂 Harvest Church of New York - 近期活動</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Harvest Church of New York 紐約豐收靈糧堂" />
		<meta name="keywords" content="紐約豐收靈糧堂,纽约丰收灵粮堂,纽约华人教会,紐約華人教會,Harvest Church of New York, Chinese Church, church in New York" />
		<link rel="stylesheet" type="text/css" href="css/font.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
		<script type="text/javascript" src="js/slides.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript">
        	$(document).ready(function() {
 				// $('#main').css('top', '-300px');
				$('#header').css('height', '200px');
				$('#headertxt').remove();
				$('#headernav-outer').remove();
				
				// $('#header').append("<div class='sectionTitle'><h1>OUR MISSION</h1></div>");
			});
        </script>
   </head>
   <body id="body">
	<?php include_once('header.php');?>
      <div id="main" role="main">
         <div class="row" id="contentarea">
            <div class="grid_12">
               <article>
                  <div class="entry-content">
                  	 <!-- OUR MISSION -->
                     <div class="full ">
                        <a class="teaser_box" href="#">
                            <img alt="New here?" src="images/bg_events.jpg" />
                            <span class="teaser_title">
                                <span class="teaser_title_inner">近期活動</span>
                                <span class="teaser_more">一起來參與</span>
                            </span>
                        </a><br />
                        <h2 style="text-align: left;">愛的真諦</h2>
                        <br />
                        <p class="section_desc" style="text-align: left;">愛是恆久忍耐又有恩慈， 愛是不忌妒！ 愛是不自誇不張狂， 不做害羞的事！ 不求自己的益處， 不輕易發怒！ 不計算人家的惡， 不喜歡不義！ 只喜歡真理，凡事包容， 凡事相信， 凡事盼望！ 凡事忍耐！ 凡事要忍耐！ 愛是永不止息！</p>
                     </div>
                     
                     <div class="clearfix"></div>
                     <hr />
                     <br />
                     
                     <!-- Latest Events -->
                     <div class="full ">
                        <span class="section_title">近期活動</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='http://www.facebook.com/harvestchurchny/events' target='_blank'>瀏覽更多 >>></a>
                        <br /><br />
                        <ul class="upcoming_events">
                           <?php
						   		require_once("./services/facebook_services.php");
								echo facebook_services::getEvents(100, "full");
						   ?>
                        </ul>
                     </div>
               </article>
            </div>
         </div>
      </div>
      <?php include_once('footer.php') ?>
   </body>
</html>