<?php
   $searchform_switch_logo = get_theme_mod('searchform_switch_logo',true);
?>


   <!--search-form-start -->
   <div class="tp-search-body-overlay"></div>
   <div class="tp-search-form-toggle">
      <div class="container">
         <div class="row mb-70">
            <div class="col-lg-12">
               <div class="tp-search-top d-flex justify-content-between align-items-center">
               <?php if(!empty($searchform_switch_logo)):?>
                  <div class="cm-search-logo">
                    <?php kindaid_searchform_logo();?>
                  </div>
               <?php endif;?>
                  <button class="tp-search-close">
                     <i class="fa-light fa-xmark"></i>
                  </button>
               </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-12">
                  <div class="tp-search-form">
                      <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                          <div class="tp-search-form-input">
                              <label class="screen-reader-text">
                                  <?php echo esc_html__( 'Search for:', 'donacion' ); ?>
                              </label>
                              <input type="search"
                                     value="<?php echo esc_attr( get_search_query() ); ?>"
                                     name="s"
                                     id="s"
                                     placeholder="<?php echo esc_attr__( 'What are you looking for?', 'donacion' ); ?>"
                                     required>
                              <span class="tp-search-focus-border"></span>
                              <button class="tp-search-form-icon" type="submit">
                                  <i class="fa-sharp fa-regular fa-magnifying-glass"></i>
                              </button>
                          </div>
                      </form>
                  </div>
            </div>
         </div>
      </div>
   </div>
   <!-- search-form-end -->  