  <div class="BodyWrap">
<div class="container demo-2">
		
			<!-- Codrops top bar -->
            <!--/ Codrops top bar -->
            <div id="slider" class="sl-slider-wrapper">
				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="test">&nbsp;</div>
                            <div class="SliderTitleWrap">
                            <hr class="hr">
							<h2 class="SliderTitle">Your dreams are our vision</h2>
                            <hr class="hr"></div>
					  </div>
					</div>
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="img1">&nbsp;</div>
							<div class="SliderTitleWrap">
                            <hr class="hr">
							<h2 class="SliderTitle">Your dreams are our vision</h2>
                           							<hr class="hr"></div>
						</div>
					</div>
                    <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="img3">&nbsp;</div>
							<div class="SliderTitleWrap">
                            <hr class="hr">
							<h2 class="SliderTitle">Your dreams are our vision</h2>
                           	<hr class="hr"></div>
						</div>
					</div>
                    			
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="img4">&nbsp;</div>
							<div class="SliderTitleWrap">
                            <hr class="hr">
							<h2 class="SliderTitle">Your dreams are our vision</h2>
                           <hr class="hr"></div>
						</div>
					</div>
                    	<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="img5">&nbsp;</div>
							<div class="SliderTitleWrap">
                            <hr class="hr">
							<h2 class="SliderTitle">Your dreams are our vision</h2>
                           <hr class="hr"></div>
						</div>
					</div>
                    	<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="img6">&nbsp;</div>
							<div class="SliderTitleWrap">
                            <hr class="hr">
							<h2 class="SliderTitle">Your dreams are our vision</h2>
                           <hr class="hr"></div>
						</div>
					</div>
                    	<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="img7">&nbsp;</div>
							<div class="SliderTitleWrap">
                            <hr class="hr">
							<h2 class="SliderTitle">Your dreams are our vision</h2>
                           <hr class="hr"></div>
						</div>
					</div>
                    
				</div>
                <!-- /sl-slider -->

				
				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
                    <span></span>	
                    <span></span>	
                    <span></span>			</nav>

			</div><!-- /slider-wrapper -->

			
        </div>
            </div>
           <div class="FixedWrap">
<div class="FixedWrapFloated">
<ul>
<li class="ContactIcon"><a href="#">+ 91 - 1234567890</a></li>
<li id="loginIcon" class="main-nav1"><a id="loginIcon" class="cd-login" href="#">CUSTOMER login</a></li>
<li id="EnqueryIcon" class="main-nav1"><a id="EnqueryIcon" class="cd-signup" href="#">ENQUIRY</a></li></ul></div></div>
<div class="BodyContainer">
<div class="updatesWrap">
<div class="UpdateTitleWrap">
<div class="UpdateTitleInnerWrap">Update</div></div>
<div class="UpdateBodyWrap">
<div class="UpdateinnerBodyWrap">
<div id="wrapper">
        <?php  $res=get_updateContent('Latest Update');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>
	</div></div></div></div>
    <div class="Thumb-Slider-Wraper">
    <div class="ThumbWrap">
    <div class="ThumbInnerWrap">
    <?php //echo do_shortcode('[Best_Wordpress_Gallery id="2" gal_title="East City"]');?>
   <div id="slidezzzzz">
   <img src="<?php echo get_template_directory_uri(); ?>/EastCity/example-slide-4.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/EastCity/example-slide-2.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/EastCity/example-slide-3.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/EastCity/example-slide-1.jpg">
      <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
      <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>    </div>
  <div class="ThumbnailStripz">East City</div>
          </div>
    </div>
    
    <div class="ThumbWrap">
    <div class="ThumbInnerWrap">
    <div id="slidezz">
    <img src="<?php echo get_template_directory_uri(); ?>/CentralPark/example-slide-3.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/CentralPark/example-slide-1.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/CentralPark/example-slide-2.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/CentralPark/example-slide-4.jpg">
      <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
      <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>    </div>
  <div class="ThumbnailStripz">Central Park</div>
          </div>
    </div>
    <div class="ThumbWrap">
    <div class="ThumbInnerWrap">
    <div id="slidezzz">
    <img src="<?php echo get_template_directory_uri(); ?>/RollingMeadows/example-slide-2.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/RollingMeadows/example-slide-4.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/RollingMeadows/example-slide-3.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/RollingMeadows/example-slide-1.jpg">
      <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
      <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>    </div>
  <div class="ThumbnailStripz">Rolling Meadows</div>
          </div>
    </div>
    <div class="ThumbWrap">
    <div class="ThumbInnerWrap">
    <div id="slidezzzz">
    <img src="<?php echo get_template_directory_uri(); ?>/GoldenHeights/example-slide-2.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/GoldenHeights/example-slide-1.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/GoldenHeights/example-slide-3.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/GoldenHeights/example-slide-4.jpg">
      <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
      <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>    </div>
  <div class="ThumbnailStripz">Golden Heights</div>
          </div>
    </div>
