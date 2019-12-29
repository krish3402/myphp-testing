<link href="<?php echo get_template_directory_uri(); ?>/css/login_style.css" rel='stylesheet' type='text/css' />
<script type="application/x-javascript">
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<div class="footerWraper">
<div class="footerInnerWraper">
<div class="FooterLinksWraper">
<div class="FooterLinksInnerWraper">
<ul>
<li class="FooterTitle">quick links</li>
<li class="FTRLink"><a href="<?php echo get_home_url(); ?>">home</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('CMD');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">CMD</a></li>
<li class="FTRLink"><a href=" <?php  $res=get_url('CompanyProfile');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Company Profile</a></li>
<!--<li class="FTRLink"><a href="<?php  $res=get_url('east city');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
						 //print_r($data);
					 }
					 ?>">East City</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('gvjh');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">GVJH</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('cparkrmeadows');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Central Park/Rolling Meadows</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('goldenheightsresidency');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Golden Heights Residency</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('jadeGardens');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Jade Gardens</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('locationMap');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Location Map</a></li>-->
<li class="FTRLink"><a href="<?php  $res=get_url('Services');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Services</a></li>
<!--<li class="FTRLink"><a href="<?php  $res=get_url('PressRelease');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Press Release</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('NewsLetter');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">News Letters</a></li>-->
<li class="FTRLink"><a href="<?php  $res=get_url('Reach Us');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Reach Us</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('Site Map');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Sitemap</a></li>                     
</ul></div></div>
<div class="FooterLinksWraper">
<div class="FooterLinksInnerWraper">
<ul>
<li class="FooterTitle">PROJECTS</li>
<li class="BrowseLink"><a href="<?php  $res=get_url('east city');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
						 //print_r($data);
					 }
					 ?>" class="BrowseLink">East City</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('gvjh');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">GVJH</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('cparkrmeadows');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Central Park/Rolling Meadows</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('goldenheightsresidency');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Golden Heights Residency</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('jadeGardens');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Jade Gardens</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('locationMap');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Location Map</a></li>
</ul></div></div>
<div class="FooterLinksWraper">
<div class="FooterLinksInnerWraper">
<ul>
<li class="FooterTitle">Gallery</li>
<li class="BrowseLink"><a href="<?php  $res=get_url('CentralParkGallery');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>" class="BrowseLink">Central Park</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('EastCityGallery');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">East City</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('GoldenHeightsGallery');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Golden Heights</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('RollingMeadowsGallery');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Rolling Meadows</a></li>
</ul></div></div>
<div class="FooterLinksWraper EventsMargin">
<div class="FooterLinksInnerWraper">
<ul>
<li class="FooterTitle">EVENTS</li>
<li class="BrowseLink"><a href="<?php  $res=get_url('PressRelease');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>" class="BrowseLink">Press Release</a></li>
<li class="FTRLink"><a href="<?php  $res=get_url('NewsLetter');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">News Letters</a></li>
</ul></div></div>
<div class="FooterLinksWraper-lastchild EventsMargin">
<div class="FooterLinksInnerWraper">
<ul>
<li class="FooterTitle">Contact us</li>
<li class="FTRLink"><p class="BodyWrapP">1 Gunrock Enclave Secunderabad 500009 Andhra Pradesh India <br> Phone:  +91-40-4040 0000, 2784 0266, 2784 4720<br> Fax:  +91-40-2784 1246<br> Email:  <a href="mailto: cs@narne.com" target="_top"> cs@narne.com</a> <!-- <br><br>More Branches...<br><span class="placesLink"><a href="#" class="placesLink">Bangalore</a> | <a href="#" class="placesLink">Chennai</a> | <a href="#" class="placesLink">Goa</a> | <a href="#" class="placesLink">Hyderabad</a> | <a href="#" class="placesLink">Kochin</a> | <a href="#" class="placesLink">Mangalore</a> | <a href="#" class="placesLink">Mysore</a>--></span></p></li>
</ul></div></div></div></div>
<div class="ftr2">
<ul>
<li><a href="<?php echo get_home_url(); ?>">home</a></li>
<li><a href="<?php  $res=get_url('CMD');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">CMD</a></li>
<li><a href=" <?php  $res=get_url('CompanyProfile');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Company Profile</a></li>
<!--<li><a href="<?php  $res=get_url('east city');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
						 //print_r($data);
					 }
					 ?>">East City</a></li>
