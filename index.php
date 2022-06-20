<?php
/**
 * The main Template file
 *
 * @package conzex
 */

get_header(); 

    get_template_part( 'template-parts/breadcumb' );

?>

    
        <!--==================================================================== 
                            Start Blog section
    =====================================================================-->
     


    <div class="blog-grid-wrapper another-page pt-95">
        <div class="container">
            <div class="row">
                            

                <?php
            if ( have_posts() ) :

                // Start the Loop.
                while ( have_posts() ) :
                    the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that
                     * will be used instead.
                     */
                    get_template_part( 'template-parts/post/content', get_post_format() );

                endwhile;

                //the_posts_pagination();

            else :

                get_template_part( 'template-parts/post/content', 'none' );

            endif;
            ?>




                            
                <!-- single news Block -->
<!-- 
                <div class="col-lg-4 col-md-6 wow animated customFadeInLeft">
                    <div class="news-block mb-30">
                        <div class="blog-thumb">
                            <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/blog/grid-blog2.png" alt="news">
                        </div>
                        <div class="news-inner">
                            <h5><a href="blog-details.html">3 Advantages of Using Next- Generation Firewalls</a></h5>
                            <div class="news-text">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed</p>
                            </div>
                            <div class="admin-by">
                                <a href="#">Tim J. Hill</a>
                            </div>
                            <div class="post-date">
                                <a href="#">15 June 2019</a>
                            </div>
                        </div>
                        <div class="hover">
                            <div class="hover-inner">
                                <h4><a href="blog-details.html">3 Advantages of Using Next- Generation Firewalls</a></h4>
                                <div class="blog-read-time">5 min Read</div>
                            </div>
                        </div>
                    </div>
                </div>
                 -->
                       
            </div>
        </div>
    </div>



        <!--==================================================================== 
                            End Blog section
    =====================================================================-->


<?php get_footer(); ?>
