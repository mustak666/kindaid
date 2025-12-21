    <?php get_header();
     $sidebar_active = is_active_sidebar( 'blog_sidebar' ) ? '' : 'justify-content-center';
    ?>
    
      <!-- tp-blog-sidebar-area-start -->
      <div class="tp-blog-post-area pt-120 pb-80">
         
         <div class="container container-1424">
            <div class="row <?php echo esc_attr($sidebar_active);?>">
               <div class="col-xl-9 col-lg-8">
                  <div class="tp-postbox-wrapper tp-postbox-details-wrap mr-85 mb-40" id="mainContent">
                    <?php if ( have_posts() ) : ?>
                     <?php while( have_posts()  ) : the_post(); 
                        $next_post = get_next_post();
                        $prev_post = get_previous_post();
                     ?>
                     <?php get_template_part('template-parts/content', get_post_format());?> 
                        <?php if(!empty($next_post) || !empty($prev_post)):?> 
                           <div class="tp-blog-navigation-wrap mb-35">
                              <div class="row justify-content-between w-100 mt-70">
                                 <div class="col-xl-5 col-lg-6 col-md-6">
                                    <?php if(!empty($prev_post)):?>
                                       <div class="tp-blog-navigation mb-30">
                                          <a href="<?php echo get_the_permalink($prev_post);?>">
                                             <i class="far fa-arrow-left"></i>
                                             <div class="tp-blog-navigation-text">
                                                <span><?php echo esc_html__('Previous Post','kindaid');?></span>
                                                <h4 class="tp-blog-navigation-title"><?php echo esc_html($prev_post->post_title);?></h4>
                                             </div>
                                          </a>
                                       </div>
                                    <?php endif;?>
                                 </div>
                                 <div class="col-xl-5 col-lg-6 col-md-6">
                                    <?php if(!empty($next_post)):?>
                                       <div class="tp-blog-navigation mb-30 text-end d-flex justify-content-end">
                                          <a href="<?php echo get_the_permalink($next_post);?>">                                      
                                             <div class="tp-blog-navigation-text">
                                                <span><?php echo esc_html__('Next Post','kindaid');?></span>
                                                <h4 class="tp-blog-navigation-title"><?php echo esc_html($next_post->post_title);?></h4>
                                             </div>
                                             <i class="far fa-arrow-right"></i>
                                          </a>
                                       </div>
                                    <?php endif;?>
                                 </div>
                              </div>
                           </div>
                        <?php endif;?>
                           <div class="tp-blog-tag-social">
                              <div class="row">
                                 <div class="col-xl-8">
                                    <?php kindaid_tags();?>
                                 </div>
                                 <div class="col-xl-4">
                                    <?php kindaid_social_share();?>
                                 </div>
                              </div>
                           </div>
                           <?php get_template_part('template-parts/blog/biogriphy');?>
                           <?php if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                           endif; ?>
                     <?php endwhile; endif; ?>
                  </div>
               </div>
               <?php if ( is_active_sidebar( 'blog_sidebar' ) ) : ?>
                  <div class="col-xl-3 col-lg-4">
                     <div class="tp-blog-sidebar mb-40" id="sidebar">
                        <?php echo get_sidebar();?>
                     </div>
                  </div>
               <?php endif;?>
            </div>
         </div>
      </div>
      <!-- tp-blog-sidebar-area-end -->

    <?php get_footer();