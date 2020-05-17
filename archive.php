<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kyoob_arc
 */

get_header();
?>

    <div id="primary" class="content-area">
        <div class="filter">
            <nav class="filter-nav">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-3',
                    'menu_id'        => 'filter-menu',
                    'container'      => '',
                ) );
                ?>
            </nav>
        </div>
        <main id="main" class="site-main contents">
            
            <div class="portfolios">

                <?php if ( have_posts() ) : ?>

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', get_post_type() );

                        endwhile; ?>

                    <?php
                    // the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;
                ?>
                
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
