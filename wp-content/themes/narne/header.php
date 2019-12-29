<?php 
function get_url($title)
	{		
$sql = "select guid from wp_posts where post_title like '".$title."' and post_status ='publish' and post_type != 'ris_gallery'";
$res = mysql_query($sql);
return $res;
	}
function get_updateContent($title)
	{		
$sql = "select post_content from wp_posts where post_title like '".$title."' and post_status ='publish'";
$res = mysql_query($sql);
return $res;
	}	
?>   
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="widht=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Narne</title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/modernizr.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.79639.js'></script>
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tickerme.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fresco.js"></script>
<script type="text/javascript">
	$(function(){
		$('#ticker').tickerme();
	});
	</script>
    <!--  start Script for Overview,CMD,CompanyProfile --->
<script type="text/javascript">
$(document).ready(function(){
  $('.chairmanMessageDiv').hide();
  $('.awardsDiv').hide();
  $('#chairmanProfile').addClass("Selecteda");
  $('#chairmanMessage').removeClass("Selecteda");
  $('#awards').removeClass("Selecteda"); 
}); 
function tabChange(tabId){
	//alert(tabId);
	if(tabId=="chairmanProfile"){
		 $('.chairmanProfileDiv').show();
		 $('#chairmanProfile').addClass("Selecteda");
		 $('#chairmanMessage').removeClass("Selecteda");
         $('#awards').removeClass("Selecteda"); 
		 $('.chairmanMessageDiv').hide();
         $('.awardsDiv').hide();
		}else if(tabId=="chairmanMessage"){
		 $('.chairmanProfileDiv').hide();
		 $('.chairmanMessageDiv').show();
		 $('#chairmanMessage').addClass("Selecteda");
		 $('#chairmanProfile').removeClass("Selecteda");
         $('#awards').removeClass("Selecteda"); 
         $('.awardsDiv').hide();
		}else if(tabId=="awards"){
		 $('.chairmanProfileDiv').hide();
		 $('.chairmanMessageDiv').hide();
         $('.awardsDiv').show();
		 $('#awards').addClass("Selecteda");
		 $('#chairmanMessage').removeClass("Selecteda");
         $('#chairmanProfile').removeClass("Selecteda"); 
		}
	}
</script>   
<!--  end Script for Overview,CMD,CompanyProfile --->  
<!--  start Script for Project --->   
<script type="text/javascript">
$(document).ready(function(){
	     $('.prjtmainDiv').show();	
		 $('.featuresDiv').hide();
         $('.futureOfEastCityDiv').hide();
	});
function projectTabChange(tabId){
	//alert(tabId);
	if(tabId=="features"){
		 $('.prjtmainDiv').hide();	
		 $('.featuresDiv').show();
         $('.futureOfEastCityDiv').hide();
		}else if(tabId=="futureOfEastCity"){ 
		  $('.prjtmainDiv').hide();	
		 $('.featuresDiv').hide();
         $('.futureOfEastCityDiv').show();
		}
	}
