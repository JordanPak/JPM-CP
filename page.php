<?php get_header(); ?>
			
        <!--------------->
        <!-- 404 ERROR -->
        <!--------------->
        <div class="nav-about">
        
            
            
                <div class="break-large"></div>
                
                
                <div class="content">
                
                    <div class="one-whole">

					
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
                        
						    <!-- SECTION HEADER -->
                            <h2 itemprop="headline"><?php the_title(); ?></h2>
                            
                                                    
                            <div itemprop="articleBody">
								<?php the_content(); ?>
                            </div> <!-- end article section -->
                            
                            
                            
                            <!--<footer>
                                <?php //the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ', ', '</p>'); ?>
                            </footer> <!-- end article footer -->
                        
                        
                        <?php //comments_template('',true); ?>
                        
                        <?php endwhile; ?>		
                        
                        <?php else : ?>

                            <!-- Featured Section -->
                            <section class="featured">
                                
                                <?php _e("Not Found", "wpbootstrap"); ?><br>
                                <span><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?>
                                <div class="break-medium"></div>
                                <a class="button_black" href="http://jpakmedia.com/" style="font-size: 18px;">Return to JpakMedia</a></span>
                                
                            </section>
     
                        <?php endif; ?>
                                                                        
                            
                    </div><!-- END Whole -->
                
                </div><!-- End Content -->
                
        
        </div><!-- END ABOUT SECTION (Smint) -->
        
        
        <div class="break-large"></div>        

<?php get_footer(); ?>