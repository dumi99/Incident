<?php
defined( 'ABSPATH' ) || exit;
?>

<?php get_header(); ?>

<main id='main-content' <?php body_class(); ?>>

    <div class='posts-wrapper'>
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                ?>
                    <div class='col-12 post-wrapper'>
                        <article <?php post_class(); ?> id='post-<?php the_ID(); ?>'>
                            <div class='thumbnail-image-wrapper'>
                                <a class='post-image-link' href=<?php the_permalink(); ?>>
                                    <?php echo get_the_post_thumbnail( $post->ID, 'large'); ?>
                                </a>
                            </div>
                            <header class='entry-header'>
                                <div class='flex-post'>
                                    <?php
                                        the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">',esc_url(get_permalink())), '</a></h2>');
                                    ?>
                                </div>
                            </header>
                            <div class='entry-content'>
                                <div class='flex-post'>
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </article>
                    <?php
                    ?>
                    </div>
                <?php                
                }
                the_posts_pagination();
            }
        ?>
    </div>
    <div class='widget-blog'>
        <button class='activate-widget'>Latest</button>
        <?php dynamic_sidebar( 'news_right_1' ); ?> 
    </div>
</main>

<?php get_footer(); ?>
