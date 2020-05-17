<?php get_header(); ?>

    <section class="hero-slide">

        <?php
        $slide = new WP_Query(array(
            'pagename' => 'slide-carousal',
        ));
        if( $slide->have_posts() ) : while( $slide->have_posts() ) : $slide->the_post();
        if( have_rows('slide_container') ) : 
        ?>
            <ul class="hero-slide_wrap owl-theme">
                <?php while( have_rows('slide_container') ) : the_row(); 
                    $image = get_sub_field('slide_image');
                    $title = get_sub_field('slide_title');
                ?>
                    <li class="slide-container active">
                        <span class="slide-img"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"></span>
                        <div class="slide-title"><h3 class="h4"><?php echo $title; ?></h3></div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <?php endwhile; endif; wp_reset_postdata(); ?>

    </section> <!-- .hero-slide -->
    <main class="contents home-contents">
        <!-- About -->
        <section id="about-section" class="about-section">

            <?php while( have_posts() ) : the_post(); ?>
            <div class="about-section_wrap wrap">
                <div class="about-section_contents">
                    <?php the_content(); ?>
                </div>
            </div>

        </section> <!-- .about-section -->
        <!-- Work -->
        <section id="work-section" class="work-section">

            <?php if( have_rows('categories_thumbnails') ) : ?>
            <div class="work-section_categories">
                <?php while( have_rows('categories_thumbnails') ) : the_row(); 
                    $image = get_sub_field('category_image');
                    $name = get_sub_field('category_name');
                    $link = get_sub_field('category_link');
                ?>
                <?php if( $link ) : ?>
                    <a class="work-section_category" href="<?php echo $link; ?>">
                <?php endif; ?>
                    <img class="work-section_image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                    <p class="work-section_text"><?php echo $name; ?></p>
                <?php if( $link ) : ?>
                    </a>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <?php endwhile; ?>

        </section><!-- .work-section -->
        <!-- Contact -->
        <?php
        $contact = new WP_Query(array(
            'pagename' => 'contact',
        ));
        if( $contact->have_posts() ) : ?>
            <section id="contact-section" class="contact-section">
                <?php while( $contact->have_posts() ) : $contact->the_post(); ?>
                    <div class="contact-section_contents wrap">
                        <div class="contact-section_map">
                            <!-- Google Map Setup with ACF -->
                            <!--?php header("Content-type: text/javascript");?-->
                            <?php
                            $geo = get_field('geo_location');
                            if( $geo ) : ?>

                            <script>
                                // Google Map
                                var map,
                                        desktopScreen = Modernizr.mq( "only screen and (min-width:1024px)" ),
                                        zoom = desktopScreen ? 18 : 17,
                                        scrollable = draggable = !Modernizr.hiddenscroll || desktopScreen,
                                        isIE11 = !!(navigator.userAgent.match(/Trident/) && navigator.userAgent.match(/rv[ :]11/));

                                function initMap() {
                                    var myLatLng = {lat: <?php echo $geo['latitude']; ?>, lng: <?php echo $geo['longitude']; ?>};
                                    map = new google.maps.Map(document.getElementById('map'), {
                                        zoom: zoom,
                                        center: myLatLng,
                                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                                        scrollwheel: scrollable,
                                        draggable: false,
                                        styles: [{"stylers": [{ "saturation": -100 }]}],
                                    });

                                    var locations = [
                                        {
                                            title: 'Kyoob Architects',
                                            position: {lat: <?php echo $geo['latitude']; ?>, lng: <?php echo $geo['longitude']; ?>},
                                            icon: {
                                                url: isIE11 ? "wp-content/themes/kyoob_arc/images/mark.png" : "wp-content/themes/kyoob_arc/images/mark.svg",
                                                scaledSize: new google.maps.Size(90, 90)
                                            }

                                        }				
                                    ];
                                    
                                    locations.forEach( function( element, index ){
                                        var marker = new google.maps.Marker({
                                            position: element.position,
                                            map: map,
                                            title: element.title,
                                            icon: element.icon,
                                        });
                                    });	
                                }
                                // End of Google Map
                            </script>
                            
                            <?php endif; ?>
                            <div id="map" class="map"></div>
                        </div>
                        <div class="contact-section_details">
                            <div class="contact-section_address">
                                <?php the_content(); ?>
                            </div>
                            <div class="contact-section_form">
                                <?php echo do_shortcode("[ninja_form id=1]"); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </section><!-- .contact-section -->
        <?php endif; wp_reset_postdata(); ?>
    </main>
</div>

<?php get_footer(); ?>