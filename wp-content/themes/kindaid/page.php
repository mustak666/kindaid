<?php get_header();
?>

<!-- tp-blog-sidebar-area-start -->
<div class="tp-blog-post-area pt-120 pb-80">
   <div class="container container-1424">
      <div class="tp-page-wrapper mb-40 mr-85">
         <?php if ( have_posts() ) : ?>
            <?php while( have_posts()  ) : the_post(); ?>
          <?php get_template_part('template-parts/content','page');?>  
         <?php endwhile; endif; ?>
      </div>
   </div>
</div>
<!-- tp-blog-sidebar-area-end -->

<?php get_footer();