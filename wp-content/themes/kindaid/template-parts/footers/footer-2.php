   
<?php
   $footer_1_bg = get_theme_mod('footer_1_bg');
?>
   
   <footer>

      <!-- tp-footer-area-start -->
      <div class="tp-footer-area tp-footer-3-style bg-position" style="background-image:url(<?php echo (!empty($footer_1_bg)) ? esc_url($footer_1_bg) : NULL;?>)">
         <?php if(!empty(is_active_sidebar( 'header_2_widget_01' )) || !empty(is_active_sidebar( 'header_2_widget_02' )) || !empty(is_active_sidebar( 'header_2_widget_03' )) || !empty(is_active_sidebar( 'header_2_widget_04' ))):?>
            <div class="container pt-120 container-1424">
                  <div class="row pb-60">
                  <?php if ( is_active_sidebar( 'header_2_widget_01' ) ) : ?>
                     <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                           <?php dynamic_sidebar('header_2_widget_01'); ?>
                     </div>   
                  <?php endif;?>  

                  <?php if ( is_active_sidebar( 'header_2_widget_02' ) ) : ?>
                     <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                           <?php dynamic_sidebar('header_2_widget_02'); ?>
                     </div>
                  <?php endif;?>  

                  <?php if ( is_active_sidebar( 'header_2_widget_03' ) ) : ?>
                     <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                           <?php dynamic_sidebar('header_2_widget_03'); ?>
                     </div>
                  <?php endif;?>  

                  <?php if ( is_active_sidebar( 'header_2_widget_04' ) ) : ?>
                     <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                           <?php dynamic_sidebar('header_2_widget_04'); ?>
                     </div>
                  <?php endif;?>  
                  </div>
            </div>
         <?php endif;?>
         <div class="tp-footer-bottom">
            <div class="container container-1424">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="tp-footer-copyright mb-20">
                        <?php footer_copyright();?>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="tp-footer-policy mb-20 text-lg-end">
                        <?php kindaid_footer_menu();?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-footer-area-end -->

   </footer>