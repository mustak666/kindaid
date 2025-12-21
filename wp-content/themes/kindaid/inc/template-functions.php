<?php


// logo black 
function kindaid_logo_black(){
    $logo_black_default = get_template_directory_uri() . '/assets/img/logo/logo.png';
    $logo_black = get_theme_mod('kindaid_logo_black',$logo_black_default);
    ?>
    <?php if(!empty($logo_black)):?>
        <a href="<?php echo esc_url(home_url('/') );?>">
            <img data-width="108" src="<?php echo esc_url($logo_black);?>" alt="<?php echo bloginfo();?>">
        </a>
    <?php endif;?>
<?php
}

// logo yellow 
function kindaid_logo_yellow(){
    $logo_yellow_default = get_template_directory_uri() . '/assets/img/logo/logo-yellow.png';
    $logo_yelllow = get_theme_mod('kindaid_logo_yellow',$logo_yellow_default);
    ?>
    <?php if(!empty($logo_yelllow)):?>
        <a href="<?php echo esc_url(home_url('/') );?>">
            <img data-width="108" src="<?php echo esc_url($logo_yelllow);?>" alt="<?php echo bloginfo();?>">
        </a>
    <?php endif;?>
<?php
}

// offcanvas logo 
function kindaid_offcanvas_logo(){
    $offcanvas_logo_default = get_template_directory_uri() . '/assets/img/logo/logo.png';
    $kindaid_offcanvas_logo = get_theme_mod('kindaid_offcanvas_logo',$offcanvas_logo_default);
    ?>
    <?php if(!empty($kindaid_offcanvas_logo)):?>
        <a href="<?php echo esc_url(home_url('/') );?>">
            <img data-width="108" src="<?php echo esc_url($kindaid_offcanvas_logo);?>" alt="<?php echo bloginfo();?>">
        </a>
    <?php endif;?>
<?php
}

// searchform logo 
function kindaid_searchform_logo(){
    $searchform_logo_default = get_template_directory_uri() . '/assets/img/logo/logo.png';
    $kindaid_searchform_logo = get_theme_mod('kindaid_searchform_logo',$searchform_logo_default);
    ?>
    <?php if(!empty($kindaid_searchform_logo)):?>
        <a href="<?php echo esc_url(home_url('/') );?>">
            <img data-width="108" src="<?php echo esc_url($kindaid_searchform_logo);?>" alt="<?php echo bloginfo();?>">
        </a>
    <?php endif;?>
<?php
}

// header menu 
function kindaid_header_menu(){
    wp_nav_menu(
        array(
            'theme_location' => 'main_menu',
            'menu_class' => '',
            'menu_id'=> '',
            'fallback_cb'=> 'KindAid_Walker_Nav_Menu::fallback',
            'walker' => new KindAid_Walker_Nav_Menu,
        )     
    );
}

// Footer menu 
function kindaid_footer_menu(){
    wp_nav_menu(
        array(
            'theme_location' => 'footer_menu',
            'menu_class' => '',
            'menu_id'=> '',
             'container' => false,
            'fallback_cb'=> 'KindAid_Walker_Nav_Menu::fallback',
            'walker' => new KindAid_Walker_Nav_Menu,
        )     
    );
}

