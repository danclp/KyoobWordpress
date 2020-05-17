<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

            <?php
            if ( have_posts() ) : ?>

                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            
                <div class="portfolios">
            
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
                
                </div> <!-- .portfolios -->
            <?php
            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
