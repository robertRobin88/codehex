<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 */

get_header(); ?>
<?php
global $post;
$id = $post->ID;
?>

    <main role="main" tabindex="-1">
        <div class="content js-content">
            <div class="container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="news-desc">
                                <h3 class="header-page"><?php the_title(); ?></h3>
                            </div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php else: ?>
                    <div class="row">
                        <div class="col-sm-12 txt-center">
                            <h2><?php _e('This is somewhat embarrassing, isn’t it?', 'codehex'); ?></h2>
                            <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'codehex'); ?></p>
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>