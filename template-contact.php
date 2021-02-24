<?php /*Template Name: Kontakt */
get_header(); ?>
<main role="main" tabindex="-1">
    <div class="content js-content contact">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="row">
                    <div class="col-12 marginMenuTop"></div>
                    <div class="col-12 col-md-6 mt-5 mb-5 text-center">
                        <img class="imgContactLogo" src="<?php bloginfo('template_url') ?>/dist/img/logo.png" alt="Logo codehex">
                        <div class="mt-3"></div>
                        <h4><?php the_field('contact_tilte_page')?></h4>
                        <h5><?php the_field('contact_city')?></h5>
                        <div class="mt-5"></div>
                        <h5> <?php the_field('contact_city_2#')?></h5>
                        <div class="mt-3"></div>
                        <h3><i class="fas fa-phone"></i>
                        <b><?php the_field('phone_number')?></b></h3>
                    </div>
                    <div class="col-12 col-lg-6 mt-5 mb-5">
                        <h4><?php the_field('form_contact')?></h4>
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
        <div class="mapaGoogle">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2586.7685289938718!2d19.14988571558254!3d49.58325507936506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47142f6fb59b7f81%3A0x8e390aca229668e3!2scodehex.pl!5e0!3m2!1spl!2spl!4v1606330275381!5m2!1spl!2spl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </div>

</main>
<?php get_footer(); ?>