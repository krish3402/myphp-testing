<link href="<?php echo get_template_directory_uri(); ?>/css/login_style.css" rel='stylesheet' type='text/css' />
<script type="application/x-javascript">
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<div class="login-form">
<div class="head"><img src="<?php echo get_template_directory_uri(); ?>/images/Logo_2.png" alt=""/></div>
<form>
<li>
<input type="text" class="text" value="USERNAME" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'USERNAME';}" ><a href="#" class=" icon user"></a></li>
<li>
						<input type="password" value="Password" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
					</li>
					<div class="p-container">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Forgot Password</label>
								<input type="submit" onClick="myFunction()" value="SIGN IN" >
							<div class="clear"> </div>
					</div>
				</form>
			</div>
			<!--//End-login-form-->
		  <!-----start-copyright---->
   					<div class="copy-right">
						<p>Powered By <a href="#">Digitology.co.uk</a></p> 
					</div>
				<!-----//end-copyright---->