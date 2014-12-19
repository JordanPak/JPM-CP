        <!------------>
        <!-- FOOTER -->
        <!------------>        
		<footer>
        
        	<div class="content">
            
            	<div class="one-whole">
                	
                    <img class="align-right" src="http://jpakmedia.com/images/logo-header.png" alt="JpakMedia">
                    
                    <p>Copyright &copy; JpakMedia 2014.</p>
                
            	</div><!-- End Whole -->
            
            </div><!-- End Content -->
        
        </footer>
        
        

		<!-- END SCRIPTS -->       
        <script>
            var nav = responsiveNav(".nav-collapse", { // Selector
              animate: true, // Boolean: Use CSS3 transitions, true or false
              transition: 400, // Integer: Speed of the transition, in milliseconds
              label: "Menu", // String: Label for the navigation toggle
              insert: "after", // String: Insert the toggle before or after the navigation
              customToggle: "mobile-toggle", // Selector: Specify the ID of a custom toggle
              openPos: "relative", // String: Position of the opened nav, relative or static
              jsClass: "js", // String: 'JS enabled' class which is added to <html> el
              init: function(){}, // Function: Init callback
              open: function(){}, // Function: Open callback
              close: function(){} // Function: Close callback
            });
        </script>

        <script>
			$(document).ready(function() {
                				                  
				// On Focus
				$("textarea").focus(function(){
					if( $(this).val() == "Message" ){
						$(this).val("");
					}
				});
				$("textarea").blur(function(){
					if( $(this).val() == "" ){
						$(this).val("Message");
					}
				});	
			
			});
		</script>
       
                
        <!-- QuForm (NOT NEEDED IN CRM) -->
        <!--<script type="text/javascript" src="http://jpakmedia.com/quform/js/plugins.js"></script>
		<script type="text/javascript" src="http://jpakmedia.com/quform/js/scripts.js"></script> -->
		
        
        <!-- GOOGLE ANALYTICS (NOT NEEDED IN CRM)-->
		<!--<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-47459590-1', 'jpakmedia.com');
          ga('send', 'pageview');
        
        </script> -->    
         
        
        <!-- SMINT -->
        <script type="text/javascript">
			$(document).ready(function() {
           		// LOAD ORDER IS IMPORTANT! PUT SMINT LAST
				$('.nav-main').smint();
            });
		</script>
     
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>