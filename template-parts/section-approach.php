<?php $approach = new WP_Query( array(
        'pagename' => 'about/our-approach',
    ) );
    
    if( $approach->have_posts() ) :
    ?>
    <section class="approach">
        <?php while( $approach->have_posts() ) : $approach->the_post(); ?>
        <div class="wrap">
            <div class="approach-statistic">
                <h5 class="approach-title"><?php the_title(); ?></h5>
                <div class="approach-results">
                    <?php
                    $value_1 = get_field('statistic_value_1');
                    if( $value_1 ) :
                    ?>
                    <div class="approach-result">
                        <h2 class="approach-result_num"><span><?php echo $value_1['value']; ?></span><sup>+</sup></h2>
                        <p><?php echo $value_1['label']; ?></p>
                    </div>
                    <?php endif; ?>
                    
                    <?php
                    $value_2 = get_field('statistic_value_2');
                    if( $value_2 ) :
                    ?>
                    <div class="approach-result">
                        <h2 class="approach-result_num"><span><?php echo $value_2['value']; ?></span><sup>+</sup></h2>
                        <p><?php echo $value_2['label']; ?></p>
                    </div>
                    <?php endif; ?>
                    
                    <?php
                    $value_3 = get_field('statistic_value_3');
                    if( $value_3 ) :
                    ?>
                    <div class="approach-result">
                        <h2 class="approach-result_num">S$<span><?php echo $value_3['value']; ?></span>B<sup>+</sup></h2>
                        <p><?php echo $value_3['label']; ?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </section> <!-- .approach -->
    
    <!-- Services -->
    <?php $services = get_field('contents_add-on');
    if( $services ) : ?>
    <section class="services">
        <img src="<?php echo esc_url( $services['image']['url'] ) ?>" class="services-image">
        <div class="wrap">
            <div class="services-brief">
                <h2 class="services-title"><?php echo $services['h2_text']; ?></h2>
                <div class="services-brief_text">
                    <?php echo $services['service_intro']; ?>
                    <div class="services-list">
                        <?php echo $services['service_list']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- .services -->
    <?php endif; ?>
<?php endif; wp_reset_postdata(); ?>