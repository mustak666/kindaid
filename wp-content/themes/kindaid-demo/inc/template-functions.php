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

// header 

function kindaid_header(){
    $header_option = get_theme_mod('header_option','header_1');

    // statment start 
    if( $header_option === 'header_1' && !empty($header_option)){
        get_template_part('template-parts/headers/header-1');
    }
    elseif($header_option === 'header_2' && !empty($header_option)){
        get_template_part('template-parts/headers/header-2');
    }

}