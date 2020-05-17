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