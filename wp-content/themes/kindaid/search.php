<?php get_header();
?>

<!-- tp-blog-sidebar-area-start -->
<div class="tp-blog-post-area pt-120 pb-80">
   <div class="container container-1424">
      <div class="row justify-content-center">
         <div class=" col-xl-9 col-lg-8">
            <div class="tp-postbox-wrapper mb-40 mr-85">
               <?php if ( have_posts() ) : ?>
                  <?php while( have_posts()  ) : the_post(); ?>
                  <?php get_template_part('template-parts/content','search');?>  
               <?php endwhile; endif; ?>
               <div class="tp-pagination mt-40">
                  <?php kindaid_navigation();?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- tp-blog-sidebar-area-end -->

<?php get_footer();