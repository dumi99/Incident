<?php
    // Check value exists.
    if( have_rows('page_elements') ):

        // Loop through rows.
        while ( have_rows('page_elements') ) : the_row();

            // Case: Video background section exists.
            if( get_row_layout() == 'video_background_block' ):
?>
                <div class='incident-section container'>
                <?php if(get_sub_field('background_video')) : ?>
                    <?php
                        $video = get_sub_field('background_video');
                    ?>
                    <div class='video-wrapper background-video'>
                        <?php echo wp_video_shortcode(['loop'=> true,'autoplay' => true, 'src' => $video['url']]); ?>
                    </div>
                <?php endif; ?>
                <?php if(get_sub_field('logo')) : ?>
                    <div class='logo-wrapper section-logo'>
                        <img src='<?php the_sub_field('logo'); ?>' alt=''>
                    </div>
                <?php endif; ?>
                <?php if(get_sub_field('content')) : ?>
                    <div class='content-wrapper'>
                        <?php the_sub_field('content'); ?>
                    </div>
                <?php endif; ?>
                <?php if(get_sub_field('buttons_holder')) : ?>
                    <?php
                        $buttons_vector = get_sub_field('buttons_holder');
                    ?>
                    <div class='section-button-holder button-holder buttons-wrapper'>
                        <?php foreach($buttons_vector as $button) :?>
                            <div class='incident-button button'>
                                <a href='<?php echo $button['button']['url']; ?>' ><?php echo $button['button']['title']; ?></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                </div>                


<?php
            // Case: Content with title layout.
            elseif( get_row_layout() == 'content_with_title' ): 
?>
                <div class='incident-section container' style='background: url(<?php if(get_sub_field('background_image')){ the_sub_field('background_image');} ?>) no-repeat; background-size: cover;'>
                <?php if(get_sub_field('title')) : ?>
                    <div class='title-wrapper'>
                        <?php the_sub_field('title'); ?>
                    </div>
                <?php endif; ?>
                <?php if(get_sub_field('content')) : ?>
                    <div class='content-wrapper'>
                        <?php the_sub_field('content'); ?>
                    </div>
                <?php endif; ?>
                <?php if(get_sub_field('buttons_holder')) : ?>
                    <?php
                        $buttons_vector = get_sub_field('buttons_holder');
                    ?>
                    <div class='section-button-holder button-holder buttons-wrapper'>
                        <?php foreach($buttons_vector as $button) :?>
                            <div class='incident-button button'>
                                <a href='<?php echo $button['button']['url']; ?>' ><?php echo $button['button']['title']; ?></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                </div>


<?php
            // Case: Image with content layout.
            elseif( get_row_layout() == 'image_with_content'):
?>
                <div class='incident-section container' style='background: url(<?php if(get_sub_field('background_image')){ the_sub_field('background_image');} ?>) no-repeat; background-size: cover;'>
                    <div class='wrapper'>
                        <?php if(get_sub_field('image_position')) : ?>
                        <div class='image-for-content-wrapper'>
                            <img src='<?php the_sub_field('image'); ?>' alt=''>
                        </div>
                        <div class='content-for-image-wrapper'>
                            <?php the_sub_field('content'); ?>
                        </div>
                        <?php else: ?>
                        <div class='content-for-image-wrapper'>
                            <?php the_sub_field('content'); ?>
                        </div>
                        <div class='image-for-content-wrapper'>
                            <img src='<?php the_sub_field('image'); ?>' alt=''>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

<?php
            // Case: Cards gallery layout.
            elseif( get_row_layout() == 'cards_gallery'):
?>
                <div class='incident-section container' style='background: url(<?php if(get_sub_field('background_image')){ the_sub_field('background_image');} ?>) no-repeat; background-size: cover;'>
                    <div class='wrapper flex-column'>
                        <div class='title-and-subtitle'>
                            <?php the_sub_field('title_with_subtitle'); ?>
                        </div>
                        <?php $cards = get_sub_field('cards'); ?>
                        <div class='cards-wrapper'>
                        <?php foreach($cards as $card): ?>
                            <div class='card-wrapper'>
                                <div class='card'>
                                    <div class='card-image-wrapper'>
                                        <img class='card-image' src='<?php echo $card['image']; ?>' alt=''>
                                    </div>
                                    <div class='card-content'>
                                        <?php echo $card['content']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>



