<?php $bio = new WP_Query( array(
    'pagename' => 'about/directors',
) ); 

if( $bio->have_posts() ) :
?>
<section class="director">
    <?php while( $bio->have_posts() ) : $bio->the_post(); ?>
        <?php if( have_rows('director_profile') ) : ?>
        <div class="director-screen">
            <?php
            $image = get_field('group_photo');
            if( !empty( $image ) ) : ?>
                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ) ?>">
            <?php endif; ?>
            <div class="director-bio_wrap">
                <?php while( have_rows('director_profile') ) : the_row(); 
                    $thumbnail = get_sub_field('bio_photo');
                    $name = get_sub_field('name');
                    $destination = get_sub_field('destination');
                    $background = get_sub_field('background');
                ?>
                    <div class="director-bio">
                        <div class="director-name">
                            <p><?php echo $name; ?></p>
                            <small><?php echo $destination; ?></small>
                        </div>
                        <div class="bio-text">
                            <?php echo $background; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div><!-- .director-bio_wrap -->
        </div><!-- .director-screen -->
        <div class="wrap">
            <div class="director-device">
                <?php while( have_rows('director_profile') ) : the_row(); 
                    $thumbnail = get_sub_field('bio_photo');
                    $name = get_sub_field('name');
                    $destination = get_sub_field('destination');
                    $background = get_sub_field('background');
                ?>
                    <figure>
                        <img src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt'] ?>">
                        <figcaption>
                            <h4><?php echo $name; ?></h4>
                            <small><?php echo $destination; ?></small>
                            <?php echo $background; ?>
                        </figcaption>
                    </figure>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
    <?php endwhile; ?>
</section> <!-- .directors -->
<?php endif; wp_reset_postdata(); ?>