<li><a href="<?php  $res=get_url('gvjh');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">GVJH</a></li>
<li><a href="<?php  $res=get_url('cparkrmeadows');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Central Park/Rolling Meadows</a></li>
<li><a href="<?php  $res=get_url('goldenheightsresidency');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Golden Heights Residency</a></li>
<li><a href="<?php  $res=get_url('jadeGardens');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Jade Gardens</a></li>
<li><a href="<?php  $res=get_url('locationMap');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Location Map</a></li>-->
<li><a href="<?php  $res=get_url('Services');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Services</a></li>
<li><a href="<?php  $res=get_url('PressRelease');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Press Release</a></li>
<li><a href="<?php  $res=get_url('NewsLetter');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">News Letters</a></li>
<li><a href="<?php  $res=get_url('Reach Us');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Reach Us</a></li>
<!--<li><a href="#">ABOUT</a></li>
<li><a href="#">projects</a></li>
<li><a href="#">SERVICES</a></li>
<li><a href="#">Gallery</a></li>
<li><a href="#"> EVENTS</a></li>
<li><a href="#">ADVERTISE</a></li>    
<li><a href="#">TERMS OF USE & PRIVACY</a></li>     
<li><a href="#">HElp</a></li>--></ul></div>
<div class="ftr3">
<div class="ftr3-InnerWraper">
<div class="ftr3-LeftWrap">
<div class="ftr3-LeftWrap-TextWrap"><span class="ftr3-LeftWrap-TextWrap">Designed and developed by</span></div>
<div class="ftr3-LogoWrap"><a href="http://digitology.co.uk/" target="_blank">&nbsp;</a></div></div>
<div class="ftr3-CenterWrap">© narne Estate 2015. All Rights Reserved.</div>
<div class="SocialContainer">
<div class="SocialTxtContainer">
<div class="SocialTxtInnerContainer">Follow us &nbsp;</div>
<div class="SocialWraper"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png"></a>&nbsp;<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twt.jpg"></a>&nbsp;<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/gp.jpg"></a></div></div></div></div></div>
<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container" style="width: 450px;"> <!-- this is the container wrapper -->
     
			
			<div id="cd-signup">
                             <a href="#0" class="cd-close-form">Close</a> 
            <ul class="cd-switcher">
				<li><a href="#0">Enquiry Form </a></li>
			</ul>
             <!-- Enquiry form -->
           
                                    <?php echo do_shortcode('[contact-form-7 id="120" title="Contact form 1" class="cd-form"]'); ?>
				 
			</div> <!-- cd-signup -->
            
                        <div class="login-form" id="cd-login" style="width: auto;margin-top: 140px;">
                                     <ul class="cd-switcher">
				<li>  <div class="head"><img src="<?php echo get_template_directory_uri(); ?>/images/Logo_2.png" alt=""/></div> </li>
			</ul>   
                                  <!--  <div class="head"><img src="<?php echo get_template_directory_uri(); ?>/images/Logo_2.png" alt=""/></div>-->
                                        <form action='loginbutton.php'>
                                        <li>
                                        <input type="text" class="text full-width" value="USERNAME" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'USERNAME';}" ><a href="#" class=" icon user"></a></li>
                                        <li>
						<input type="password" value="Password" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
					</li>
					<div class="p-container">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Forgot Password</label>
								<input type="submit"  value="SIGN IN" >
							<div class="clear"> </div>
					</div>
				</form>
			</div>
			<!--//End-login-form-->
                        <!-----start-copyright---->
   					<div class="copy-right">
						<p>Powered By <a href="http://digitology.co.uk">Digitology.co.uk</a></p> 
					</div>
				<!-----//end-copyright---->
                           <!-- <div id="cd-login">
                 <ul class="cd-switcher">
				<li><a href="#0">Customer Login </a></li>
			</ul>
                <form class="cd-form" action="">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
						<span class="cd-error-message">Error message here!</span>
					</p>
                    
					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>
                                      
					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Submit">
					</p>
				</form>
                        </div>-->
			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
		</div> <!-- cd-user-modal-container -->
	</div>
