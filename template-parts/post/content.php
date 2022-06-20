<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>


    <!-- single news Block -->
    <div class="col-lg-4 col-md-6 wow animated customFadeInLeft">
        <div class="news-block mb-30">
            <div class="blog-thumb">

            <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
                } else { ?>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/blog/thumbnail-default.jpg" alt="<?php the_title(); ?>" />
            <?php } ?>

            </div>
            <div class="news-inner">
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <div class="news-text">
                    <?php the_excerpt(); ?>
                </div>
                <div class="admin-by">
                    <a href="#"><?php the_author(); ?></a>
                </div>
                <div class="post-date">
                    <a href="#"><?php the_time('d F Y'); ?></a>
                </div>
            </div>
            <div class="hover">
                <div class="hover-inner">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="blog-read-time">5 min Read</div>
                </div>
            </div>
        </div>
    </div>