// socials 
function kindaid_social(){
    $facbook_url = get_theme_mod('facbook_url',__('#','kindaid'));
    $instragram_url = get_theme_mod('instragram_url',__('#','kindaid'));
    $twitter_url = get_theme_mod('twitter_url',__('#','kindaid'));
    $linkedin_url = get_theme_mod('linkedin_url',__('#','kindaid'));
    $vieamo_url = get_theme_mod('vieamo_url',__('#','kindaid'));
    $youtube_url = get_theme_mod('youtube_url',__('#','kindaid'));
    $flickr_url = get_theme_mod('flickr_url',__('#','kindaid'));
    $behance_url = get_theme_mod('behance_url',__('#','kindaid'));
   ?>
    <?php if(!empty( $facbook_url)):?>
        <a href="<?php echo esc_url( $facbook_url);?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="18" viewBox="0 0 12 18" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.62839 7.77713C0.911363 7.77713 0.761719 7.91782 0.761719 8.59194V9.81416C0.761719 10.4883 0.911363 10.629 1.62839 10.629H3.36172V15.5179C3.36172 16.192 3.51136 16.3327 4.22839 16.3327H5.96172C6.67874 16.3327 6.82839 16.192 6.82839 15.5179V10.629H8.77466C9.31846 10.629 9.45859 10.5296 9.60798 10.038L9.97941 8.81579C10.2353 7.97368 10.0776 7.77713 9.14609 7.77713H6.82839V5.74009C6.82839 5.29008 7.21641 4.92527 7.69505 4.92527H10.1617C10.8787 4.92527 11.0284 4.78458 11.0284 4.11046V2.48083C11.0284 1.80671 10.8787 1.66602 10.1617 1.66602H7.69505C5.30182 1.66602 3.36172 3.49004 3.36172 5.74009V7.77713H1.62839Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
        </svg>
        </a>
    <?php endif;?>

    <?php if(!empty( $twitter_url)):?>
    <a href="<?php echo esc_url( $twitter_url);?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28884 0.714844H0.666992L6.14691 7.9153L1.01754 13.9556H3.38746L7.26697 9.38713L10.7118 13.9136H15.3337L9.69453 6.50391L9.70451 6.51669L14.5599 0.798959H12.19L8.58427 5.04503L5.28884 0.714844ZM3.21817 1.97588H4.65702L12.7825 12.6525H11.3436L3.21817 1.97588Z" fill="currentColor"></path>
    </svg>
    </a>
    <?php endif;?>

    <?php if(!empty( $linkedin_url)):?>
    <a href="<?php echo esc_url( $linkedin_url);?>">
        <i class="fa-brands fa-linkedin-in"></i>
    </a>
    <?php endif;?> 

    <?php if(!empty( $instragram_url)):?>
        <a href="<?php echo esc_url( $instragram_url);?>">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.66602 8.99935C1.66602 5.54238 1.66602 3.8139 2.73996 2.73996C3.8139 1.66602 5.54238 1.66602 8.99935 1.66602C12.4563 1.66602 14.1848 1.66602 15.2587 2.73996C16.3327 3.8139 16.3327 5.54238 16.3327 8.99935C16.3327 12.4563 16.3327 14.1848 15.2587 15.2587C14.1848 16.3327 12.4563 16.3327 8.99935 16.3327C5.54238 16.3327 3.8139 16.3327 2.73996 15.2587C1.66602 14.1848 1.66602 12.4563 1.66602 8.99935Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
            <path d="M12.4747 9.00103C12.4747 10.9195 10.9195 12.4747 9.00103 12.4747C7.08256 12.4747 5.52734 10.9195 5.52734 9.00103C5.52734 7.08256 7.08256 5.52734 9.00103 5.52734C10.9195 5.52734 12.4747 7.08256 12.4747 9.00103Z" stroke="currentColor" stroke-width="1.5"></path>
            <path d="M13.251 4.75391L13.242 4.75391" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
        </a>
    <?php endif;?>

    <?php if(!empty( $vieamo_url)):?>
        <a href="<?php echo esc_url( $vieamo_url);?>">
          <i class="fa-brands fa-vimeo-v"></i>
        </a>
    <?php endif;?> 

    <?php if(!empty( $youtube_url)):?>
        <a href="<?php echo esc_url( $youtube_url);?>">
          <i class="fa-brands fa-youtube"></i>
        </a>
    <?php endif;?> 

    <?php if(!empty( $flickr_url)):?>
        <a href="<?php echo esc_url( $flickr_url);?>">
            <i class="fa-brands fa-flickr"></i>
        </a>
    <?php endif;?> 

    <?php if(!empty( $behance_url)):?>
        <a href="<?php echo esc_url( $behance_url);?>">
           <i class="fa-brands fa-behance"></i>
        </a>
    <?php endif;?> 

<?php
}

// headers 
function kindaid_header(){
    $header_option_page = function_exists('tpmeta_field')? tpmeta_field('header_option_page') : '';
    $header_option = get_theme_mod('header_option','header_1');

    // statment start 
    if( $header_option_page === 'header_style_1' && !empty($header_option_page)){
        get_template_part('template-parts/headers/header-1');
    }
    elseif($header_option_page === 'header_style_2' && !empty($header_option_page)){
         get_template_part('template-parts/headers/header-2');
    }
    elseif($header_option_page === 'header_style_3' && !empty($header_option_page)){
         get_template_part('template-parts/headers/header-3');
    }
    else{
        if( $header_option === 'header_3' && !empty($header_option)){
            get_template_part('template-parts/headers/header-3');
        }
        elseif($header_option === 'header_2' && !empty($header_option)){
            get_template_part('template-parts/headers/header-2');
        }
        else{
            get_template_part('template-parts/headers/header-1');
        }
    }
}

// kindaid footers
function kindaid_footer(){
    $Footer_option_page = function_exists('tpmeta_field')? tpmeta_field('Footer_option_page') : '';
    $kindaid_footer_global = get_theme_mod('kindaid_footer_option');

    if(!empty($Footer_option_page) && $Footer_option_page === 'footer_style_1'){
        get_template_part('template-parts/footers/footer-1');
    }
    elseif(!empty($Footer_option_page)  && $Footer_option_page === 'footer_style_2'){
        get_template_part('template-parts/footers/footer-2');
    }
    else{
        if(!empty($kindaid_footer_global) && $kindaid_footer_global === 'footer_2'){
            get_template_part('template-parts/footers/footer-2');
        }else{
            get_template_part('template-parts/footers/footer-1');
        }
    }

}