</script>
<!--  end Script for Project --->    
<?php wp_head() ?>
</head>
<body>
<div class="wraper">
<header class="cd-main-header">
<div style="float:left; z-index:99;"><a class="cd-logo" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo"></a></div>
<ul class="cd-header-buttons">
<li><a class="cd-search-trigger" href="#cd-search">Search<span></span></a></li>
<li><a class="cd-nav-trigger" href="#cd-primary-nav">Menu<span></span></a></li>
</ul> <!-- cd-header-buttons -->
</header>
<main class="cd-main-content"><!-- your content here --></main>
<div class="cd-overlay"></div>
<nav class="cd-nav">
<ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
<li class="has-children">
				<a href="#">ABOUT Narne</a>
				<ul class="cd-nav-icons is-hidden">
					<li class="go-back"><a href="#0">Menu</a></li>
					<li class="see-all"><a href="#">About Narne</a></li>
					<li>
						<a class="cd-nav-item item-1" href="<?php  $res=get_url('CMD');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">
							<h3>CMD</h3>
							<p>A true soldier visionary great leader a Gandhian</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-company-profile" href="
                        <?php  $res=get_url('CompanyProfile');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>
                        ">
							<h3>Company Profile</h3>
							<p>The domain of Real Estate nearly three decades ago was notorious for its murky wheeling</p>
						</a>
					</li>

					<!--<li>
						<a class="cd-nav-item item-3" href="<?php  $res=get_url('Reach Us');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">
							<h3>Reach US</h3>
							<p>This is the item description</p>
						</a>
					</li>-->
				</ul>
			</li>

			<li class="has-children">
				<a href="#">PROJECTS</a>
				<ul class="cd-nav-icons is-hidden">
					<li class="go-back"><a href="#0">Menu</a></li>
					<li class="see-all"><a href="#">All Projects</a></li>
					<li>
						<a class="cd-nav-item item-projects" href="<?php  $res=get_url('east city');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
						 //print_r($data);
					 }
					 ?>">
							<h3>EC</h3>
							<p> East City</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-projects" href="<?php  $res=get_url('Central Park');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">
							<h3>CP</h3>
							<p>Central Park</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-projects" href="<?php  $res=get_url('Rolling Meadows');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">
							<h3>RM</h3>
							<p>Rolling Meadows</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-projects" href="
                     <?php  $res=get_url('gvjh');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">
							<h3>GVJH</h3>
							<p>Grand View Jubilee Hills</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-projects" href="<?php  $res=get_url('goldenheightsresidency');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">
							<h3>GH</h3>
							<p>Golden Heights</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-projects" href="<?php  $res=get_url('goldenheightsresidency');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">
							<h3>GHR</h3>
							<p>Golden Heights Residency</p>
						</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="<?php  $res=get_url('Services');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Services</a>
				<!--<ul class="cd-nav-icons is-hidden">
					<li class="go-back"><a href="#0">Menu</a></li>
					<li class="see-all"><a href="#">Browse Services</a></li>
					<li>
						<a class="cd-nav-item item-1" href="#">
							<h3>Service #1</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-2" href="#">
							<h3>Service #2</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-3" href="#">
							<h3>Service #3</h3>
							<p>This is the item description</p>
						</a>
					</li>

				</ul>--->
			</li>
            <li class="has-children">
				<a href="#">Gallery</a>

				<ul class="cd-nav-gallery is-hidden">
					<li class="go-back"><a href="#0">Menu</a></li>
					<li class="see-all"><a href="#">Browse Gallery</a></li>
					<li>
						<a class="cd-nav-item" href="<?php  $res=get_url('EastCityGallery');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/EastCity/menu2.jpg">
							<h3>East City (EC)</h3>
						</a>
					</li>

					<li>
						<a class="cd-nav-item" href="<?php  $res=get_url('CentralParkGallery');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/CentralPark/menu1.jpg">
							<h3>Central Park (CP)</h3>
						</a>
					</li>

					<li>
						<a class="cd-nav-item" href="<?php  $res=get_url('RollingMeadowsGallery');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/CentralPark/menu1.jpg">

							<h3>Rolling Meadows (RM)</h3>
						</a>
					</li>

					<li>
						<a class="cd-nav-item" href="<?php  $res=get_url('GrandViewJubileeHillsGallery');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/GVJH/menu2.jpg">
							<h3>Grand View Jubilee Hills (GVJH)</h3>
						</a>
					</li>
                    <li>
						<a class="cd-nav-item" href="<?php  $res=get_url('GoldenHeightsGallery');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/GoldenHeights/menu3.jpg">
							<h3>Golden Heights (GH)</h3>
						</a>
					</li>
                    <li>
						<a class="cd-nav-item" href="<?php  $res=get_url('GoldenHeightsResidencyGallery');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/GoldenHeights/menu3.jpg">
							<h3>Golden Heights Residency (GHR)</h3>
						</a>
					</li>
				</ul>
			</li>
<li class="has-children">
           <a href="#">EVENTS</a>
           <ul class="cd-nav-icons is-hidden">
					<li class="go-back"><a href="#0">Menu</a></li>
					<li class="see-all"><a href="#">Browse Events</a></li>
					<li>
						<a class="cd-nav-item item-press-release" href="<?php  $res=get_url('PressRelease');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">
							<h3>Press Release</h3>
							<p>Business Standard accent Andhra</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-news-letters" href="<?php  $res=get_url('NewsLetter');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">
							<h3>News Letters</h3>
							<p>New!</p>
						</a>
					</li>

					<!--<li>
						<a class="cd-nav-item item-3" href="#">
							<h3>Service #3</h3>
							<p>This is the item description</p>
						</a>
					</li>--->

				</ul>

</li>
<li><a href="<?php  $res=get_url('Reach Us');
					 while($data=mysql_fetch_array($res))
					 {
						 $url = $data[0];
						 echo $url; 
					 }
					 ?>">Reach US</a></li>
		</ul> <!-- primary-nav -->
	</nav> <!-- cd-nav -->

	<div id="cd-search" class="cd-search">
    <?php get_search_form();?>
		<!--<form>
			<input type="search" placeholder="Search...">
		</form>--->
	</div>