<?php wp_footer();?>
<!--<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.1.js"></script>--->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/Tabbed.js"></script> 
<script type="text/javascript">
$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);
</script>
<script type="text/javascript">
$("#slideshowA > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshowA > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshowA');
},  3000);
</script>
<!--Slider -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.slitslider.js"></script>
<!-- Scroll Bar -->
	
	
	<!-- custom scrollbar plugin -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
	
	<script>
		(function($){
			$(window).load(function(){
				
				$("#content-1").mCustomScrollbar({
					theme:"minimal"
				});
				
			});
		})(jQuery);
	</script>
<!-- Scroll Bar -->
		<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
		</script>
<!--Slider End -->
<!-- Menu -->    
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mobile.custom.min.js"></script>
<!--<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.1.js"></script>-->
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script> <!-- Resource jQuery -->
<!-- Menu End -->
<!-- ThumbSlider -->
   <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slides.min.js"></script>
  <!-- End SlidesJS Required -->
<!--- Gallery --->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
		<script src="<?php echo get_template_directory_uri(); ?>/js/grid.js"></script>
		<script>
			$(function() {
				Grid.init();
			});
		</script>
<!--- Gallery --->
  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script type="text/javascript">
    $(function() {
      $('#slidez').slidesjs({
        width: 940,
        navigation: false
      });
    });

$(function() {
      $('#slidezz').slidesjs({
        width: 940,
        navigation: false
      });
    });
	$(function() {
      $('#slidezzz').slidesjs({
        width: 940,
        navigation: false
      });
    });
	$(function() {
      $('#slidezzzz').slidesjs({
        width: 940,
        navigation: false
      });
    });
	$(function() {
      $('#slidezzzzz').slidesjs({
        width: 940,
        navigation: false
      });
    });
	$(function() {
      $('#slidezzzzzz').slidesjs({
        width: 940,
        navigation: false
      });
    });
	$(function() {
      $('#slidezzzzzzz').slidesjs({
        width: 940,
        navigation: false
      });
    });
	$(function() {
      $('#slidezzzzzzzz').slidesjs({
        width: 940,
        navigation: false
      });
    });
	$(function() {
      $('#slidezzzzzzzzz').slidesjs({
        width: 940,
        navigation: false
      });
    });
  </script>
<!-- Thumb Slider End -->
<!-- News Ticker -->
   <script type="text/javascript">
// <!--
var speed = 2;
function init(){
  var el = document.getElementById("marquee_replacement");
  el.style.overflow = 'hidden';
  scrollFromBottom();
}
 
var go = 0;
var timeout = '';
function scrollFromBottom(){
  clearTimeout(timeout);
  var el = document.getElementById("marquee_replacement");
  if(el.scrollTop >= el.scrollHeight-150){
    el.scrollTop = 0;
  };
  el.scrollTop = el.scrollTop + speed;
  if(go == 0){
    timeout = setTimeout("scrollFromBottom()",50);
  };
}
 
function stop(){
  go = 1;
}
 
function startit(){
  go = 0;
  scrollFromBottom();
}
// -->
</script>
<!-- News Ticker End -->
<!--- Login Pannel -->
<script src="<?php echo get_template_directory_uri(); ?>/js/mainLogin.js"></script> <!-- Gem jQuery -->
<!--- Login Pannel End -->
</body>
</html>

