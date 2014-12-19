<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title( '|', true, 'right' ); ?> JpakMedia CRM</title>
        <meta name="author" content="Jordan Pakrosnis">
        <meta name="copyright" content="&copy JpakMedia LLC 2014">
        <meta name="viewport" content="width=device-width">
        
        <link rel="shortcut icon" href="favicon.ico">
		<link rel="canonical" href="http://jpakmedia.com" />        
        
        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="http://jpakmedia.com/css/normalize.min.css">
        <link rel="stylesheet" href="http://jpakmedia.com/css/main.css">
        
        <!-- Not Needed In CRM
        <link rel="stylesheet" href="http://jpakmedia.com/quform/css/base.css">
        <link rel="stylesheet" href="http://jpakmedia.com/quform/themes/jpm-v3/jpm-v3.css">
		<link rel="stylesheet" href="http://jpakmedia.com/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen">
        -->
        
        <link rel="stylesheet" href="http://jpakmedia.com/css/media-queries.css">
        <link rel="stylesheet" href="http://jpakmedia.com/css/responsive-nav.css">
        
        
        <!-- FOR INVOICE DEVELOPMENT -->
        <link rel="stylesheet" href="http://localhost/jpmv3-crm/wp-content/themes/jpmv3-crm/wpi/jpmv3-wpi.css">

        <!-- FOR INVOICE -->
        <link rel="stylesheet" href="http://jpakmedia.com/crm/wp-content/themes/jpmv3-crm/wpi/jpmv3-wpi.css">
        
                
		<!-- THIS MAKES GOOGLE FONTS WORK FOR IE8 -->
		<!--[if !IE]><!-->
        	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,700italic,900,900italic,100,100italic' rel='stylesheet' type='text/css'>
		<!--<![endif]-->
        
        <!-- IE8 & Lower -->
     	<!--[if lt IE 9]>
        	<link href="http://jpakmedia.com/css/ie.css" type="text/css" rel="stylesheet">
        <![endif]-->
        
		<!-- FONTS FOR IE8 -->
        <!--[if lte IE 8]>
        	<link href="css/ie.css" type="text/css" rel="stylesheet">
            <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
            <link href="http://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet" type="text/css">
            <link href="http://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet" type="text/css">
            <link href="http://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet" type="text/css">
        <![endif]-->
                
		
        <!-- JQUERY -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		
		<!-- MODERNIZR -->
		<script src="http://jpakmedia.com/js/vendor/modernizr-2.6.2.min.js"></script>
		
		<!-- SMINT MENU -->
		<script src="http://jpakmedia.com/js/jquery.smint.js"></script>

        <!-- FancyBox (NOT NEEDED IN CRM) -->
		<!-- <script src="http://jpakmedia.com/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script> -->

        <!-- Responsive Nav -->
        <script src="http://jpakmedia.com/js/responsive-nav.js"></script>
        
        <!-- FancyBox (NOT NEEDED IN CRM) -->		
		<!--<script type="text/javascript">
			$(document).ready( function() {
				$('.fancybox').fancybox({
					'width':'80%',
					'height':'80%'
				});				
			});
		</script>-->
          
    </head>
    
	<body <?php body_class(); ?>>
           
        <!------------>
        <!-- HEADER -->
        <!------------>
        <div class="nav-home">
        
            <header style="height:240px;">
            
                <div class="content">
                
                    <div class="one-whole">
                    
                        <!-- BIG J -->
                        <img src="http://jpakmedia.com/images/big-j.png" style="max-width: 260px; height:auto;" class="big-j" alt="JpakMedia">
        
                        
                        <!-- Main Logo -->
                        <a href="<?php echo home_url(); ?>"><img class="main-logo" src="http://jpakmedia.com/images/logo-header.png" alt="JpakMedia"></a>
                        
                        
                        <!-- Header Quote -->                
                        <h2 class="header-quote"><strong>Client Portal</strong> &amp; Invoicing</h2>
                    
                    </div><!-- END WHOLE -->       
                
                </div><!-- End Content -->
            
            </header>
            
        </div><!-- END NAV-HOME (Smint) -->
        
        
        
        <!--------------------->
        <!-- MAIN NAVIGATION -->
        <!--------------------->        
      
        <!-- Smint Wrapper -->
        <div class="nav-main">

            <div class="content">
                          
                
                <nav class="main nav-collapse">
                                    
                    <ul>
                    	<li><a href="<?php echo home_url(); ?>">Login</a></li>
                        <li><a href="http://jpakmedia.com/#contact-section">Contact</a></li>
                        <li><a href="http://jpakmedia.com/">JPM Home</a></li>
                    </ul>
                            
                </nav>
                 
                
                <div class="nav-social">
                    
                    <a href="http://jpakmedia.com/#contact-section"><img src="http://jpakmedia.com/images/icon-email.png" alt="email"></a>
                    <!--<a href="#"><img src="images/icon-pinterest.png" alt="Pinterest"></a>-->
                    <a href="https://www.facebook.com/JpakMedia" target="_blank"><img src="http://jpakmedia.com/images/icon-facebook.png" alt="Facebook"></a>
                    
                </div><!-- End Nav Social -->          


                <!-- MOBILE TOGGLE -->
          		<img src="http://jpakmedia.com/images/mobile-menu-icon.svg" width="24px" height="24px" id="mobile-toggle" alt="Open/Close Menu">


            </div><!-- End Content -->               

        </div><!-- End Smint Wrapper -->
