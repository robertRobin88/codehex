<?php /*Template Name: Homepage */
get_header(); ?>
    <main class="content js-content" tabindex="-1">
            <div class="sslider">
                <div class="parallax mainGraphic" data-parallax="scroll" data-z-index="1" data-image-src="<?php bloginfo('template_url'); ?>/dist/img/backgroundHome.jpg"></div>
                    <div class="titlePageContainer hideElement">
                        <h2 class="mainText"><?php the_field('slider_title')?></h2>
                        <h2 class="mainTexth5"><?php the_field('slider_description')?></h2>
                        <h2 class="mainTexth5"><?php the_field('slider_description_2')?></h2>
                        <div class="containerMainTopButton hideElement"  >
                            <div class="buttonPage">
                                    <div class="moduleButton1">
                                        <a href="<?php the_field('service_link_page')?>"><?php the_field('button_first')?></a>
                                    </div>
                            </div>
                            <div class="buttonPage">
                                    <div class="moduleButton1">
                                        <a href="<?php the_field('portfolio_link_page')?>"><?php the_field('buton_second')?></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="arrowTopAnimation hideElement"id="firstSection">
                        <a href="#firstSection"><i class="fas fa-angle-down arrowButton"></i></a>
                    </div>
                </div>
        <div class="container-fluid firstSection" >
            <div class="row text-center">
                <div class="col-12 titleFirstSection">
                    <h1>USŁUGI:</h1>
                </div>
                <div class="col-12 col-lg-3 darkHover">
                    <h3><?php the_field('first_section_title')?></h3>
                    <div class="icon">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; fill: #555555" xml:space="preserve">
<g>
    <g>
        <path d="M59.376,75.356c-13.421,0-24.34,10.919-24.34,24.34c0,13.422,10.919,24.34,24.34,24.34c13.421,0,24.34-10.919,24.34-24.34
			C83.715,86.275,72.797,75.356,59.376,75.356z M59.376,108.828c-5.036,0-9.132-4.097-9.132-9.132s4.096-9.132,9.132-9.132
			s9.132,4.097,9.132,9.132C68.507,104.732,64.411,108.828,59.376,108.828z"/>
    </g>
