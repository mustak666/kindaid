<?php
class Kindaid_Blog_Sidebar_RC_Post_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'blog_sidebar_rc_post',
            __('Blog Sidebar Rc Post', 'kindaid'),
            array('description' => __('Displays recent blog posts with thumbnail & date', 'kindaid'))
        );
    }

    // Frontend output
    public function widget($args, $instance) {
        echo wp_kses_post($args['before_widget']);

        $widget_title = !empty($instance['widget_title']) ? $instance['widget_title'] : __('Recent Posts', 'kindaid');
        $post_count = !empty($instance['post_count']) ? absint($instance['post_count']) : 3;


        $query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => $post_count,
            'ignore_sticky_posts' => true,
        ));
        ?>

        <div class="mb-20">
            <?php if(!empty($widget_title)):?>
                <h3 class="tp-widget-main-widget_title mb-35"><?php echo esc_html($widget_title);?></h3>
            <?php endif;?>
            <?php if($query->have_posts()):?>
                <?php while($query->have_posts()) : $query->the_post();?>
                    <div class="tp-widget-post-list mb-15">
                        <?php if( has_post_thumbnail() ):?>
                            <div class="tp-widget-post-thumb">
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                            </div>
                        <?php endif;?>
                        <div class="tp-widget-post-content">
                            <span><i class="far fa-clock"></i> <?php echo get_the_date();?></span>
                            <h4 class="tp-widget-post-title">
                                <a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(),5,'...');?></a>
                            </h4>
                        </div>
                    </div>
            <?php endwhile;  wp_reset_postdata(); else:?>
                <p><?php echo esc_html__('No recent posts found.', 'kindaid')?></p>
            <?php endif;?>
        </div>
    <?php
        echo wp_kses_post($args['after_widget']);
    }

    // Backend form
    public function form($instance) {
        $widget_title = isset($instance['widget_title']) ? esc_attr($instance['widget_title']) : __('Recent Posts', 'kindaid');
        $post_count = isset($instance['post_count']) ? absint($instance['post_count']) : 3;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('widget_title')); ?>"><?php _e('Title:', 'kindaid'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('widget_title')); ?>" 
                   name="<?php echo esc_attr($this->get_field_name('widget_title')); ?>" type="text" 
                   value="<?php echo esc_attr($widget_title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('post_count')); ?>"><?php _e('Number of Posts:', 'kindaid'); ?></label>
            <input class="tiny-text" id="<?php echo esc_attr($this->get_field_id('post_count')); ?>" 
                   name="<?php echo esc_attr($this->get_field_name('post_count')); ?>" type="number" step="1" min="1" 
                   value="<?php echo esc_attr($post_count); ?>" size="3">
        </p>
        <?php
    }

    // Save data
    public function update($new_instance, $old_instance) {
        $instance = [];
        $instance['widget_title'] = sanitize_text_field($new_instance['widget_title']);
        $instance['post_count'] = absint($new_instance['post_count']);
        return $instance;
    }
}

// Register widget
function register_kindaid_blog_sidebar_rc_post_widget() {
    register_widget('Kindaid_Blog_Sidebar_RC_Post_Widget');
}
add_action('widgets_init', 'register_kindaid_blog_sidebar_rc_post_widget');
