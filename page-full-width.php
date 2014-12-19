<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>
			
    <!---------------------->
    <!-- ABOUT ME SECTION -->
    <!---------------------->
    <div class="nav-about">
    
        
        
        <div class="break-large"></div>
        
        
        <div class="content">
        
            <div class="one-whole">

				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
                
                <!-- SECTION HEADER -->
                <h2><?php //the_title(); ?>Jpak<span style="color:#000;">Media</span> <span style="font-weight:300;">| Invoice</span></h2>
                <!--<p><b>Subtitle</b></p>-->
                <br>
                
                
                <?php the_content(); ?>
                                
                
                <div class="break-large"></div>
				
				<?php endwhile; ?>	

				<?php endif; ?>

            </div><!-- END Whole -->
        
        </div><!-- End Content -->
            
    
    </div><!-- END ABOUT SECTION (Smint) -->

<?php get_footer(); ?>