<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
        <!--------------->
        <!-- CRM Login -->
        <!--------------->
        <div class="nav-about">
            
            
                <div class="break-large"></div>
                
                
                <div class="content">
                
                    <div class="one-whole">
                                            
                        
						<?php 
						
						if (is_user_logged_in() === false ){ ?>
							
							
							<!-- SECTION HEADER -->
							<h2>CRM Login</h2>
	
	
							<div class="break-medium"></div>

							<?php
							$args = array(
                                'echo'           => true,
                                'redirect'       => site_url('/wp-admin'), 
                                'form_id'        => 'loginform',
                                'label_username' => NULL,
                                'label_password' => NULL,
                                'label_remember' => __( 'Remember Me' ),
                                'label_log_in'   => __( 'Log In' ),
                                'id_username'    => 'user_login',
                                'id_password'    => 'user_pass',
                                'id_remember'    => 'rememberme',
                                'id_submit'      => 'wp-submit',
                                'remember'       => true,
                                'value_username' => NULL,
                                'value_remember' => false
                        	);
							
							// Show Login
							wp_login_form( $args ); ?>
                            
                            
                            <!-- VALUES -->
                       	    <script>
                            $(document).ready(function() {
                                
								// Set Value
								$("input#user_login").val("Username");
								                  
                                // On Focus
                                $("input#user_login").focus(function(){
                                    if( $(this).val() == "Username" ){
                                        $(this).val("");
                                    }
                                });
								
								// On Blur
                                $("input#user_login").blur(function(){
                                    if( $(this).val() == "" ){
                                        $(this).val("Username");
                                    }
                                });	
                           
                            });
                        	</script>
                            
                            <?php

                        } // End IF
						
						
						// If user IS logged in
						else {
							
							// Get the current user information
							global $current_user;
							get_currentuserinfo();
													
                            
							echo '<h2>Hello ' . $current_user->user_firstname . "</h2>";
							echo '<div class="break-medium"></div>';
							echo '<p><a href="wp-admin/admin.php?page=wpi_main">View Invoices</a></p>';
							
							
						}
						?>

                        
                        
						
                        
                    </div><!-- END Whole -->
                
                </div><!-- End Content -->
                
        
        </div><!-- END ABOUT SECTION (Smint) -->
        
        
        <div class="break-large"></div>        


<?php get_footer(); ?>