function footer_copyright(){
    $kindaid_footer_copyright = get_theme_mod('kindaid_footer_copyright',__('© 2025 Charity. is Proudly Powered by Aqlova','kindaid'));
    ?>
    <?php if(!empty($kindaid_footer_copyright)):?>
        <p class="mb-0"><?php echo kindaid_kses_post($kindaid_footer_copyright);?></a></p>
    <?php endif;?>
    <?php
}


/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function kindaid_searchform_main( $form ) {
    $form = '
        <div class="tp-widget-search mb-20">
            <form action="' . home_url( '/' ) . '" method="get">
                <input type="text"  name="s" value="' . get_search_query() . '" placeholder="'. esc_attr__( 'Search...','kindaid' ) .'">
                <button type="submit">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="#121018" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M19.0004 19.0004L14.6504 14.6504" stroke="#121018" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </button>
            </form>
        </div>
    ';
	return $form;
}
add_filter( 'get_search_form', 'kindaid_searchform_main' );

// kindaid_navigation
function kindaid_navigation() {
    $pages = paginate_links( array(
        'type'      => 'array',
        'prev_text' => __('<i class="far fa-arrow-left"></i>','kindaid'),
        'next_text' => __('<i class="far fa-arrow-right"></i>','kindaid')
    ) );
    if( $pages ) {
        echo '<ul>';
            foreach ( $pages as $page ) {
                echo "<li>$page</li>";
            }
        echo '</ul>';
    }
}

// custom kses post 
function kindaid_kses_post( $custom_kses_post = '' ) {

	$kindaid_html_allow = [

		// ✅ Full SVG support
		'svg' => [
			'class'             => [],
			'xmlns'             => [],
			'xmlns:xlink'       => [],
			'version'           => [],
			'id'                => [],
			'x'                 => [],
			'y'                 => [],
			'width'             => [],
			'height'            => [],
			'viewbox'           => [],
			'fill'              => [],
			'stroke'            => [],
			'stroke-width'      => [],
			'stroke-linecap'    => [],
			'stroke-linejoin'   => [],
			'aria-hidden'       => [],
			'focusable'         => [],
			'role'              => [],
			'preserveaspectratio' => [],
		],
		'g' => [
			'fill'   => [],
			'stroke' => [],
			'class'  => [],
			'id'     => [],
			'style'  => [],
		],
		'path' => [
			'd'              => [],
			'fill'           => [],
			'stroke'         => [],
			'stroke-width'   => [],
			'stroke-linecap' => [],
			'stroke-linejoin'=> [],
			'class'          => [],
			'id'             => [],
			'style'          => [],
		],
		'circle' => [
			'cx'     => [],
			'cy'     => [],
			'r'      => [],
			'fill'   => [],
			'stroke' => [],
			'class'  => [],
		],
		'rect' => [
			'x'      => [],
			'y'      => [],
			'width'  => [],
			'height' => [],
			'rx'     => [],
			'ry'     => [],
			'fill'   => [],
			'class'  => [],
		],
		'polygon' => [
			'points' => [],
			'fill'   => [],
			'class'  => [],
		],
		'polyline' => [
			'points' => [],
			'fill'   => [],
			'class'  => [],
		],
		'line' => [
			'x1'     => [],
			'y1'     => [],
			'x2'     => [],
			'y2'     => [],
			'stroke' => [],
			'class'  => [],
		],
		'title' => [],
		'defs'  => [],
		'use'   => [
			'xlink:href' => [],
		],

		// ✅ Links and Text
		'a' => [
			'href'   => [],
			'target' => [],
			'class'  => [],
			'title'  => [],
		],
		'p' => [ 'class' => [], 'id' => [], 'style' => [] ],
		'div' => [ 'class' => [], 'id' => [], 'style' => [] ],
		'span' => [
			'class' => [], // ✅ for flaticon & fontawesome spans
			'id'    => [],
			'style' => [],
		],
		'i' => [
			'class'       => [], // ✅ fa, fab, flaticon-*, etc.
			'id'          => [],
			'style'       => [],
			'title'       => [],
			'aria-hidden' => [],
		],
		'strong' => [],
		'b'       => [],
		'em'      => [],
		'br'      => [],
		'ul'      => [ 'class' => [] ],
		'ol'      => [ 'class' => [] ],
		'li'      => [ 'class' => [] ],
		'img'     => [
			'src'       => [],
			'alt'       => [],
			'title'     => [],
			'width'     => [],
			'height'    => [],
			'class'     => [],
			'loading'   => [],
			'decoding'  => [],
		],
		'blockquote' => [ 'cite' => [] ],
		'q'          => [ 'cite' => [] ],
		'cite'       => [],
		'hr'         => [],
		'address'    => [ 'class' => [] ],
	];

	return wp_kses( $custom_kses_post, $kindaid_html_allow );
}

