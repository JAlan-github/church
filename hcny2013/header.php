		<?php
        	if(isset($slides) && $slides == false) {
        ?>
        	<div id="header" style="height: 200px;">
        <?php
        	} else {
     	?>
     	 	<div id="header">
		<?php
            }
        ?>
         <!-- jQuery handles to place the header background images -->
         <div id="headerimgs">
            <div id="headerimg1" class="headerimg"></div>
            <div id="headerimg2" class="headerimg"></div>
         </div>
         <!-- Top navigation on top of the images -->
         <div id="nav-outer">
            <div id="navigation">
               <div id="login">
                  <form>
                     <input type="text" id="logintxt" />
                     <input type="password" id="logintxt" />
                     <input type="submit" value="Login" id="loginbtn" />
                  </form>
                  <br/>
                  <a href="http://harvestllc.org/cn">中文</a> | <a href="http://harvestllc.org/en">English</a>
               </div>
               <div id="menu">
                  <ul>
                     <li><a href="index.php">首頁</a></li>
                     <li><a href="aboutUs.php">關於我們</a></li>
                     <li><a href="news.php">教會動態</a></li>
                     <li><a href="events.php">近期活動</a></li>
                     <li><a href="videos.php">影視花絮</a></li>
                     <li><a href="photos.php">相冊集錦</a></li>
                     <li><a href="cellGroup.php">細胞小組</a></li>
                     <li><a href="http://harvestllc.org/fecllc" target="_blank">靈糧特會</a></li>
                  </ul>
               </div>
               
               <ul class="social-icons clearfix">
                  <li data-tooltip="Twitter" class="twitter">
                     <a target="_blank" href="https://twitter.com/HarvestNY"><span></span></a>
                  </li>
                  <li data-tooltip="Facebook" class="facebook">
                     <a target="_blank" href="http://www.facebook.com/harvestchurchny"><span></span></a>
                  </li>
                  <li data-tooltip="YouTube" class="youtube">
                     <a target="_blank" href="http://www.youtube.com/user/HarvestChurchofNY"><span></span></a>
                  </li>
                  <li data-tooltip="Google" class="google">
                     <a target="_blank" href="https://plus.google.com/u/0/b/105884791485871651590/"><span></span></a>
                  </li>
               </ul>
            </div>
         </div>
         <?php
		 	if(isset($slides) && $slides == false) {
				// remove slides
			} else {
         ?>
         <!-- Slideshow controls -->
         <div id="headernav-outer">
            <div id="headernav">
               <div id="back" class="btn"></div>
               <div id="control" class="btn"></div>
               <div id="next" class="btn"></div>
            </div>
         </div>
         <!-- jQuery handles for the text displayed on top of the images -->
         <div id="headertxt">
            <p class="caption">
               <span id="firstline"></span>
               <a href="#" id="secondline" target="_blank"></a>
            </p>
            <p class="pictured">
               <span id="media"></span>
               <a href="#" id="pictureduri" target="_blank"></a>
            </p>
         </div>
         <?php } ?>
      </div>