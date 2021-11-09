<?php
defined( 'ABSPATH' ) || exit;
?>
<?php get_header(); ?>

<main id='single-content' class='<?php body_class(); ?>'>
    <?php
        while(have_posts()){
            the_post();
            ?>

            <article <?php post_class(); ?> id='post-<?php the_ID();?> single-post'>
                <div class='thumbnail-image-wrapper'>
                    <?php echo get_the_post_thumbnail( $post->ID, 'large'); ?>
                </div>
                <header class='entry-header'>
                    <?php the_title('<h1 class="entry-title">','</h1>'); ?>
                    <?php
                    $u_time = get_the_time('U'); 
                    $u_modified_time = get_the_modified_time('U'); 
                    if ($u_modified_time >= $u_time + 86400) { 
                        echo "<p>Last modified on "; 
                        the_modified_time('F jS, Y'); 
                        echo " at "; 
                        the_modified_time(); 
                        echo "</p> "; 
                    }
                    else{
                         echo '<p>This article was published on: ' . get_the_time('m/j/y g:i A') . '</p>';
                    } 
                    ?>
                </header>
                <div class='incident-entry-content' id='incidentSummary'>
                    <?php the_content(); ?>
                </div>
                <div class='related-posts'>
                <?php
                //for use in the loop, list 5 post titles related to first tag on current post
                $tags = wp_get_post_tags($post->ID);
                if ($tags) {
                    echo '<p class="related-posts-title">Related Posts</p>';
                    $first_tag = $tags[0]->term_id;
                    $args=array(
                        'tag__in' => array($first_tag),
                        'post__not_in' => array($post->ID),
                        'posts_per_page'=>3,
                        'caller_get_posts'=>1
                    );
                    $my_query = new WP_Query($args);
                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <div class='related-post'>
                            <?php echo get_the_post_thumbnail( $post->ID, 'large'); ?>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                            <div class='content-related'>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        <?php
                        endwhile;
                    }
                    wp_reset_query();
                }
                ?>
                </div>
            </article>
            <?php 
        }
    ?>
</main>

<?php get_footer(); ?>