</g>
                            <g>
                                <g>
                                    <path d="M115.721,75.356c-13.421,0-24.34,10.92-24.34,24.34c0,13.422,10.918,24.34,24.34,24.34c13.421,0,24.34-10.919,24.34-24.34
			S129.142,75.356,115.721,75.356z M115.721,108.828c-5.036,0-9.132-4.097-9.132-9.132s4.096-9.132,9.132-9.132
			c5.036,0,9.132,4.097,9.132,9.132C124.853,104.732,120.757,108.828,115.721,108.828z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M172.067,75.356c-13.421,0-24.34,10.919-24.34,24.34c0,13.422,10.92,24.34,24.34,24.34
			c13.422,0,24.341-10.919,24.341-24.34S185.489,75.356,172.067,75.356z M172.067,108.828c-5.036,0-9.132-4.097-9.132-9.132
			s4.096-9.132,9.132-9.132s9.133,4.097,9.133,9.132C181.2,104.732,177.103,108.828,172.067,108.828z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M256.006,3.067c-4.201,0-7.604,3.405-7.604,7.604v40.483H40.108c-22.112,0-40.1,17.988-40.1,40.099v50.868
			C0.007,142.174,0,142.225,0,142.278s0.007,0.104,0.008,0.157V402.94c0,22.111,17.988,40.099,40.1,40.099h208.294v58.29
			c0,4.2,3.404,7.604,7.604,7.604c4.201,0,7.604-3.405,7.604-7.604V10.671C263.61,6.472,260.207,3.067,256.006,3.067z
			 M248.402,134.675H96.753c-4.201,0-7.604,3.405-7.604,7.604c0,4.2,3.404,7.604,7.604,7.604h151.649v277.948H40.108v-0.001
			c-13.725,0-24.892-11.166-24.892-24.891V149.882h54.238c4.201,0,7.604-3.405,7.604-7.604c0-4.2-3.404-7.604-7.604-7.604H15.216
			v-43.42c0-13.725,11.167-24.891,24.892-24.891h208.294V134.675z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M511.998,91.253c0-22.111-17.988-40.099-40.099-40.099H281.352c-4.201,0-7.604,3.405-7.604,7.604
			c0,4.2,3.404,7.604,7.604,7.604h113.644v43.435H281.352c-4.201,0-7.604,3.405-7.604,7.604c0,4.2,3.404,7.604,7.604,7.604H402.6
			c4.201,0,7.604-3.405,7.604-7.604V66.363h18.25v40.9c0,4.2,3.404,7.604,7.604,7.604h60.731v19.808H281.352
			c-4.201,0-7.604,3.405-7.604,7.604c0,4.2,3.404,7.604,7.604,7.604h70.222v6.445l-28.233,28.232
			c-3.362-1.702-7.099-2.61-10.977-2.61c-6.501,0-12.614,2.532-17.212,7.13c-9.489,9.49-9.489,24.931,0,34.422
			c4.746,4.745,10.978,7.118,17.212,7.118c6.233,0,12.467-2.372,17.213-7.118c7.611-7.612,9.102-19.047,4.505-28.174l30.474-30.474
			c1.426-1.426,2.227-3.36,2.227-5.377v-9.594h10.977v88.887c-9.707,3.201-16.736,12.351-16.736,23.118
			c0,13.422,10.919,24.34,24.34,24.34c13.422,0,24.341-10.919,24.341-24.34c0-10.766-7.029-19.916-16.737-23.118v-88.888h13.434
			v57.754c0,2.017,0.801,3.951,2.227,5.377l30.474,30.474c-4.597,9.127-3.107,20.561,4.505,28.174
			c4.746,4.745,10.978,7.118,17.212,7.118s12.467-2.372,17.213-7.118c9.489-9.491,9.489-24.932,0-34.422
			c-4.597-4.598-10.71-7.13-17.213-7.13c-3.877,0-7.614,0.907-10.976,2.61l-28.233-28.232v-54.605h75.179v14.664h-53.634
			c-4.201,0-7.604,3.405-7.604,7.604c0,4.2,3.404,7.604,7.604,7.604h53.634v14.671h-33.357c-4.201,0-7.604,3.405-7.604,7.604
			c0,4.2,3.404,7.604,7.604,7.604h33.357V402.94c0,13.725-11.166,24.891-24.891,24.891h-3.476v-88.89
			c9.707-3.201,16.736-12.351,16.736-23.117c0-13.421-10.919-24.34-24.34-24.34c-13.422,0-24.341,10.919-24.341,24.34
			c0,10.766,7.029,19.917,16.737,23.117v88.89H281.352c-4.201,0-7.604,3.405-7.604,7.604c0,4.2,3.404,7.604,7.604,7.604h190.547
			c22.111,0,40.099-17.988,40.099-40.099V107.557h0C512.002,107.458,511.998,91.253,511.998,91.253z M318.822,212.748
			c-3.56,3.559-9.353,3.562-12.914,0c-3.561-3.561-3.561-9.355,0-12.915c1.725-1.725,4.018-2.675,6.456-2.675
			c2.439,0,4.733,0.95,6.457,2.675C322.383,203.394,322.383,209.187,318.822,212.748z M394.497,261.887
			c0,5.035-4.097,9.132-9.133,9.132s-9.132-4.097-9.132-9.132c0-5.035,4.096-9.132,9.132-9.132S394.497,256.852,394.497,261.887z
			 M454.363,247.992c1.725-1.725,4.018-2.675,6.456-2.675c2.439,0,4.733,0.95,6.457,2.675c3.561,3.561,3.561,9.354,0,12.915
			c-3.56,3.559-9.353,3.562-12.914,0C450.802,257.346,450.802,251.552,454.363,247.992z M460.82,324.955
			c-5.036,0-9.133-4.097-9.133-9.132c0-5.035,4.097-9.132,9.133-9.132c5.036,0,9.132,4.097,9.132,9.132
			C469.952,320.859,465.856,324.955,460.82,324.955z M496.791,99.658h-53.128V66.363H471.9c13.725,0,24.891,11.166,24.891,24.891
			V99.658z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M417.295,358.698c-10.765,0-19.916,7.029-23.117,16.736h-20.47v-14.701c0-4.2-3.404-7.604-7.604-7.604
			c-4.201,0-7.604,3.405-7.604,7.604v14.701h-14.194v-14.701c0-4.2-3.404-7.604-7.604-7.604s-7.604,3.405-7.604,7.604v14.701h-13.18
			v-14.701c0-4.2-3.404-7.604-7.604-7.604s-7.604,3.405-7.604,7.604v14.701h-19.356c-4.201,0-7.604,3.405-7.604,7.604
			c0,4.2,3.404,7.604,7.604,7.604h112.826c3.201,9.707,12.351,16.736,23.117,16.736c13.421,0,24.34-10.919,24.34-24.34
			C441.636,369.616,430.716,358.698,417.295,358.698z M417.294,392.169c-5.036,0-9.132-4.097-9.132-9.132
			c0-5.035,4.096-9.132,9.132-9.132s9.132,4.097,9.132,9.132C426.426,388.072,422.33,392.169,417.294,392.169z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M385.364,298.122c-10.765,0-19.916,7.029-23.118,16.736h-42.278v-29.854c9.708-3.201,16.737-12.351,16.737-23.117
			c0-13.421-10.919-24.34-24.341-24.34c-13.421,0-24.34,10.92-24.34,24.34c0,10.766,7.028,19.917,16.736,23.117v29.855h-23.409
			v-0.001c-4.201,0-7.604,3.405-7.604,7.604c0,4.199,3.404,7.604,7.604,7.604h80.895c3.202,9.708,12.351,16.736,23.118,16.736
			c13.422,0,24.341-10.919,24.341-24.34C409.705,309.041,398.786,298.122,385.364,298.122z M312.365,271.019
			c-5.036,0-9.132-4.097-9.132-9.132c0-5.036,4.096-9.132,9.132-9.132s9.133,4.097,9.133,9.132
			C321.498,266.922,317.401,271.019,312.365,271.019z M385.364,331.594c-5.036,0-9.132-4.097-9.132-9.132
			c0-5.035,4.096-9.132,9.132-9.132s9.133,4.097,9.133,9.132C394.497,327.497,390.4,331.594,385.364,331.594z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M373.198,79.381h-91.846c-4.201,0-7.604,3.405-7.604,7.604c0,4.199,3.404,7.604,7.604,7.604h91.846
			c4.201,0,7.604-3.405,7.604-7.604C380.802,82.785,377.398,79.381,373.198,79.381z"/>
                                </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
