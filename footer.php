<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kyoob_arc
 */

?>

        </div><!-- #content -->
    </div><!-- .pageWrap -->
    
    <footer class="social-footer">
		
        <div class="site-footer_wrap wrap">
            <nav class="social-media">
                <?php
                $socialist = array(
                    'theme_location' => 'menu-2',
                    'menu_id'        => 'social-menu',
                    'container'       => false,
                    'echo'            => false,
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                );

                echo strip_tags(wp_nav_menu( $socialist ), '<a>' );
                ?>
            </nav>
        </div>

    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
