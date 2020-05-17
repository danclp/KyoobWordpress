<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kyoob_arc
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php if( is_home() || is_archive() ) : ?>
    
        <figure>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
                <figcaption>
                    <p><?php the_title(); ?></p>
                    <small><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></small>
                </figcaption>
            </a>
        </figure>
    
    <?php elseif( is_singular() ) : ?>
    
        <section class="showcase">
            <div class="wrap">
                <?php
                $showcase = get_field('portfolio_contents');
                if($showcase) :
                ?>
                <div class="showcase_wrap">
                    <div class="showcase-casestudy">
                        <?php the_content(); ?>
                        <div class="showcase-statistic">
                            <?php $land = $showcase['land_dimension']; ?>
                            <div class="satistic site-area">
                                <small>site area</small>
                                <p><span><?php echo $land['site_area']; ?></span><sup>sqm</sup></p>
                            </div>
                            <div class="satistic gfa">
                                <small>gfa</small>
                                <p><span><?php echo $land['gfa']; ?></span><sup>sqm</sup></p>
                            </div>
                        </div>
                    </div>
                    <div class="showcase-feature">
                        <figure>
                            <img src="<?php echo esc_url( $showcase['sub_image']['url'] ); ?>" alt="<?php echo esc_attr( $showcase['sub_image']['alt'] ); ?>">
                        </figure>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="showcase-gallery">
                <?php $lightbox = get_field('lightbox');
                if($lightbox) :
                ?>
                <ul class="owl-carousel owl-theme showcase-thumbnails">
                    <?php foreach( $lightbox as $image ) : ?>
                    <li>
                        <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"><img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
        </section>
    
    <?php endif; ?>
    
</article><!-- #post-<?php the_ID(); ?> -->