</svg>
                    </div>
                    <h5><?php the_field('first_section_description_first')?></h5>
                    <h6><?php the_field('first_section_second_description_1')?></h6>
                    <div class="buttonPage">
                        <a href="<?php the_field('service_page_link')?>">
                        <div class="moduleButton">
                            <?php the_field('zobacz_wiecej')?>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 darkHover">
                    <h3><?php the_field('first_section_title_2')?></h3>
                    <div class="icon">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; fill: #555555" xml:space="preserve">
<g>
    <g>
        <path d="M71.48,376.458H59.226c-24.271,0-44.018-19.747-44.018-44.019v-79.895c0-4.199-3.404-7.604-7.604-7.604
			S0,248.344,0,252.544v79.895c0,32.657,26.568,59.227,59.226,59.227H71.48c4.2,0,7.604-3.405,7.604-7.604
			C79.084,379.862,75.681,376.458,71.48,376.458z"/>
    </g>
</g>
                            <g>
                                <g>
                                    <path d="M452.762,34.24H59.226C26.568,34.24,0,60.809,0,93.466v131.596c0,4.199,3.404,7.604,7.604,7.604s7.604-3.405,7.604-7.604
			V93.466c0-24.272,19.747-44.019,44.018-44.019h393.536c24.278,0,44.03,19.747,44.03,44.019v238.972
			c0,24.272-19.751,44.019-44.03,44.019H324.511c-0.023,0-0.046-0.003-0.069-0.003h-58.3c-4.2,0-7.604,3.405-7.604,7.604
			s3.404,7.604,7.604,7.604h15.139c0.023,0,0.046,0.003,0.069,0.003h35.488v30.766H263.1c-4.2,0-7.604,3.405-7.604,7.604
			c0,4.199,3.404,7.604,7.604,7.604h61.342h4.488c15.312,0,28.186,10.639,31.619,24.914H258.031c-4.2,0-7.604,3.405-7.604,7.604
			c0,4.199,3.404,7.604,7.604,7.604h111.02c4.2,0,7.604-3.405,7.604-7.604c0-25.268-19.741-46.001-44.609-47.612v-30.878h120.716
			c32.664,0,59.238-26.569,59.238-59.227V93.466C512,60.809,485.426,34.24,452.762,34.24z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M390.234,73.182H59.226c-11.185,0-20.284,9.104-20.284,20.297v238.95c0,11.191,9.099,20.297,20.284,20.297h10.227
			c4.2,0,7.604-3.405,7.604-7.604c0-4.199-3.404-7.604-7.604-7.604H59.226c-2.799,0-5.076-2.282-5.076-5.089V93.478
			c0-2.805,2.277-5.089,5.076-5.089h331.009c4.2,0,7.604-3.405,7.604-7.604C397.838,76.586,394.435,73.182,390.234,73.182z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M452.762,73.182h-37.18c-4.2,0-7.604,3.405-7.604,7.604c0,4.199,3.404,7.604,7.604,7.604h37.18
			c2.806,0,5.089,2.282,5.089,5.089v238.95c0,2.805-2.282,5.088-5.089,5.088H265.128c-4.2,0-7.604,3.405-7.604,7.604
			s3.404,7.604,7.604,7.604h187.634c11.191,0,20.297-9.104,20.297-20.297V93.478C473.059,82.287,463.954,73.182,452.762,73.182z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M255.487,265.507c-1.439-1.546-3.455-2.425-5.567-2.425H85.674c-2.112,0-4.128,0.878-5.567,2.425
			c-1.439,1.546-2.17,3.62-2.017,5.727l14.417,199.469c0.287,3.976,3.597,7.055,7.584,7.055h135.412
			c3.988,0,7.297-3.079,7.584-7.055l14.417-199.469C257.657,269.129,256.926,267.053,255.487,265.507z M131.804,278.291h0.001
			h76.062c-0.247,29.723-4.494,73.806-16.017,85.514c-1.926,1.959-3.373,2.185-4.293,2.185c-3.418,0-5.566-1.163-10.483-11.788
			c-2.813-6.077-6-12.966-12.807-15.44c-3.96-1.441-8.296-1.075-12.888,1.086c-4.551,2.142-8.557,2.152-11.907,0.026
			c-4.658-2.955-7.668-9.817-7.668-17.479V278.291z M228.429,462.552H107.165L93.847,278.291h22.749v44.103
			c0,12.938,5.642,24.556,14.726,30.32c7.806,4.954,17.228,5.271,26.531,0.893c0.639-0.3,1.054-0.42,1.281-0.466
			c1.17,1.035,3.013,5.018,4.138,7.448c3.798,8.207,9.537,20.61,24.285,20.61c5.569,0,10.803-2.326,15.133-6.726
			c17.931-18.22,20.186-74.627,20.378-96.181h18.679L228.429,462.552z"/>
                                </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
