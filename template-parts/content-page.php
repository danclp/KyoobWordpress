<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kyoob_arc
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="intro">
				
        <div class="intro_wrap wrap">
            <div class="intro-text">
                <?php the_content(); ?>
            </div>
        </div>

    </section> <!-- .intro -->

    <!-- People -->
    <?php if( is_page( 'about' ) ) :
        get_template_part( 'template-parts/section', 'people' );
        // Approach Section
        get_template_part( 'template-parts/section', 'approach' );
    endif; ?>

    <!-- Services -->
    <?php get_template_part( 'template-parts/section', 'services' ) ?>

    <!-- Directors -->
    <?php if( is_page( 'about' ) ) : 
        get_template_part( 'template-parts/section', 'director' );
    endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
