<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kyoob_arc
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main contents">

            <section class="error-404 not-found wrap">
                <header class="page-header">
                    <h2 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'kyoob_arc' ); ?></h2>
                </header><!-- .page-header -->

                <div class="page-content">
                    <p><?php esc_html_e( 'Perhaps you can check again the url you have just typed.', 'kyoob_arc' ); ?></p>
                </div><!-- .page-content -->
            </section><!-- .error-404 -->

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
