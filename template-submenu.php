<?php /*Template name: Submenu*/
get_header(); ?>
<main role="main" tabindex="-1">
    <div class="content js-content">
        <div class="container">
			<?php if (have_posts()) : while (have_posts()) :
				the_post(); ?>
                <div class="row">
                    <div class="col-md-3">
                        <ul class="nav">
							<?php wp_nav_menu(array('theme_location' => 'sidebar', 'container' => 'false', 'items_wrap' => '%3$s')); ?>
                        </ul>
                    </div>

                    <div class="col-md-9">
                        <h2><?php the_title(); ?></h2>
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
