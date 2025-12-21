<?php
// Check if comments are allowed
if (comments_open()) :
    ?>
    <div id="comments" class="contact-form-box mt-95 mb-75 tp-contact-form">
        <?php
        // Display the comments list
        if (have_comments()) :
            ?>
            <div class="tp-blog-comments mb-50">
                <h3 class="tp-blog-comments-title mb-30">
                    <?php
                    $comment_count = get_comments_number();
                    echo esc_html($comment_count) . ' ' . _n('Comment', 'Comments', $comment_count, 'kindaid');
                    ?>
                </h3>
                <div class="tp-blog-comments-main">
                    <ul class="postbox__comment mb-95">
                        <?php
                        wp_list_comments(array(
                            'style'       => 'ul',
                            'short_ping'  => true,
                            'callback' => 'custom_comment_list'
                        ));
                        ?>
                    </ul>
                </div>
            </div>


            <?php
            // Display comment pagination if needed
            the_comments_pagination(array(
                'prev_text' => esc_html__('Previous', 'kindaid'),
                'next_text' => esc_html__('Next', 'kindaid'),
            ));
        endif;
        
        if ( is_user_logged_in() ) {
            $cl = 'loginformuser';
        } else {
            $cl = '';
        }

        $commenter = wp_get_current_commenter();
        $req = get_option('require_name_email');

        $fields = array(
            'author' => '<div class="row">
                <div class="col-md-4 mb-20">
                    <label class="tp-form-label" for="author">'.esc_html__('Your Name','kindaid').'</label>
                    <input class="tp-input"  name="author" id="author" type="text" placeholder="'.esc_attr__('Jhon','kindaid').'" value="' . esc_attr($commenter['comment_author']) . '" ' . ($req ? 'required' : '') . '>
                </div>
            ',
            'email' => '
                <div class="col-md-4 mb-20">
                    <label class="tp-form-label" for="email">'.esc_html__('Your Email','kindaid').'</label>
                    <input class="tp-input" name="email" id="email" type="email" placeholder="'.esc_attr__('hello@gmail.com','kindaid').'" value="' . esc_attr($commenter['comment_author_email']) . '" ' . ($req ? 'required' : '') . '>
                </div>
            ',
            'url' => '
                <div class="col-md-4 mb-20">
                    <label class="tp-form-label" for="url">'. esc_html__('Website','kindaid') .'</label>
                    <input class="tp-input" type="text" name="url" id="url" placeholder="'.esc_attr__('https:// website','kindaid').'" value="' . esc_attr($commenter['comment_author_url']) . '">
                </div></div>
            ',
            'cookies' => '
                <div class="col-xxl-12 mb-30">
                    <div class="tp-contact-remember mb-30">
                        <input class="tp-checkbox tp-form-label" id="remember" 
                            type="checkbox" name="wp-comment-cookies-consent" value="yes">
                        <label class="e-check-label" for="remember">' . esc_html__('Save my name, email, and website in this browser for the next time I comment.', 'kindaid') . '</label>
                    </div>
                </div>
            ',
        );


        $defaults = [
            'fields' => $fields,
            'comment_field' => '
                <div class="col-md-12 mb-30">
                    <label class="tp-form-label" for="comment">'.esc_html__('Your Comments *','kindaid').'</label>
                    <textarea class="tp-input tp-textarea" id="comment" name="comment" placeholder="'. esc_html__('Comments here...','kindaid') .'" required></textarea>
                </div>
            ',
            'submit_button' => '
                <button class="tp-btn rounded-5 tp-btn-animetion" type="submit">
                    <span class="btn-text">'. esc_html__('Post Comment','kindaid').'</span>
                    <span class="btn-icon">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    </span>
                </button>
            ',
        ];
        // Display the comment form
        comment_form($defaults);
        ?>
    </div><!-- .comments-area -->
<?php endif; ?>


<?php
// Move the comment textarea to the bottom
function move_comment_textarea_to_bottom($fields) {
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;

    return $fields;
}

add_action('comment_form_fields', 'move_comment_textarea_to_bottom');
// comments for end 


// custom_comment_list
function custom_comment_list($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;

    if ($comment->comment_type == 'pingback' || $comment->comment_type == 'trackback') {
        // Display pingbacks and trackbacks differently if needed
        ?>
        <li class="pingback">
            <p><?php esc_html_e('Pingback:', 'kindaid'); ?> <?php comment_author_link(); ?></p>
        </li>
        <?php
    } else {
        // Display regular comments
        ?>
        <li <?php comment_class('comment'); ?> id="comment-<?php comment_ID(); ?>">
            <div class="tp-blog-comments-list mb-45">
                <div class="tp-blog-comments-thumb">
                    <?php echo get_avatar( $comment, 70 );?>
                </div>
            <div class="tp-blog-comments-content">
                <div class="row mb-1">
                    <div class="col-sm-6">
                        <h4 class="tp-blog-comments-author-name"><?php comment_author();?></h4>
                    </div>
                    <div class="col-sm-6 text-sm-end">
                        <span class="tp-blog-comments-date"><?php comment_date();?></span>
                    </div>
                </div>
                <?php comment_text();?>
                <div class="tp-blog-comments-btn">
                    <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                </div>
            </div>
            </div>
                  
        <?php
    }
}
