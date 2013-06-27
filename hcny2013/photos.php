<html>
   <head>
		<title>紐約豐收靈糧堂 Harvest Church of New York 相冊集錦</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Harvest Church of New York 紐約豐收靈糧堂" />
		<meta name="keywords" content="紐約豐收靈糧堂,纽约丰收灵粮堂,纽约华人教会,紐約華人教會,Harvest Church of New York, Chinese Church, church in New York" />
		<link rel="stylesheet" type="text/css" href="css/font.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
        <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
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
        <script type="text/javascript" src="js/prototype.js"></script>
		<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
		<script type="text/javascript" src="js/lightbox.js"></script>
   </head>
   <body id="body">
	<?php 
		$slides = false;
		include_once('header.php');
	?>
      <div id="main" role="main">
         <div class="row" id="contentarea">
            <div class="grid_12">
               <article>
                  <div class="entry-content">
                  	 <!-- OUR MISSION -->
                     <div class="full ">
                        <a class="teaser_box" href="#">
                            <img alt="New here?" src="images/bg_multimedia.jpg" />
                            <span class="teaser_title">
                                <span class="teaser_title_inner">相冊集錦</span>
                                <span class="teaser_more">我們的教會生活</span>
                            </span>
                        </a><br />
                        <h2 style="text-align: left;">相冊集錦</h2>
                        <br />
                        <p class="section_desc" style="text-align: left;">紐約豐收靈糧堂主日崇拜生動感人，講台信息帶給許多人激勵和幫助。歡迎在教會網站上收聽瀏覽。觀看所有照片，請訪問我們的<a target="_blank" href="https://plus.google.com/photos/105884791485871651590/albums?banner=pwa">Google +</a>主頁. 其他照片存檔，請訪問我們以前的教會網站: <a target="_blank" href="http://www.harvestllc.org/new/photoVideo.php?id=3&category=picture">http://www.harvestllc.org</a></p>
                     </div>
                     <div class='clearfix'></div><br /><hr />
                     <?php 
					 	if($_REQUEST['action'] == "gallery")
							include_once('./services/gallery.php');
						else
						 	include_once('./services/picasa.php');
					 ?>
               </article>
            </div>
         </div>
      </div>
      <?php include_once('footer.php') ?>
   </body>
</html>