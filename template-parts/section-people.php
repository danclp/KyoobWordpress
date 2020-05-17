<section class="people">
    <?php $family = get_field('people'); 
        if( !empty($family) ) :
    ?>
        <img src="<?php echo esc_url($family['url']); ?>" alt="<?php echo esc_attr($family['alt']); ?>">
    <?php endif; ?>
</section>