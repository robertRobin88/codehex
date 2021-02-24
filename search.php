<?php /*Template Name: Search Page */
get_header(); ?>

<?php
global $post;
$s = get_search_query();
?>
<div class="cover search-page">
    <h2 class="title"><?php pll_e("Wynik wyszukiwania");
    echo ": " . $s; ?></h2>
</div>

<main role="main" tabindex="-1" class="content js-content">
    <div class="container">
        <div class="row">
            <?php if (have_posts()) :
                while (have_posts()) : the_post();
                    $post_id = get_the_ID(); ?>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="item-news">
                            <?php if (has_post_thumbnail()):
                                the_post_thumbnail('img-news', array('class' => 'img-fluid'));
                            endif; ?>
                            <div class="news-desc">
                                <h4>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        echo wp_trim_words(get_the_title(), 7, '...');
                                        ?>
                                    </a>
                                </h4>
                                <div class="excerpt">
                                    <?php echo custom_excerpt('80', $post_id) . "..."; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <div class="clearfix"></div>
            </div>
            <?php wpbeginner_numeric_posts_nav(); ?>
            <?php else: ?>
                <div class="row">
                    <div class="col-sm-12">
                        <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'codehex'); ?></p>
                        <?php
                        get_search_form();
                        ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </main>
    <?php get_footer(); ?>