</svg>
                    </div>
                    <h5><?php the_field('first_section_description_2')?></h5>
                    <h6><?php the_field('first_section_second_description_2')?></h6>
                    <div class="buttonPage">
                        <a href="<?php the_field('service_project_graphic')?>">
                        <div class="moduleButton">
                            <?php the_field('zobacz_wiecej')?>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 darkHover">
                    <h3><?php the_field('first_section_title_3')?></h3>
                    <div class="icon">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;fill: #555555" xml:space="preserve">
<g>
    <g>
        <path d="M504.396,407.143H7.604c-4.199,0-7.604,3.405-7.604,7.604c0,38.145,31.032,69.177,69.177,69.177h36.421
			c4.199,0,7.604-3.405,7.604-7.604s-3.405-7.604-7.604-7.604H69.177c-27.178,0-49.728-20.194-53.435-46.365h480.516
			c-3.707,26.171-26.257,46.365-53.435,46.365H130.946c-4.199,0-7.604,3.405-7.604,7.604s3.405,7.604,7.604,7.604h311.877
			c38.145,0,69.177-31.032,69.177-69.177C512,410.547,508.595,407.143,504.396,407.143z"/>
    </g>
</g>
                            <g>
                                <g>
                                    <path d="M447.168,106.026h-31.845c-4.199,0-7.604,3.405-7.604,7.604s3.404,7.604,7.604,7.604h31.845
			c15.905,0,28.844,12.94,28.844,28.844v239.32c0,4.199,3.405,7.604,7.604,7.604s7.604-3.405,7.604-7.604v-239.32
			C491.22,125.788,471.458,106.026,447.168,106.026z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M99.013,106.026H64.839c-24.29,0-44.052,19.762-44.052,44.052v239.32c0,4.199,3.405,7.604,7.604,7.604
			s7.604-3.405,7.604-7.604v-239.32c0-15.906,12.94-28.844,28.844-28.844h34.173c4.199,0,7.604-3.405,7.604-7.604
			S103.212,106.026,99.013,106.026z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M258.632,28.076c-83.64,0-151.684,68.045-151.684,151.684v41.746c0,12.956,5.045,25.136,14.204,34.296
			c9.121,9.124,21.236,14.161,34.131,14.203c4.143,13.635,10.913,26.137,19.724,36.912c-17.167,11.85-31.78,27.323-42.588,45.171
			c-2.176,3.592-1.026,8.268,2.566,10.443c1.231,0.745,2.589,1.1,3.931,1.1c2.572,0,5.083-1.306,6.512-3.666
			c10.101-16.682,23.917-31.04,40.161-41.832c19.242,17.7,44.902,28.526,73.046,28.526c28.147,0,53.809-10.828,73.051-28.531
			c7.354,4.881,14.24,10.495,20.506,16.761c7.563,7.563,14.171,15.996,19.637,25.063c1.429,2.368,3.942,3.678,6.519,3.678
			c1.336,0,2.691-0.353,3.919-1.093c3.596-2.169,4.754-6.843,2.585-10.438c-6.103-10.121-13.474-19.53-21.907-27.964
			c-6.364-6.364-13.294-12.134-20.678-17.225c8.807-10.773,15.576-23.273,19.719-36.906c12.815-0.044,24.468-5.091,33.124-13.277
			v12.948c0,11.3-9.194,20.493-20.494,20.493c-4.199,0-7.604,3.405-7.604,7.604c0,4.199,3.405,7.604,7.604,7.604
			c19.686,0,35.702-16.016,35.702-35.701V179.76C410.317,96.121,342.271,28.076,258.632,28.076z M131.906,245.051
			c-6.288-6.288-9.75-14.648-9.75-23.543c0-16.877,12.627-30.852,28.927-32.997c-0.288,3.207-0.443,6.451-0.443,9.732v40.424
			c0,5.413,0.406,10.733,1.178,15.934C144.298,253.789,137.331,250.474,131.906,245.051z M351.421,238.666
			c0,51.162-41.623,92.786-92.787,92.786c-51.162,0-92.786-41.623-92.786-92.786v-40.127c2.333,0.196,4.679,0.311,7.03,0.311
			c29.152,0,56.068-15.45,71.113-39.687c15.046,24.235,41.961,39.687,71.113,39.687c12.574,0,24.828-2.797,36.008-8.146
			c0.201,2.487,0.307,5,0.307,7.538V238.666z M167.044,183.384c7.134-44.124,45.486-77.926,91.591-77.926
			c43.125,0,79.471,29.573,89.827,69.504c-10.154,5.693-21.583,8.682-33.357,8.682c-28.296,0-54.015-17.791-63.998-44.272
			c-1.117-2.962-3.95-4.921-7.115-4.921s-5.999,1.961-7.115,4.921c-9.982,26.48-35.701,44.272-63.998,44.272
			C170.926,183.643,168.978,183.548,167.044,183.384z M365.45,254.599c0.773-5.201,1.177-10.521,1.177-15.933v-40.424
			c0-3.282-0.156-6.527-0.444-9.736c7.237,0.943,13.928,4.214,19.174,9.459c6.288,6.288,9.75,14.648,9.75,23.542
			C395.109,238.637,382.104,252.782,365.45,254.599z M395.109,186.256c-8.592-8.126-19.65-12.768-31.454-13.205
			c-11.379-47.438-54.144-82.803-105.021-82.803c-50.878,0-93.643,35.367-105.021,82.805c-12.158,0.455-23.179,5.405-31.458,13.235
			v-6.527c0.001-75.253,61.224-136.476,136.478-136.476s136.476,61.223,136.476,136.476V186.256z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M317.66,228.215c-4.947-4.948-11.526-7.672-18.522-7.672c-6.998,0-13.576,2.725-18.523,7.672
			c-2.97,2.97-2.97,7.784,0,10.753c2.97,2.97,7.784,2.97,10.753,0c4.285-4.284,11.255-4.285,15.539,0
			c1.484,1.484,3.431,2.227,5.377,2.227s3.892-0.742,5.377-2.227C320.63,235.998,320.63,231.183,317.66,228.215z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M236.655,228.216c-10.214-10.214-26.832-10.213-37.047,0c-2.97,2.97-2.97,7.784,0,10.754c2.97,2.969,7.784,2.97,10.754,0
			c4.285-4.285,11.255-4.285,15.539,0c1.484,1.484,3.431,2.227,5.377,2.227c1.946,0,3.892-0.744,5.377-2.228
			C239.624,235.999,239.624,231.184,236.655,228.216z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M285.683,275.943c-2.97-2.969-7.784-2.969-10.754,0c-8.984,8.984-23.604,8.984-32.589,0c-2.97-2.971-7.784-2.97-10.753,0
			c-2.97,2.97-2.97,7.784,0,10.753c7.457,7.457,17.253,11.186,27.048,11.186c9.795,0,19.591-3.729,27.048-11.186
			C288.652,283.727,288.652,278.912,285.683,275.943z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M451.176,138.467h-28.25c-4.199,0-7.604,3.405-7.604,7.604s3.405,7.604,7.604,7.604h20.646v221.022H68.444V153.675H91.41
			c4.199,0,7.604-3.405,7.604-7.604s-3.405-7.604-7.604-7.604H60.84c-4.199,0-7.604,3.405-7.604,7.604V382.3
			c0,4.199,3.405,7.604,7.604,7.604h390.337c4.199,0,7.604-3.405,7.604-7.604v-236.23
			C458.78,141.871,455.376,138.467,451.176,138.467z"/>
                                </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
