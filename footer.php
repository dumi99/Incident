<footer>
    <div class='footer-wrapper'>
        <div class='footer-extras'>
            <div class='simplified-logo-wrapper'>
                <img class='footer-logo' src='<?php the_field('logo_footer', 'option'); ?>' alt=''>
            </div>
            <div class='extra-content'>
                <?php the_field('extra_content','option'); ?>
            </div>
        </div>
        <div class='footer-1 footer-panel'>
            <?php
                $menu = wp_get_nav_menu_object("footer-menu-1");
                echo '<h4 class="footer-menu-title">'.$menu->name.'</h4>';
                wp_nav_menu( array( 
                    'theme_location' => 'footer-menu-1', 
                    'container_class' => 'footer-nav-1' ) ); 
            ?>
        </div>
        <div class='footer-2 footer-panel'>
            <?php
                $menu = wp_get_nav_menu_object("footer-menu-2");
                echo '<h4 class="footer-menu-title">'.$menu->name.'</h4>';
                wp_nav_menu( array( 
                    'theme_location' => 'footer-menu-2', 
                    'container_class' => 'footer-nav-2' ) ); 
            ?>
        </div>
        <div class='footer-copyright'>
            <p class='copyright'> <?php the_field('copyright','option') ?> </p>
        </div>
    </div>



    <?php wp_footer(); ?>
</footer>
</body>