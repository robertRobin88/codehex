<?php get_header(); ?>
<main role="main" tabindex="-1" class="content">
    <div class="container mt-5">
        <div class="row">
           <?php if (have_posts()) :
               while (have_posts()) : the_post();
                $post_id = get_the_ID(); ?>
                <div class="col-12 mb-4">
                    <div class="item-news">
                      <?php if (has_post_thumbnail()): the_post_thumbnail('img-news', array('class' => 'img-fluid')); endif;?>
                        <div class="news-desc">
                            <h3> <?php the_title();  ?> </h3>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
        <?php endwhile; ?>
        <div class="clearfix"></div>
        </div>
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