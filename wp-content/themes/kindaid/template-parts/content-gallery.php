  <?php 
     $gallery_item = function_exists('tpmeta_gallery_field')? tpmeta_gallery_field('gallery_5') : '';
  ?>
<?php if(is_single()):?>
<article id="post-<?php the_id();?>" <?php post_class('tp-postbox-item mb-30');?>>
    <?php if(has_post_thumbnail()):?>
      <div class="tp-postbox-thumb mb-30">
        <?php if(!empty($gallery_item)):?>
            <div class="swiper-container tp-postbox-gallery-active">
              <div class="swiper-wrapper">
                  <?php foreach($gallery_item as $item): ?>
                    <div class="swiper-slide">
                      <div class="tp-postbox-thumb-overlay">
                        <img src="<?php echo esc_url($item['url']);?>" alt="">
                      </div>
                    </div>
                  <?php endforeach;?>
              </div>
            </div>
            <div class="tp-blog-gallery-arrow">
              <button class="tp-gallery-arrow-prev tp-gallery-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                    <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </button>
              <button class="tp-gallery-arrow-next tp-gallery-arrow ml-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                    <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </button>
            </div>
        <?php endif;?>
      </div>
    <?php endif?>
        <div class="tp-postbox-details-content">
        <?php get_template_part('template-parts/blog/post-cat',);?> 
        <h2 class="tp-postbox-title mb-15"><?php the_title();?></h2>
        <?php get_template_part('template-parts/blog/meta');?>  
        <?php the_content();?>
    </div>
</article>

<?php else:?>

<article id="post-<?php the_id();?>" <?php post_class('tp-postbox-item mb-30');?>>
    <?php if(has_post_thumbnail()):?>
      <div class="tp-postbox-thumb mb-30">
        <?php if(!empty($gallery_item)):?>
            <div class="swiper-container tp-postbox-gallery-active">
              <div class="swiper-wrapper">
                  <?php foreach($gallery_item as $item): ?>
                    <div class="swiper-slide">
                      <div class="tp-postbox-thumb-overlay">
                        <img src="<?php echo esc_url($item['url']);?>" alt="">
                      </div>
                    </div>
                  <?php endforeach;?>
              </div>
            </div>
            <div class="tp-blog-gallery-arrow">
              <button class="tp-gallery-arrow-prev tp-gallery-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                    <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </button>
              <button class="tp-gallery-arrow-next tp-gallery-arrow ml-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                    <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </button>
            </div>
        <?php endif;?>
           <?php get_template_part('template-parts/blog/post-cat',);?>  
      </div>
    <?php endif?>
    <div class="tp-postbox-content">
      <?php get_template_part('template-parts/blog/meta',);?>  
        <h2 class="tp-postbox-title mb-15"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <p><?php the_excerpt();?></p>
        <?php get_template_part('template-parts/blog/blog-btn',);?>  
    </div>
</article>
<?php endif;