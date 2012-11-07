<?php //session_start(); ?>
<?php $page_id = get_the_ID(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us">
<head>

<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	//bloginfo( 'name' );

	// Add the blog description for the home/front page.
	//$site_description = get_bloginfo( 'description', 'display' );
	//if ( $site_description && ( is_home() || is_front_page() ) )
		//echo " | $site_description";

	?>
</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!--link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo('template_url'); ?>/shadowbox.css" /-->
<!--[if IE 8]>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie8.css" media="screen" type="text/css" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie9.css" media="screen" type="text/css" />
<![endif]-->
<script type="text/javascript" src=" <?php echo bloginfo('template_url'); ?>/js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src=" <?php echo bloginfo('template_url'); ?>/js/jquery.lwtCountdown-1.0.min.js"></script>
<!--script type="text/javascript" src=" <?php echo bloginfo('template_url'); ?>/js/shadowbox.js"></script-->
<script type="text/javascript" src=" <?php echo bloginfo('template_url'); ?>/js/craftmatic.js"></script> 
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>


<?php	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		
	 wp_head(); 
?>
</head>
<body>
<script type="text/javascript">
<?php if(is_front_page()){ ?>
window.onload = function() {
	
		//Get the screen height and width
		var maskHeight = $xx(document).height();
		var maskWidth = $xx(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$xx('#xxpromo').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$xx('#xxpromo').fadeIn(100);	
		$xx('#xxpromo').fadeTo("slow",.8);	
		$xx('#result').fadeIn(1000);	
		$xx('#result').fadeTo("slow",1);	
	
		//Get the window height and width
		var winH = $xx(window).height();
		var winW = $xx(window).width();
              
		//Set the popup window to center
		//$xx(id).css('top',  winH/2-$xx(id).height()/2);
		//$xx(id).css('left', winW/2-$xx(id).width()/2);
	
		//transition effect
		//$xx(id).fadeIn(2000); 
    // open a welcome message as soon as the window loads

};
<?php } ?>
</script>
<?php echo lightBox(); ?>

		<div style="margin-top:108px;position:absolute;">
			<div id="wrapper">
				<div id="page-wrap">	
					<div id="floating-box">
						<div id="box" class="corner">
							<div style="text-align:center;"><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://bit.ly/NGbD8N" data-counturl="http://craftmatic.com.au" data-lang="en" data-count="vertical">Tweet</a> </div>
							<br />
							<div style="text-align:center;"><div class="g-plusone" data-size="tall"></div></div>
							<br />
							<div style="margin-left:9px" class="fb-like" data-href="http://craftmatic.com.au" data-send="false" data-layout="box_count" data-show-faces="false" data-font="tahoma"></div>
						</div>
					 </div>
				</div>	
			</div>
		</div>
<?php
	$args = array(
        'depth'        => 1,
        'show_date'    => '',
        'date_format'  => get_option('date_format'),
        'child_of'     => 0,
        'exclude'      => '',
        'include'      => '',
        'title_li'     => __(''),
        //'echo'         => 1,
        'authors'      => '',
        //'sort_column'  => 'menu_order',
        'link_before'  => '',
        'link_after'   => '',
        'walker'       => '',
        'post_type'    => 'page',
        'post_status'  => 'publish'
	);
?>
<!--Thank You Pages Not Allowed for menu-->

<?php if ( !in_array( $page_id, array( 296, 405, 408, 412, 410, 414, 416, 299, 300, 301, 302, 303, 304 ) ) ){ ?>
<div class='menu-cover'>
	<div class='top-menu'>
        <ul>	
            <?php wp_list_pages( $args ); ?>
        </ul>
    </div>
</div>
<div class='headerDivider2'></div>
<?php } else {?>
<div class='menu-cover' style='height:28px;'> 
</div>
<div class='headerDivider2' style='margin-top:-35px;'></div>
<?php } ?> 	
<div class='swish'></div>

<div id='adjustable-beds' class='balance product-sub-hide'>
	<div id='adjustable-beds-sub' class='sub-product-position'>
		<ul id="product-sub">
		   <li class="mod-width1"><a href="../craftmatic-model-i">Model I</a></li>
		   <li class="mod-width1"><a href="../craftmatic-model-ii">Model II</a></li>
		   <li class="mod-width1"><a href="../craftmatic-monaco">Monaco</a></li>
		</ul>
	</div>
</div>

<div id='promotionsx' class='balance promo-sub-hide'>
	<div id='promotionsx-sub' class='sub-promotion-position'>
		<ul id="promo-sub">
		   <li class="mod-width2"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/win-a-bed">Win A Bed</a></li>
		   <li class="mod-width2"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/free-pillow">Free Pillow</a></li>
		   <li class="mod-width2"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/free-sleep-report">Free Sleep Report</a></li>
		   <li class="mod-width2"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/newsletter">Newsletter</a></li>
		</ul>
	</div>
</div>	
<?php
echo adjustFontSize();
    if( is_front_page() ){
        echo headerLogoOne();
?>
<?php
    } 
	
	else if ( in_array( $page_id, array(17, 296, 300, 302, 304) ) ){
    	echo headerLogoThree();
		
?>
<div id='countdown_dashboard'></div>
<?php
	//Remove any logo
	} else if ( in_array( $page_id, array( 297, 408 ) ) ){
		echo winABed2();
	} else if ( in_array( $page_id, array( 299, 412) ) ){
		echo freePillow();
	} else if ( in_array( $page_id, array( 301, 414 ) ) ){
		echo freeSleepReport();
	} else if ( in_array( $page_id, array( 303, 416) ) ){
		echo freeNewsLetter();
	}
	
	else{
    	echo headerLogoTwo();
?>
<div style='float:left;margin-top:-75px;margin-left:90px;'>
<?php echo timer(); ?>
</div>

<?php
	}
?>


<div class='clear'></div>
