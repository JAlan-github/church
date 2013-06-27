<html>
   <head>
		<title>紐約豐收靈糧堂 Harvest Church of New York - 教會動態</title>
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
                            <img alt="New here?" src="images/bg_news.jpg" />
                            <span class="teaser_title">
                                <span class="teaser_title_inner">教會動態</span>
                                <span class="teaser_more">最新報道</span>
                            </span>
                        </a><br />
                        <h2 style="text-align: left;">信仰宣告</h2>
                        <br />
                        <p class="section_desc" style="text-align: left;">我信上帝，全能的父，創造天地的主。 我信我主耶穌基督，上帝的獨生子，因聖靈感孕，由童貞女馬利亞所生；在本丟·彼拉多手下受難，被釘於十字架，受死埋葬；降在陰間，第三天從死人中復活；升天，坐在全能父上帝的右邊；將來必從那裏降臨，審判活人、死人。 我信聖靈。我信聖而公之教會。我信聖徒相通。我信罪得赦免。我信身體復活。我信永生。 阿們!</p>
                     </div>
                     <div class='clearfix'></div><br /><hr />
                     <div class="full">
                        <span class="section_title">教會新聞</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.harvestllc.org/new/photoVideo.php?id=3&category=churchNews" target="_blank">瀏覽存檔 &gt;&gt;&gt;</a>
                        <br><br>
                        <ul class="upcoming_events">
                        	<?php 
								include_once('./services/hcny.php');
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