</svg>
                    </div>
                    <h5><?php the_field('first_section_description_3')?></h5>
                    <h6><?php the_field('first_section_second_description_3')?></h6>
                    <div class="buttonPage">
                        <a href="<?php the_field('service_web_care')?>">
                        <div class="moduleButton">
                            <?php the_field('zobacz_wiecej')?>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 darkHover">
                    <h3><?php the_field('first_section_title_4')?></h3>
                    <div class="icon">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; fill: #555555" xml:space="preserve">
<g>
    <g>
        <path d="M452.763,34.24h-52.789c-4.2,0-7.604,3.405-7.604,7.604c0,4.199,3.404,7.604,7.604,7.604h52.789
			c24.278,0,44.03,19.747,44.03,44.019v238.972c0,24.272-19.751,44.019-44.03,44.019H59.227c-24.272,0-44.019-19.747-44.019-44.019
			V93.467c0-24.272,19.747-44.019,44.019-44.019h315.398c4.2,0,7.604-3.405,7.604-7.604c0-4.199-3.404-7.604-7.604-7.604H59.227
			C26.569,34.24,0,60.809,0,93.467v238.972c0,32.657,26.569,59.227,59.227,59.227h120.728v30.878
			c-24.867,1.612-44.609,22.344-44.609,47.612c0,4.199,3.405,7.604,7.604,7.604h226.101c4.2,0,7.604-3.405,7.604-7.604
			c0-25.267-19.741-46.001-44.609-47.612v-30.878h120.716c32.664,0,59.238-26.569,59.238-59.227V93.467
			C512,60.809,485.427,34.24,452.763,34.24z M195.162,391.666h121.677v30.766h-0.001H195.162V391.666z M360.549,462.552H151.451
			c3.433-14.274,16.307-24.914,31.62-24.914H328.93C344.242,437.639,357.116,448.278,360.549,462.552z"/>
    </g>
