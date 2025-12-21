
<?php
   // offcanvas title and content 
   $offcanvas_title = get_theme_mod('kindaid_offcanvas_title',__('Hello There!','kindaid'));
   $offcanvas_content = get_theme_mod('kindaid_offcanvas_content',__('Lorem ipsum dolor sit amet, consect etur adipiscing elit.','kindaid'));
   // offcanvas info 
   $kindaid_info_list = get_theme_mod('kindaid_info_list');
   // offcanvas gallery 
   $kindaid_gallery_list = get_theme_mod('kindaid_gallery_list');

   // offcanvas switch field 
   $switch_logo = get_theme_mod('switch_logo',true);
   $switch_content = get_theme_mod('switch_content',true);
   $switch_gallery = get_theme_mod('switch_gallery',true);
   $switch_info = get_theme_mod('switch_info',true);
   $switch_menu = get_theme_mod('switch_menu',true);
   $switch_social = get_theme_mod('switch_social',true);


?>




   <!-- tp-offcanvas start -->
   <div class="tp-offcanvas">
      <div class="tp-offcanvas-header mb-50">
         <?php if(!empty($switch_logo)):?>
            <div class="tp-offcanvas-logo">
               <?php kindaid_offcanvas_logo();?>
            </div>
         <?php endif;?>
         <div class="tp-offcanvas-close">
            <button class="tp-offcanvas-close-button"><i class="fal fa-times"></i></button>
         </div>
      </div>
      
      <?php if(!empty($switch_menu)):?>
         <div class="tp-offcanvas-menu mb-50">
            <nav> 
            </nav>
         </div>
      <?php endif;?>

      <?php if(!empty($offcanvas_title) && !empty($switch_content)):?>
         <div class="tp-offcanvas-content mb-40">
            <h3 class="tp-offcanvas-title"> <?php echo esc_html($offcanvas_title);?></h3>
         <?php if(!empty($offcanvas_content)):?>
            <p><?php echo esc_html( $offcanvas_content );?></p>
         <?php endif;?>
         </div>
      <?php endif;?>
      
      <?php if(!empty($kindaid_gallery_list) && !empty($switch_gallery)):?>
         <div class="tp-offcanvas-gallery mb-50">
         <?php foreach( $kindaid_gallery_list as $gallery_list ):?>
            <a class="popup-image" href="<?php echo esc_url($gallery_list['gallery_img']);?>"><img src="<?php echo esc_url($gallery_list['gallery_img']);?>" alt=""></a>
         <?php endforeach;?>
         </div>
      <?php endif;?>
      
      <?php if(!empty($kindaid_info_list) && !empty($switch_info)):?>
         <div class="tp-offcanvas-info mb-50">
            <h3 class="tp-offcanvas-title"><?php echo esc_html__('Information','kindaid');?></h3>
            <?php foreach($kindaid_info_list as $list) :?>
               <span><a href="<?php echo esc_url($list['info_url']);?>"><?php echo esc_html($list['info_text']);?></a></span>
            <?php endforeach;?>
         </div>
      <?php endif;?>

      <?php if(!empty($switch_social)):?>
         <div class="tp-offcanvas-social">
            <h3 class="tp-offcanvas-title"><?php echo esc_html__('Follow Us','kindaid');?></h3>
            <?php kindaid_social();?>
         </div>
      <?php endif;?>
   </div>
   <div class="tp-offcanvas-overlay"></div>
   <!-- tp-offcanvas end -->