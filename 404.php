<?php
/**
 * The template for displaying 404 Not Found Page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cogency
 */
get_header();
?>


    <!--==================================================================== 
                            Start breadcumb section
    =====================================================================-->
        <section class="banner-section pt-200 pb-175">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title text-center">
                            <h1><?php esc_html_e( 'Opps!! Page Not Found', 'conzex' ); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--==================================================================== 
                            end breadcumb section
    =====================================================================-->


        <!--==================================================================== 
                           start Error Section
    =====================================================================-->

        <section class="error-section another-page pt-75 pb-30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="error-text">
                            <h1><?php esc_html_e( '404', 'conzex' ); ?></h1>
                            <h2><?php esc_html_e( 'Opps!! Looks like something went wrong', 'conzex' ); ?></h2>
                        </div>
                        <div class="home-or-search">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-bg"><?php esc_html_e( 'Go Home', 'conzex' ); ?></a>
                            <span class="or"><?php esc_html_e( 'Or', 'conzex' ); ?></span>
                            <!-- Error Search Form -->
                            <div class="search-box">
                                <form method="post" action="http://muzaddidul.com/conzex/contact.html">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Search" required>
                                        <button type="submit"><span class="icon fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================================================================== 
                           end Error Section
    =====================================================================-->



<?php get_footer(); ?>