</g>
                            <g>
                                <g>
                                    <path d="M387.052,200.449l48.506,48.505c2.971,2.97,7.784,2.969,10.754,0c2.97-2.97,2.97-7.784,0-10.753l-45.377-45.376
			c5.843-24.16-1.204-49.585-18.938-67.317c-12.21-12.21-28.411-19.583-45.621-20.761c-17.028-1.165-33.924,3.786-47.551,13.942
			c-2.117,1.578-3.265,4.14-3.03,6.77s1.815,4.95,4.176,6.13l33.845,16.905c4.855,2.425,8.474,6.595,10.193,11.743
			c1.717,5.147,1.329,10.656-1.097,15.51c-2.425,4.854-6.594,8.474-11.741,10.192c-5.148,1.719-10.658,1.329-15.511-1.096
			l-34.626-17.296c-2.325-1.161-5.082-1.055-7.312,0.283c-2.228,1.337-3.618,3.721-3.687,6.319
			c-0.521,19.802,6.903,38.417,20.903,52.419c18.06,18.06,43.875,25.007,68.359,18.682l83.004,83.004
			c1.485,1.484,3.432,2.227,5.378,2.227s3.892-0.742,5.378-2.227c2.97-2.97,2.97-7.784,0-10.753l-86.191-86.19
			c-2.031-2.029-5.03-2.743-7.754-1.846c-20.311,6.686-42.313,1.456-57.417-13.65c-7.981-7.982-13.247-17.869-15.39-28.636
			l22.562,11.27c8.488,4.24,18.118,4.921,27.122,1.917c9-3.004,16.292-9.334,20.533-17.823c4.24-8.489,4.92-18.121,1.916-27.121
			c-3.004-9.001-9.334-16.293-17.822-20.533l-21.207-10.593c20.655-8.745,45.423-4.45,61.839,11.966
			c14.831,14.831,20.168,36.5,13.924,56.551C384.33,195.509,385.054,198.45,387.052,200.449z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M319.382,317.479l-39.527-39.527c-6.132-6.131-14.283-9.508-22.954-9.508c-5.008,0.001-9.84,1.133-14.211,3.266
			l-69.982-69.981l-3.839-34.356c-0.27-2.415-1.678-4.555-3.788-5.76l-59.862-34.164c-2.978-1.7-6.723-1.196-9.146,1.227
			l-25.699,25.699c-2.424,2.423-2.926,6.168-1.227,9.146l34.163,59.862c1.204,2.111,3.345,3.518,5.76,3.788l35.722,3.992
			l69.246,69.245c-2.897,5.97-3.958,12.771-2.858,19.471c0.68,4.145,4.597,6.944,8.736,6.271c4.144-0.681,6.951-4.593,6.271-8.736
			c-0.901-5.482,0.902-11.097,4.823-15.018l13.69-13.69c3.259-3.259,7.592-5.053,12.201-5.053c4.608,0,8.94,1.794,12.199,5.053
			l39.527,39.527c1.485,1.484,3.432,2.227,5.378,2.227c1.946,0,3.892-0.742,5.378-2.227
			C322.351,325.262,322.351,320.447,319.382,317.479z M144.126,215.787l-29.526-3.299l-29.37-51.464l17.49-17.49l51.463,29.371
			l3.299,29.526L144.126,215.787z M223.516,288.382l-65.239-65.239l7.169-7.169l65.239,65.239L223.516,288.382z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M452.763,73.18H59.223c-11.181,0-20.277,9.105-20.277,20.297v238.947c0,11.192,9.096,20.297,20.277,20.297h15.068
			c4.199,0,7.604-3.405,7.604-7.604c0-4.199-3.405-7.604-7.604-7.604H59.223c-2.795,0-5.069-2.283-5.069-5.09V93.477
			c0-2.806,2.274-5.09,5.069-5.09h393.542c2.806,0,5.09,2.283,5.09,5.09v238.947c0,1.915-1.072,3.655-2.8,4.543
			c-0.705,0.363-1.475,0.546-2.289,0.546H99.639c-4.199,0-7.604,3.405-7.604,7.604c0,4.199,3.405,7.605,7.604,7.605h353.125
			c3.213,0,6.41-0.771,9.242-2.229c6.819-3.503,11.054-10.426,11.054-18.068V93.477C473.061,82.285,463.956,73.18,452.763,73.18z"/>
                                </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
