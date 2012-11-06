<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<div class='clear'></div>

<div style='margin-left:auto;margin-right:auto;width:1000px'>
    <div  style='float:left;width:800px;'>
    	<!-- Thank You Page -->
        <?php
        if( in_array( $page_id, array( 296 ) ) ){
        	echo winABedThankyou( $firstname=$_SESSION['firstname'] );	
			echo thankYouFooter();
		} else if ( in_array( $page_id, array( 300 ) ) ){
        	echo freePillowThankyou( $firstname=$_SESSION['firstname'] );	
			echo thankYouFooter();
		} else if ( in_array( $page_id, array( 302 ) ) ){
        	echo freeSleepReportThankyou( $firstname=$_SESSION['firstname'] );	
			echo thankYouFooter();
		} else if ( in_array( $page_id, array( 304 ) ) ){
			echo freeNewsLetterThankyou( $firstname=$_SESSION['firstname'] );
			echo thankYouFooter();
		} 
		
		
   		if( in_array( $page_id, array(227, 232, 237, 238, 239, 318) ) ){
  		?>
  		<div class="header-standard" style="color: #005aa2;">Craftmatic Blogs</div>
  		<br />
  		<div style='float:left;height:auto;margin-left:auto;margin-right:auto;font-family:arial;font-size:15px;width:720px;padding-bottom:30px;background-color:#e9ebed' class='corner'  >
	    <div style='text-align:left' class='blog-logo'></div>
		<div style='text-align:left;padding-left:100px' class='text'>

		<?php
		    //Left Content
            $content = get_post( $page_id );
			echo "
				  <p style='padding-top:20px;color:#005AA2;font-weight:bold;font-size:20px;'><a style='text-decoration:none;color:#005AA2' href='".$content->post_name."'>".$content->post_title."</a>
				  	<div  style='border-top:1px solid #005AA2;margin-top:-20px;margin-left:-1px;width:550px;'></div>
				  	<div>by: Craftmatic Australia</div>
				  </p>
				  <div style='width:550px;text-align:justify;font-size:13px;' class='text'>
				 ";
            echo  $content->post_content;
		?>
		
		</div>
		</div>
		</div>
		<?php	
			} else {
            	$content = get_post( $page_id );
            	echo  $content->post_content;				
			}
			if ( $page_id == 22 ){
		?>
			<div class="header-standard text" style="color: #005aa2;">Craftmatic Blogs</div>
			<?php 
				$result = blogList();
				foreach($result as $key=>$value){
		?>

				<?php 
				echo blogLoop($value->post_name, $value->post_title, $value->post_content);
				?>
				
		
				<div class='clear'></div>
				<br />			
		<?php
				}
				}
			
        ?>
    </div><!-- Left Wing -->

	<?php if(is_front_page()){ ?>
    <div style='float:left;width:200px;margin-top:30px;'>

        <?php echo timer(); ?>
        <?php echo winABed(); ?>
        <?php //echo "<a href='http://".$_SERVER["SERVER_NAME"]."/forms/free-sleep-report/'><div class='wab'></div></a>"; ?>
        
    </div><!-- Right Wing -->
    <?php } else { ?>
    <div style='float:left;width:200px;'>
    	<!--about-us -->
        <?php if ( !in_array( $page_id, array(17, 296, 405, 408, 410, 412, 414, 416, 299, 300, 301, 302, 303, 304) ) ){ echo winABed(); } ?>
        <div class='clear'></div>
        <?php if( $page_id == 12 ) { echo customerStories(); ?>
        <div class='clear'></div>        
        <?php echo currentPromotions(); ?>
        <div class='clear'></div>
        <?php echo whatsNew(); ?>
        <div class='clear'></div>
        <?php echo ourPartners(); ?>
        <?php } ?>
        
		<!--adjustable-beds -->
        <div class='clear'></div>
        <?php if( $page_id == 14 ) { ?>
        <?php //echo recentPost(); ?>
        <!--div class='clear'></div-->
        <?php } ?>        
        
        <!--customer-feedback-->
        <div class='clear'></div>
        <?php if( $page_id == 19 ) { ?>
        <?php echo customerStories(); ?>
        <div class='clear'></div>
        <?php echo whatsNew(); ?>
        <div class='clear'></div>       
		<?php echo recentPost(); ?> 
        <?php } ?> 
        
        <!--craftmatic-blog-->
        <div class='clear'></div>
        <?php if( in_array($page_id, array(22, 239, 238, 237, 232, 227)) ) { ?>
        <?php echo customerStories(); ?>
        <div class='clear'></div>
        <?php echo whatsNew(); ?>
        <div class='clear'></div>       
		<?php echo recentPost(); ?> 
        <?php } ?>
        
        <!--products-->
        <?php if( in_array($page_id, array(33, 286, 293)) ) { ?>
        <?php echo whatsNew(); ?>
        <div class='clear'></div> 
        <?php echo callusToday(); ?>
    	<?php } ?> 
    	   	
    </div><!-- Right Wing -->
    <?php } ?>
    <div class='clear'></div>
    <?php if(is_front_page()){
    	 echo homeFooterMenu(); 
    	 echo homeArticle(); 
	}?>
    
</div>
<div class='clear'></div>

<?php get_footer(); ?>