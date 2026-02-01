<?php
class Kindaid_Event_Sidebar_Letest_Post_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'event_letest_post',
            __('Event Sidebar Letest Post', 'kindaid'),
            array('description' => __('Displays recent Events posts with thumbnail & date', 'kindaid'))
        );
    }

    // Frontend output
    public function widget($args, $instance) {
        echo wp_kses_post($args['before_widget']);

        $widget_title = !empty($instance['widget_title']) ? $instance['widget_title'] : __('Recent Posts', 'kindaid');
        $post_count = !empty($instance['post_count']) ? absint($instance['post_count']) : 3;
        $post_id = get_the_ID();
        $args = array(
            'post_type'           => 'etn',
            'posts_per_page'      => $post_count,
            'ignore_sticky_posts' => true,
        );
        
        if ( ! empty( $post_id ) ) {
            $args['post__not_in'] = array( $post_id );
        }
        $query = new WP_Query( $args );
        ?>
        <div class="mb-20">
            <?php if(!empty($widget_title)):?>
                <h3 class="tp-widget-main-widget_title mb-35"><?php echo esc_html($widget_title);?></h3>
            <?php endif;?>

            <?php if($query->have_posts()):?>
                <?php while($query->have_posts()) : $query->the_post();
                    $event_id = get_the_ID();
                    $start_date = get_post_meta( $event_id, 'etn_start_date', true );
                ?>
                    <div class="tp-widget-post-list mb-15">
                        <?php if(has_post_thumbnail()):?>
                        <div class="tp-widget-post-thumb">
                            <a href="<?php echo esc_url( get_the_permalink( $event_id ) ); ?>"><?php echo get_the_post_thumbnail( $event_id, 'medium' ); ?></a>
                        </div>
                        <?php endif;?>
                        <div class="tp-widget-post-content">
                            <span><i class="far fa-clock"></i> <?php echo esc_html( date('M j, Y', strtotime($start_date)) ); ?></span>
                            <h4 class="tp-widget-post-title">
                                <a href="<?php echo esc_url( get_the_permalink( $event_id ) ); ?>"><?php echo esc_html( get_the_title( $event_id ) ); ?></a>
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
function register_kindaid_event_sidebar_letest_post_widget() {
    register_widget('Kindaid_Event_Sidebar_Letest_Post_Widget');
}
add_action('widgets_init', 'register_kindaid_event_sidebar_letest_post_widget');
