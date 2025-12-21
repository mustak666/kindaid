<?php
// ==============================
//  Footer Info Widget (Full Version)
// ==============================
class Kindaid_Sidebar_Support_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'sidebar_support_widget',
            __('Sidebar Support Widget', 'kindaid'),
            array('support_subtitle' => __('Blog Sidebar Author Image,Author Position,Author Name,Author Social', 'kindaid'))
        );
    }

    // ========== FRONTEND OUTPUT ==========
    public function widget($args, $instance) {
         echo wp_kses_post( $args['before_widget']);
        // fields 
        $support_bg        = !empty($instance['support_bg']) ? $instance['support_bg'] : '';
        $support_subtitle = !empty($instance['support_subtitle']) ? $instance['support_subtitle'] : '';
        $support_title       = !empty($instance['support_title']) ? $instance['support_title'] : '';
        $support_btn_text       = !empty($instance['support_btn_text']) ? $instance['support_btn_text'] : '';
        $support_btn_url      = !empty($instance['support_btn_url']) ? $instance['support_btn_url'] : '';
        ?>
        <div class="tp-widget-support bg-position mb-20" data-img-bg="<?php echo (!empty($support_bg)) ? esc_url($support_bg) : '' ;?>">
            <div class="tp-widget-sidebar">
                <?php if(!empty($support_subtitle)):?>
                  <span class="tp-section-subtitle mb-15 d-inline-block" data-color="#ffcf4e"><?php echo esc_html($support_subtitle);?></span>
                <?php endif;?>
                <?php if(!empty($support_subtitle)):?>
                  <h2 class="tp-widget-support-title"><?php echo kindaid_kses_post($support_title);?></h2>
                <?php endif;?>
            </div>

            <?php if(!empty($support_btn_text)):?>
                <a class="tp-btn tp-btn-secondary-white text-capitalize tp-btn-animetion w-100 justify-content-center" href="<?php echo esc_url($support_btn_url);?>">
                    <span class="btn-icon">
                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.15195 0.500138C6.71895 0.517281 7.26794 0.6157 7.79984 0.79554H7.85294C7.88894 0.812539 7.91594 0.831328 7.93394 0.848328C8.13283 0.911853 8.32093 0.983431 8.50093 1.08185L8.84293 1.23395C8.97793 1.30553 9.13992 1.43884 9.22992 1.49342C9.31992 1.54621 9.41892 1.60079 9.49992 1.66253C10.4998 0.902906 11.7139 0.491334 12.9649 0.500138C13.5328 0.500138 14.0998 0.579912 14.6389 0.759751C17.9607 1.83342 19.1577 5.45704 18.1578 8.62436C17.5908 10.2429 16.6638 11.7201 15.4498 12.9271C13.7119 14.6002 11.8048 16.0854 9.75192 17.3649L9.52692 17.5L9.29292 17.3559C7.23284 16.0854 5.31496 14.6002 3.56088 12.9181C2.3549 11.7111 1.42701 10.2429 0.851011 8.62436C-0.165978 5.45704 1.03101 1.83342 4.38887 0.740961C4.64987 0.651489 4.91897 0.588859 5.18897 0.553965H5.29696C5.54986 0.517281 5.80096 0.500138 6.05296 0.500138H6.15195ZM14.1709 3.3276C13.8019 3.20145 13.3969 3.39918 13.2619 3.77496C13.1359 4.15075 13.3339 4.56232 13.7119 4.69563C14.2888 4.91037 14.6749 5.47494 14.6749 6.10035V6.12808C14.6578 6.33297 14.7199 6.53071 14.8459 6.68281C14.9719 6.83491 15.1609 6.92349 15.3589 6.94228C15.7279 6.93244 16.0428 6.63807 16.0698 6.2614V6.15492C16.0968 4.90142 15.3328 3.76602 14.1709 3.3276Z" fill="currentColor" />
                    </svg>
                    </span>
                    <span class="btn-text"><?php echo esc_html($support_btn_text);?></span>
                </a>
            <?php endif;?>
        </div>
        <?php
        echo wp_kses_post( $args['after_widget']);
    }

    // ========== BACKEND FORM ==========
    public function form($instance) {
        $support_bg        = !empty($instance['support_bg']) ? $instance['support_bg'] : '';
        $support_subtitle = !empty($instance['support_subtitle']) ? $instance['support_subtitle'] : '';
        $support_title       = !empty($instance['support_title']) ? $instance['support_title'] : '';
        $support_btn_text       = !empty($instance['support_btn_text']) ? $instance['support_btn_text'] : '';
        $support_btn_url      = !empty($instance['support_btn_url']) ? $instance['support_btn_url'] : '';
        ?>


        <p>
            <label><?php echo esc_html__('Support Bg:','kindaid');?></label>
            <input class="widefat upload-image" name="<?php echo esc_attr($this->get_field_name('support_bg')); ?>" type="text" value="<?php echo esc_attr($support_bg); ?>">
            <button class="button select-media"><?php echo esc_html__('Upload Image','kindaid');?></button>
        </p>

        <p>
            <label><?php echo esc_html__('Support Sub Title:','kindaid');?></label>
            <input class="widefat" name="<?php echo esc_attr($this->get_field_name('support_subtitle')); ?>" type="text" value="<?php echo esc_attr($support_subtitle); ?>">
        </p>
        <p>
            <label><?php echo esc_html__('Support Title:','kindaid');?></label>
            <input class="widefat" name="<?php echo esc_attr($this->get_field_name('support_title')); ?>" type="text" value="<?php echo esc_attr($support_title); ?>">
        </p>
        <p>
            <label><?php echo esc_html__('Support Btn Text:','kindaid');?></label>
            <input class="widefat" name="<?php echo esc_attr( $this->get_field_name('support_btn_text')); ?>" type="text" value="<?php echo esc_attr($support_btn_text); ?>">
        </p>
        <p>
            <label><?php echo esc_html__('Support Btn URL:','kindaid');?></label>
            <input class="widefat" name="<?php echo esc_attr($this->get_field_name('support_btn_url')); ?>" type="url" value="<?php echo esc_attr($support_btn_url); ?>">
        </p>

        <script>
            jQuery(document).ready(function($){
                $('.select-media').on('click', function(e){
                    e.preventDefault();
                    var button = $(this);
                    var input = button.prev('.upload-image');
                    var custom_uploader = wp.media({
                        support_title: 'Select Logo Image',
                        button: { text: 'Use this image' },
                        multiple: false
                    }).on('select', function() {
                        var attachment = custom_uploader.state().get('selection').first().toJSON();
                        input.val(attachment.url).trigger('change'); // <-- এখানে trigger('change') যোগ করলাম
                    }).open();
                });
            });
        </script>

        <?php
    }

    public function update($new_instance, $old_instance) {
        return array(
            'support_bg'          => esc_url_raw($new_instance['support_bg'] ?? ''),
            'support_subtitle'   => sanitize_textarea_field($new_instance['support_subtitle'] ?? ''),
            'support_title'         => kindaid_kses_post($new_instance['support_title'] ?? ''),
            'support_btn_text'         => sanitize_text_field($new_instance['support_btn_text'] ?? ''),
            'support_btn_url'         => esc_url_raw($new_instance['support_btn_url'] ?? ''),
        );
    }

}

// Register widget
function register_sidebar_support_widget() {
    register_widget('Kindaid_Sidebar_Support_Widget');
}
add_action('widgets_init', 'register_sidebar_support_widget');