</svg>
                    </div>
                    <h5><?php the_field('first_section_description_4')?></h5>
                    <h6><?php the_field('first_section_second_description_4')?></h6>
                    <div class="buttonPage">
                        <a href="<?php the_field('service_pc_repair')?>">
                        <div class="moduleButton">
                            <?php the_field('zobacz_wiecej')?>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="contactMain">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center callNowSection">
                        <h2><?php the_field('call_now')?><span></span><i class="fas fa-mobile-alt"></i> 724 087 845</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="secondSection">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 alignCenter">
                        <div class="mt-auto mb-auto">
                            <img src="<?php bloginfo('template_url'); ?>/dist/img/responsiveweb.jpg" alt="Strony internetowe responsywne">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 alignCenter">
                        <h2><?php the_field('web_responsive_title')?></h2>
                        <h4><?php the_field('web_responsive_description')?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="wordpressSection">
            <div class="parallax wordpresPhotoBackground" data-parallax="scroll" data-z-index="1" data-image-src="<?php bloginfo('template_url'); ?>/dist/img/wordpress.jpg"></div>
            <div class="logoWordpress">
                <img src="<?php bloginfo('template_url'); ?>/dist/img/wordpress.png" alt="Wordpress System zarządzania treścią logo ">
            </div>
            <div class="wordpressDescription">
                <h2><?php the_field('wordpress_title')?></h2>
                <h3><?php the_field('wordpress_description')?></h3>
            </div>
        </div>
        <div class="sectionThird">
            <div class="container-fluid pt-5 pb-5">
                <div class="row">
                    <div class="col-12 text-center title">
                        <h2><?php the_field('example_web_title')?></h2>
                    </div>
                    <div class="col-11 ml-auto mr-auto  realizacjeSlider">
                        <?php
                        if( have_rows('portfoliomain') ):
                            while( have_rows('portfoliomain') ) : the_row();
                                $image = get_sub_field('imageportfolio');?>
                                <div class="container-fluid sliderBox">
                                    <div class="row ml-0 mr-0">
                                        <div class="boxShadow">
                                            <?php echo wp_get_attachment_image( $image, 'portfolio' ); ?>
                                        </div>
                                        <div class="ml-auto mr-auto textPortfolio">
                                            <div class="text-center pageAdress">
                                                <h3><?php the_sub_field('adressportfolio');?></h3>
                                            </div>
                                            <div class="description">
                                                <h5><?php the_sub_field('descriptionportfolio');?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $sub_value = get_sub_field('sub_field');
                            endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                    <div class="col-12 mt-5 mb-5  text-center title">
                        <h2><?php the_field('graphic_example')?></h2>
                    </div>
                    <?php if( have_rows('slickgraphicproject') ): ?>
                        <div class="col-11 mt-4 ml-auto mr-auto slickGraphic">
                            <?php while( have_rows('slickgraphicproject') ): the_row();

                                ?>
                            <div class="imageGraphic">
                                <img src="<?php the_sub_field('imagegraphic')?>" alt="Projekty graficzne">
                            </div>

                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="sectionComputerService">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <img src="<?php bloginfo('template_url'); ?>/dist/img/computerService.jpg" alt="Naprawa komputerów oraz laptopów">
                    </div>
                    <div class="col-12 col-lg-6 mt-auto mb-auto">
                        <div class="titleService">
                            <h2><?php the_field('computer_fix_title')?></h2>
                        </div>
                        <div class="descriptionService">
                            <h5><?php the_field('computer_fix_description')?></h5>
                            <ul>
                                <li><h6><i class="fas fa-check"></i><?php the_field('computer_fix_first')?></h6></li>
                                <li><h6><i class="fas fa-check"></i><?php the_field('computer_fix_second')?></h6></li>
                                <li><h6><i class="fas fa-check"></i><?php the_field('computer_fix_third')?></h6></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="/wp-content/themes/codehex/slick/parallax.min.js"></script>
        <script type="text/javascript" src="/wp-content/themes/codehex/slick/slick.min.js"></script>
        <script>
            new ().init();
        </script>
    </main>
<?php get_footer(); ?>