<?php
            // Case: Image Gallery layout.
            elseif( get_row_layout() == 'image_gallery'):
?>
                <div class='incident-section container' style='background: url(<?php if(get_sub_field('background_image')){ the_sub_field('background_image');} ?>) no-repeat; background-size: cover;'>
                    <div class='wrapper flex-column'>
                        <div class='wrapper-section-header'>
                            <?php the_sub_field('section_header'); ?>
                        </div>
                        <div class='image-gallery-wrapper'>
                            <?php $gallery = get_sub_field('gallery') ?>
                            <?php foreach($gallery as $image): ?>
                                <div class='image-wrapper'>
                                    <img class='img-from-gallery' src='<?php echo $image['image']; ?>' alt=''>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>


<?php
            // Case: Video gallery layout.
            elseif( get_row_layout() == 'video_gallery'):
?>
                <div class='incident-section container' style='background: url(<?php if(get_sub_field('background_image')){ the_sub_field('background_image');} ?>) no-repeat; background-size: cover;'>
                    <div class='wrapper flex-column'>
                        <div class='wrapper-section-header'>
                            <?php the_sub_field('section_header'); ?>
                        </div>
                        <div class='video-gallery-wrapper'>
                            <?php $gallery = get_sub_field('gallery') ?>
                            <?php foreach($gallery as $video): ?>
                                <div class='gallery-video-wrapper'>
                                    <?php echo $video['video']; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>


                <?php
            // Case: Social layout.
            elseif( get_row_layout() == 'social'):
?>
                <div class='incident-section container' style='background: url(<?php if(get_sub_field('background_image')){ the_sub_field('background_image');} ?>) no-repeat; background-size: cover;'>
                    <div class='wrapper flex-column'>
                        <div class='wrapper-section-header'>
                            <?php the_sub_field('section_header'); ?>
                        </div>
                        <div class='social-wrapper'>
                            <?php $social = get_sub_field('social'); ?>
                            <?php foreach($social as $single_social): ?>
                                <a href='<?php echo $single_social['link']['url']; ?>'><img src='<?php echo $single_social['image']; ?>'></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>


                <?php
            // Case: Contact layout.
            elseif( get_row_layout() == 'contact_section'):
?>
                <div class='incident-section container' style='background: url(<?php if(get_sub_field('background_image')){ the_sub_field('background_image');} ?>) no-repeat; background-size: cover;'>
                    <div class='wrapper flex-column'>
                        <div class='wrapper-section-form'>
                            <h1 class='contact-header'> <?php _e('Keep in touch with us!'); ?></h1>
                            <div class='form-wrapper mobile-hide'>
                                <?php the_sub_field('form'); ?>
                            </div>
                            <div class='mobile-show contact-button incident-button'>
                                <a class='incident-button' href="mailto:<?php echo get_option('admin_email'); ?>"><?php _e('Contact us!') ?></a>
                            </div>
                        </div>
                    </div>
                </div>



                <?php
            // Case: Featured posts layout.
            elseif( get_row_layout() == 'featured_posts'):
?>
                <div class='incident-section container' style='background: url(<?php if(get_sub_field('background_image')){ the_sub_field('background_image');} ?>) no-repeat; background-size: cover;'>
                    <div class='wrapper flex-column'>
                        <div class='wrapper-section-slider'>
                            <div class='section-header-predefined'>
                                <h2><?php _e('Learn more about us'); ?></h2>
                            </div>
                            <div class='slider-wrapper'>
                                <?php $slider_shortcode = get_sub_field('slider_id');
                                    echo do_shortcode($slider_shortcode);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

<?php
            endif;

        // End loop.
        endwhile;

    // No value.
    else :
        echo "Please populate this page!";
    endif;
?>