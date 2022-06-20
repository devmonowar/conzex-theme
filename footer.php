<?php global $conzex_option; ?>
        <!--==================================================================== 
                            Start footer section
    =====================================================================-->

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <!--big column-->
                    <div class="col-md-7">
                        <div class="row">

                            <!--Footer Column-->
                            <div class="col-sm-7">
                            	<?php 
								if ( is_active_sidebar( 'footer_area_1' ) ) :
									dynamic_sidebar( 'footer_area_1' );
								endif;
								?>
                            </div>

                            <!--Footer Column-->
                            <div class="col-sm-5 mb-30">
		                        <?php 
								if ( is_active_sidebar( 'footer_area_2' ) ) :
									dynamic_sidebar( 'footer_area_2' );
								endif;
								?>
                            </div>
                        </div>
                    </div>

                    <!--big column-->
                    <div class="col-md-5">
                        <div class="row">

                            <!--Footer Column-->
                            <div class="col-sm-6 mb-30">
                                <?php 
								if ( is_active_sidebar( 'footer_area_3' ) ) :
									dynamic_sidebar( 'footer_area_3' );
								endif;
								?>
                            </div>

                            <!--Footer Column-->
                            <div class="col-sm-6 mb-30"><?php 
								if ( is_active_sidebar( 'footer_area_4' ) ) :
									dynamic_sidebar( 'footer_area_4' );
								endif;
								?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--Copyright-->
            <div class="footer-bottom">
                <?php echo $conzex_option['copyright_text']; ?>
            </div>
        </footer>


    <!--==================================================================== 
                            End footer section
    =====================================================================-->

            <!-- Scroll Top Button -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fa fa-angle-up"></span>
        </button>

     </div>
    
    
    <?php wp_footer(); ?>
</body>

</html>