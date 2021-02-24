<?php /*Template Name: Portfolio */
get_header(); ?>
<main role="main" tabindex="-1">
    <div class="content js-content contact ">
        <div class="portfolioPage">
            <div class="container-fluid pb-5 ">
                <div class="row">
                    <div class="col-12 marginMenuTop"></div>

                    <div class="col-12 mt-5 mb-5 titlePagePortfolio text-center">
                        <?php
                            if(pll_current_language() == 'en'){ ?>
                                <h3>EXAMPLES OF WEBSITES</h3>
                                <?php
                            }else if(pll_current_language() == 'pl'){ ?>
                                <h3>PRZYKŁADOWE STRONY WWW</h3>
                                <?php
                            }
                        ?>

                    </div>
                    <?php
                    // Check rows exists.
                    if( have_rows('repeaterporfolio') ):

                        // Loop through rows.
                        while( have_rows('repeaterporfolio') ) : the_row();
                            $image = get_sub_field('imgporfolio');?>
                            <div class="col-12 col-lg-4 p-0">
                                <div class="blackBorder">
                                    <a href="<?php the_sub_field('linkporfolio');?>" target="_blank">
                                    <div class="portfolioSingle">
                                        <?php echo wp_get_attachment_image( $image, 'portfolio' ); ?>
<!--                                        <div class="overlayOFF">-->
<!--                                            <div class="text"><h4>--><?php //the_sub_field('titleporfolio');?><!--</h4></div>-->
<!--                                        </div>-->
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                            // Load sub field value.
                            $sub_value = get_sub_field('sub_field');
                            // Do something...

                            // End loop.
                        endwhile;

                    // No value.
                    else :
                        // Do something...
                    endif;
                    ?>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 mt-5 mb-5 titlePagePortfolioLogo text-center">
                    <?php
                    if(pll_current_language() == 'en'){ ?>
                        <h3>EXAMPLES OF LOGOS</h3>
                        <?php
                    }else if(pll_current_language() == 'pl'){ ?>
                        <h3>PRZYKŁADOWE LOGA</h3>
                        <?php
                    }
                    ?>
                </div>
                <?php if( have_rows('slickgraphicproject') ): ?>
                    <div class="row mt-4 ml-auto mr-auto graphicPorfolio">
                        <?php while( have_rows('slickgraphicproject') ): the_row();

                            ?>
                            <div class="graphicPortfolioImg">
                                <img src="<?php the_sub_field('imagegraphic')?>" alt="">
                            </div>

                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>