function kindaid_tags(){
    $tags = get_the_tags();
    ?> 
    <?php if(!empty($tags)):?>
        <div class="tp-blog-tag mb-20">
            <h4 class="tp-blog-tag-title mb-0 mr-10"><?php echo esc_html__('Popular Tags:','kindaid');?></h4>
            <?php foreach($tags as $tag):?>
            <a href="<?php echo esc_url(get_tag_link($tag->term_id));?>"><?php echo esc_html($tag->name);?></a>
            <?php endforeach;?>
        </div>
    <?php endif;?>
    <?php
}
// kindaid_social_share
function kindaid_social_share(){
    $post_url   = urlencode(get_permalink());
    $post_title = urlencode(get_the_title());
    ?>
        <div class="tp-blog-social text-xl-end mb-20">
            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url($post_url); ?>&title=<?php echo esc_html($post_title); ?>" target="_blank" rel="noopener">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="18" viewBox="0 0 12 18" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.62839 7.77713C0.911363 7.77713 0.761719 7.91782 0.761719 8.59194V9.81416C0.761719 10.4883 0.911363 10.629 1.62839 10.629H3.36172V15.5179C3.36172 16.192 3.51136 16.3327 4.22839 16.3327H5.96172C6.67874 16.3327 6.82839 16.192 6.82839 15.5179V10.629H8.77466C9.31846 10.629 9.45859 10.5296 9.60798 10.038L9.97941 8.81579C10.2353 7.97368 10.0776 7.77713 9.14609 7.77713H6.82839V5.74009C6.82839 5.29008 7.21641 4.92527 7.69505 4.92527H10.1617C10.8787 4.92527 11.0284 4.78458 11.0284 4.11046V2.48083C11.0284 1.80671 10.8787 1.66602 10.1617 1.66602H7.69505C5.30182 1.66602 3.36172 3.49004 3.36172 5.74009V7.77713H1.62839Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                </svg>
            </a>

            <!-- Twitter / X -->
            <a href="https://twitter.com/intent/tweet?url=<?php echo esc_url($post_url); ?>&text=<?php echo esc_html($post_title); ?>" target="_blank" rel="noopener">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28884 0.714844H0.666992L6.14691 7.9153L1.01754 13.9556H3.38746L7.26697 9.38713L10.7118 13.9136H15.3337L9.69453 6.50391L9.70451 6.51669L14.5599 0.798959H12.19L8.58427 5.04503L5.28884 0.714844ZM3.21817 1.97588H4.65702L12.7825 12.6525H11.3436L3.21817 1.97588Z" fill="currentColor"/>
                </svg>
            </a>

            <!-- Facebook -->
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url($post_url); ?>" target="_blank" rel="noopener">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="18" viewBox="0 0 12 18" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.62839 7.77713C0.911363 7.77713 0.761719 7.91782 0.761719 8.59194V9.81416C0.761719 10.4883 0.911363 10.629 1.62839 10.629H3.36172V15.5179C3.36172 16.192 3.51136 16.3327 4.22839 16.3327H5.96172C6.67874 16.3327 6.82839 16.192 6.82839 15.5179V10.629H8.77466C9.31846 10.629 9.45859 10.5296 9.60798 10.038L9.97941 8.81579C10.2353 7.97368 10.0776 7.77713 9.14609 7.77713H6.82839V5.74009C6.82839 5.29008 7.21641 4.92527 7.69505 4.92527H10.1617C10.8787 4.92527 11.0284 4.78458 11.0284 4.11046V2.48083C11.0284 1.80671 10.8787 1.66602 10.1617 1.66602H7.69505C5.30182 1.66602 3.36172 3.49004 3.36172 5.74009V7.77713H1.62839Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    <?php
}
// / This code filters the Archive widget to include the post count inside the link /
add_filter( 'get_archives_link', 'kindaid_archive_count_span' );
function kindaid_archive_count_span( $links ) {
    $links = str_replace('</a>&nbsp;(', '<span > (', $links);
    $links = str_replace(')', ')</span></a> ', $links);
    return $links;
}


// / This code filters the Category widget to include the post count inside the link /
add_filter('wp_list_categories', 'kindaid_cat_count_span');
function kindaid_cat_count_span($links) {
  $links = str_replace('</a> (', '<span> (', $links);
  $links = str_replace(')', ')</span></a>', $links);
  return $links;
}
