<?php get_header(); ?>
<?php global $post; ?>
<main role="main" tabindex="-1" class="content js-content">
    <div class="container">
        <div class="row">
            <?php if (have_posts()) :
            while (have_posts()) : the_post();
                $post_id = get_the_ID(); ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="item-news">
                        <?php if (has_post_thumbnail()):
                            ?>
                            <div class="img-wrap">
                                <?php
                                the_post_thumbnail('img-news', array('class' => 'img-fluid'));
                                ?>
                            </div>
                        <?php
                        else : ?>
                            <div class="img-default">
                                <img class="logo-transparent" alt="Logo default image"
                                     src="<?php bloginfo('template_url'); ?>/dist/img/logo.png"/>
                            </div>
                        <?php endif; ?>
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

                            <span class="category">
                                <?php
								$cats = get_the_category($post_id);
								$cats_all = "";
								foreach ($cats as $cat) {
									$link = get_category_link($cat->term_id);
									$cats_all .= '<a href="' . $link . '">' . $cat->name . "</a>, ";
								}
								echo substr($cats_all, 0, -2);
								?>
                                </span>
                            <div class="clearfix"></div>
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
                    <p>Nie znaleziono<br>Sprobuj ponownie</p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>