<?php get_header();
   $sidebar_active = is_active_sidebar( 'blog_sidebar' ) ? '' : 'justify-content-center';
?>

<!-- tp-blog-sidebar-area-start -->
<div class="tp-blog-post-area pt-120 pb-80">
   <div class="container container-1424">
      <div class="row <?php echo esc_attr($sidebar_active);?>">
         <div class=" col-xl-9 col-lg-8">
            <div class="tp-postbox-wrapper mb-40 mr-85">
               <?php if ( have_posts() ) : ?>
                  <?php while( have_posts()  ) : the_post(); ?>
                  <?php get_template_part('template-parts/content', get_post_format());?>  
               <?php endwhile; endif; ?>
               <div class="tp-pagination mt-40">
                  <?php kindaid_navigation();?>
               </div>
            </div>
         </div>
          <?php if ( is_active_sidebar( 'blog_sidebar' ) ) : ?>
            <div class="col-xl-3 col-lg-4">
               <div class="tp-blog-sidebar mb-40">
                  <?php echo get_sidebar();?>
               </div>
            </div>
         <?php endif;?>
      </div>
   </div>
</div>
<!-- tp-blog-sidebar-area-end -->

<?php get_footer();