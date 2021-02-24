<?php get_header(); ?>
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
                    <div class="col-sm-12">
                        <p>Nie znaleziono<br>Sprobuj ponownie</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
