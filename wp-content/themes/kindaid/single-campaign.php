    <?php get_header();
         $sidebar_active = is_active_sidebar( 'campain_sidebar' ) ? '' : 'justify-content-center';
         $campaign = charitable_get_campaign( get_the_id() );
         $goal = charitable_format_money($campaign->get_goal());
         $raised = charitable_format_money($campaign->get_donated_amount ());
         $button_text = $campaign->get('donate_button_text',true);
         $percentage = ($campaign->get_donated_amount () > 0) ?($campaign->get_donated_amount () / $campaign->get_goal ()) * 100 : 0;

         // remove donacion form field 
         add_filter( 'charitable_donation_form_user_fields', function( $fields ) {
            if ( is_singular('campaign') ) {
               unset( $fields['phone'] );
               unset( $fields['address'] );
               unset( $fields['address_2'] );
               unset( $fields['city'] );
               unset( $fields['state'] );
               unset( $fields['postcode'] );
               unset( $fields['country'] );
            }
            return $fields;
         });

    ?>
    
        <div class="tp-event-details-area pt-115 pb-90">
         <div class="container container-1424">
            <div class="row <?php echo esc_attr($sidebar_active);?>">
               <div class="col-xl-8">
                  <div class="tp-causes-details mb-30">
                     <?php if(has_post_thumbnail()):?>
                        <div class="tp-causes-details-thumb">
                           <?php the_post_thumbnail();?>
                        </div>
                     <?php endif;?>
                     <div class="tp-donation-form">
                        <div class="tp-donation-form-wrap">
                           <h3 class="tp-donation-form-title mb-35"><?php the_title();?></h3>
                           <div class="tp-donation-progress-main">
                              <div class="row">
                                 <div class="col-10">
                                    <h5 class="tp-donation-progress-label mb-5"><?php echo esc_html($raised);?> pledged of <span><?php echo esc_html($goal);?></span></h5>
                                 </div>
                                 <div class="col-2 text-end">
                                    <span class="tp-donation-progress-number"><?php echo esc_html($percentage);?>%</span>
                                 </div>
                              </div>
                              <div class="tp-donation-progress mt-10 mb-30">
                                 <div class="progress">
                                    <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".05s" style="width: <?php echo esc_attr($percentage);?>%"></div>
                                 </div>
                              </div>
                              <div class="tp-custom-donation-filter mt-40">
                                 <?php echo do_shortcode('[charitable_donation_form]'); ?>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tp-donation-info-wrap ">
                        <h2 class="tp-donation-form-title mb-10">How the program works</h2>
                        <p class="mb-30">Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Et ligula ullamcorper malesuada proin libero nunc. Quis vel eros donec ac odio tempor. Cursus in hac habitasse platea. Phasellus egestas tellus rutrum tellus pellentesque eu. Non diam phasellus vestibulum lorem sed risus ultricies tristique nulla. Auctor urna nunc id cursus metus aliquam eleifend. Sed turpis tincidunt id aliquet risus feugiat.</p>
                        <div class="row gx-20">
                           <div class="col-md-6">
                              <div class="tp-donation-info-thumb mb-30">
                                 <img class="w-100" src="assets/img/causes/details/thumb-3.jpg" alt="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="tp-donation-info-thumb mb-30">
                                 <img class="w-100" src="assets/img/causes/details/thumb-2.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <h2 class="tp-donation-form-title mb-10">Summary</h2>
                        <p class="mb-35">Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Et ligula ullamcorper malesuada proin libero nunc. Quis vel eros donec ac odio tempor. Cursus in hac habitasse platea. Phasellus egestas tellus rutrum tellus pellentesque eu.</p>
                        <div class="tp-causes-quote mb-20">
                           <svg width="36" height="33" viewBox="0 0 36 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M7.56 16.68C10.56 16.68 12.8 17.4 14.28 18.84C15.8 20.28 16.56 22.24 16.56 24.72C16.56 27.04 15.78 28.96 14.22 30.48C12.7 32 10.76 32.76 8.4 32.76C6.12 32.76 4.14 31.84 2.46 30C0.82 28.12 0 25.38 0 21.78C0 17.9 0.56 14.48 1.68 11.52C2.8 8.56 4.42 6.12 6.54 4.2C8.7 2.24 11.32 0.880001 14.4 0.119998C14.68 0.0399995 14.9 0.0399995 15.06 0.119998C15.22 0.16 15.32 0.26 15.36 0.419998C15.36 0.58 15.3 0.720003 15.18 0.840003C15.1 0.96 14.94 1.06 14.7 1.14C11.9 1.9 9.64 3.1 7.92 4.74C6.24 6.34 5.02 8.08 4.26 9.96C3.54 11.84 3.18 13.54 3.18 15.06C3.18 15.58 3.3 15.98 3.54 16.26C3.82 16.54 4.3 16.68 4.98 16.68H7.56ZM26.64 16.62C29.64 16.62 31.88 17.34 33.36 18.78C34.88 20.22 35.64 22.16 35.64 24.6C35.64 26.92 34.86 28.86 33.3 30.42C31.78 31.94 29.84 32.7 27.48 32.7C25.2 32.7 23.22 31.78 21.54 29.94C19.9 28.06 19.08 25.3 19.08 21.66C19.08 17.82 19.64 14.42 20.76 11.46C21.88 8.5 23.5 6.06 25.62 4.14C27.78 2.18 30.4 0.82 33.48 0.0600028C33.76 -0.0200009 33.98 -0.0200009 34.14 0.0600028C34.3 0.0999999 34.4 0.199999 34.44 0.360002C34.44 0.52 34.38 0.659999 34.26 0.78C34.18 0.900001 34.02 1 33.78 1.08C30.98 1.84 28.74 3.04 27.06 4.68C25.38 6.28 24.16 8.02 23.4 9.9C22.64 11.78 22.26 13.48 22.26 15C22.26 15.48 22.4 15.88 22.68 16.2C22.96 16.48 23.42 16.62 24.06 16.62H26.64Z" fill="#620035" />
                           </svg>
                           <p>““We believe in empowering and<br>
                              Equipping local leaders. We help people<br>
                              who are helping people.”</p>
                        </div>
                        <p>Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Et ligula ullamcorper malesuada proin libero nunc. Quis vel eros donec ac odio tempor. Cursus in hac habitasse platea. Phasellus egestas tellus rutrum tellus pellentesque eu.</p>
                     </div>
                  </div>       
               </div>
               <?php if ( is_active_sidebar( 'campain_sidebar' ) ) : ?>
                  <div class="col-xl-4">
                     <div class="tp-event-sidebar ml-65">
                        <?php dynamic_sidebar('campain_sidebar'); ?>
                     </div>
                  </div>
               <?php endif;?>
            </div>
         </div>
      </div>
    <?php get_footer();