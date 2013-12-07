<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

  <head>  	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="description" content="fresh Gray Bootstrap 3.0 Responsive Theme "/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap,Bootstrap 3.0 Responsive Theme" />
	<meta name="author" content="Mindfreakerstuff"/>
    <link rel="shortcut icon" href="favicon.png"> 
    
	<title>Sistem Informasi Akademik SMK Negeri 1 Kota Bekasi</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>css/login.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/animate-custom.css" rel="stylesheet">
   

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <!-- <script src="js/custom.modernizr.js" type="text/javascript" ></script> -->
   
  </head>
    <body>
    	<!-- start Login box -->
    	<div class="container" id="login-block">
    		<div class="row">
			    <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
			    	<h3 class="animated bounceInDown">Login</h3>
			       <div class="login-box clearfix animated flipInY">
			        	<div class="login-logo">
			        		<a href="#"><img src="<?php echo base_url();?>img/login-logo.png" alt="Company Logo" /></a>
			        	</div> 
			        	<hr />
			        	<div class="login-form">
			        		<div class="alert alert-error hide">
								  <button type="button" class="close" data-dismiss="alert">&times;</button>
								  <h4>Error!</h4>
								   Your Error Message goes here
							</div>
			        		<form action="login/proseslogin" method="POST"  >
						   		 <input type="text" name="username" placeholder="User name" required/> 
						   		 <input type="password"  name="password" placeholder="Password" required/> 
						   		 <button type="submit" class="btn btn-login">Login</button> 
							</form>	
							<div class="login-links"> 
					            <!-- <a href="forgot-password.html">
					          	   Forgot password?
					            </a>
					            <br />
					            <a href="sign-up.html">
					              Don't have an account? <strong>Sign Up</strong>
					            </a>-->
							</div>      		
			        	</div> 			        	
			       </div>
			  <!--
			       <div class="social-login row">
			        		<div class="fb-login col-lg-6 col-md-12 animated flipInX">
			        			<a href="#" class="btn btn-facebook btn-block">Connect with <strong>Facebook</strong></a>
			        		</div>
			        		<div class="twit-login col-lg-6 col-md-12 animated flipInX">
			        			<a href="#" class="btn btn-twitter btn-block">Connect with <strong>Twitter</strong></a>
			        		</div>
			        </div>-->
			    </div>
			</div>
    	</div>
     
      	<!-- End Login box -->
     	<footer class="container">
     		<p id="footer-text"><small>Copyright &copy; 2013 <a href="http://smkn1kotabekasi.sch.id/">SMK Negeri 1 Kota Bekasi</a></small></p>
     	</footer>
		
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script> 
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
        <script src="<?php echo base_url();?>assets/js/placeholder-shim.min.js"></script>        
        <script src="<?php echo base_url();?>assets/js/custom.js"></script>
    </body>
</html>
