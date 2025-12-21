
<?php if(is_single()):?>
    <article id="post-<?php the_id();?>" <?php post_class('tp-postbox-item mb-30');?>>
        <?php if( has_post_thumbnail() ):?>
            <div class="tp-postbox-thumb mb-30">
                <?php the_post_thumbnail();?>
            </div>
        <?php endif;?>
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
            <div class="tp-postbox-thumb">
                <?php the_post_thumbnail();?>
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