</div>
    
    </div>
<div class="BodyRowWraper">
  <?php  $res=get_updateContent('home');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>
<!--<div class="WelcomeWrap">
<div class="WelcomeInnerWrap">
<div class="WelcomeHeaderWrap"><span class="BodyTitleWrap"><span class="TitleWrap">Welcome to </span> <span class="TitleWrapw">narne Estates</span></span></div>
<div class="BodyContentWrap"><p class="BodyWrapP Paragraph">Since its inception, NARNE has been synonymous with a warm place you call home. We believe that the face of Real Estate will be radically different from what it is today, and we work together towards that future. With a deep passion for quality housing, we’ve built more than 23,000 Residential Flats, and several Commercial Properties in Hyderabad & Bangalore over the last three decades.</p><p class="BodyWrapP Paragraph">Our commitment to our customers has been simple: To deliver quality housing at very affordable prices. NARNE essentially means ‘Peoples’ Favorite’. It has lived true to its name, and in the process has been twice declared ‘Most Preferred Builder – South India’ in a nationwide survey by AC Nielsen.</p><p class="BodyWrapP Paragraph">Today, we are keener than ever, to build more, to bring a smile on the faces of people from many more corners of India. Our mission in Real Estate is to achieve more value per square foot in our customers’ properties: We see ourselves building more than 1,00,000 homes by the year 2016!</p><p class="BodyWrapP Paragraph">We at NARNE believe in spreading happiness. We offer affordable Residential Apartments, Duplex Houses, Luxury Flats, Villas and Independent Houses with state-of-the-art amenities within gated communities in Hyderabad & Bangalore.</p><p class="BodyWrapP Paragraph BoldFont">For more details, <span class="TitleWrapw">call 040-12 345 6789.</span> Or email us at <span class="TitleWrapw"><a href="#">sales@narneestates.com</a></span> Or simply Get Details</p></div></div>
</div>-->
<div class="NewsLetterWrap">
<div class="NewsLetterInnerWrap">
<div class="WelcomeHeaderWrap"><span class="BodyTitleWrap TitleWrap">Latest news</span></div>
<div class="BodyContentWrap">
  <!--<marquee behavior="scroll" scrollamount="2" direction="up" onMouseOver="this.stop();" onMouseOut="this.start();"  class="MarqueeStartup">-->
  <?php  if(function_exists('ditty_news_ticker')){ditty_news_ticker(90);} ?>
    <!--   <ul class="ulclass" >
       <li><div class="Datewraper">
           21- 02-2015</div> <div class="ContentWraperz"><p class="BodyWrapP">Since its inception, NARNE has been synonymous with a warm place you call home. We believe that the face of Real Estate will be radically different from what it is today.</span></p></div></li>
      </ul>-->
               
             <!-- </marquee>-->
            <?php //dynamic_sidebar( 'home-right-sidebar' ); ?>
</div>
<div>

</div>

</div></div></div></div>

