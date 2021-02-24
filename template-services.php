<?php /*Template Name: Services */
get_header(); ?>
<main role="main" tabindex="-1">
    <div class="content js-content contact ">
        <div class="container">
                <div class="row">
                    <div class="col-12 marginMenuTop">
                    </div>
                    <div class="col-12 col-lg-3 mt-5 subMenuServices">

                        <?php
                        if(pll_current_language() == 'en') { ?>
                            <h3>SERVICES:</h3>
                            <?php bellows( 'main' , array( 'menu' => 20 ) ); ?>
                            <?php
                        } else if(pll_current_language() == 'pl') { ?>
                            <h3>USŁUGI:</h3>
                            <?php
                            bellows( 'main' , array( 'menu' => 3 ) );
                }
                        ?>

                    </div>
                    <div class="col-12 col-lg-9 mt-5 mb-5 ">

                        <?php the_content(); ?>
                    </div>

             </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>