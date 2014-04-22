<!DOCTYPE html>
<html lang="en">

	<head>
    
        <meta charset="utf-8" />
        <!--[if IE]>
        <meta http-equiv="imagetoolbar" content="no" />
        <![endif]-->

<?php $isiPhone = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPhone');
               if ( $isiPhone ) { ?>
               <?php // This is an iPhone! ?>
               <meta name="viewport" content="width=device-width" />
               <?php    } else { ?>
               <?php // Not an iPad ?>
                       <meta name="viewport" content="width=980" />
               <?php } ?>


		<title><?php print "" . $html_title . ""; ?></title>
        
        <!-- CSS -->

		<link href="stylesheets/screen.css" media="all" rel="stylesheet" type="text/css" />
		
				        
        <!--[if IE]>
        <style type="text/css">
        	@font-face { font-family: LatoReg; src: url(fonts/lato-fontfacekit/Lato-Reg-webfont.eot); }
            @font-face { font-family: LatoLight; src: url(fonts/lato-fontfacekit/Lato-Lig-webfont.eot); }
            @font-face { font-family: LatoBold; src: url(fonts/lato-fontfacekit/Lato-Bol-webfont.eot); }
        </style>
        <![endif]-->
        
        <!-- JAVASCRIPT -->
        <script type="text/javascript" src="javascripts/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="javascripts/jquery.tweet.js"></script>
        
        <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    	<![endif]-->
        
        <!-- SEO -->
        <meta name="keywords" content="<?php print "" . $html_keywords . ""; ?>" />
        <meta name="description" content="<?php print "" . $html_description . ""; ?>" />

		<!-- ICONS -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="apple-touch-icon" href="favicon-ios-57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="favicon-ios-72.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="favicon-ios-114.png" />


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32227013-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

    
    </head>
    
    <body>
    
        
    
            
    <header id="headerWrapper">
    	<div id="headerContent">
    	
        	<a href="index.php"><img src="images/iode-logo.gif" alt="iode software"></a>
        
            <ul>
                <?php if($html_section == 'home'){echo '<li class="active">';} else {echo '<li>';} ?><a href="index.php">Home</a></li>
                <?php if($html_section == 'about'){echo '<li class="active">';} else {echo '<li>';} ?><a href="about.php">About us</a></li>
                <?php if($html_section == 'services'){echo '<li class="active">';} else {echo '<li>';} ?><a href="services.php">Services</a></li>
                <?php if($html_section == 'contact'){echo '<li class="active">';} else {echo '<li>';} ?><a href="contact.php">Contact us</a></li>
            </ul>
        
    	</div>
    </header>
    
    
    
