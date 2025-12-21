<?php get_header();
    $error_title = get_theme_mod('error_title',esc_html__('Opps!','kindaid'));
    $error_sub_title = get_theme_mod('error_sub_title',esc_html__('404 - page not found','kindaid'));
    $error_content = get_theme_mod('error_content',esc_html__('the page you are looking for might have been removed has its name chenged or is tempurery unavable','kindaid'));
    $error_btn_text = get_theme_mod('error_btn_text',esc_html__('Go To Homepage','kindaid'));
?>

    <section class="tp-error-area pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="tp-error text-center">
                        <?php if(!empty($error_title)):?>
                          <h2 class="tp-error-title"><?php echo esc_html($error_title);?></h2>
                        <?php endif;?>

                        <?php if(!empty($error_sub_title)):?>
                        <h4 class="tp-error-sub-title"><?php echo esc_html($error_sub_title);?></h4>
                        <?php endif;?>

                        <?php if(!empty($error_content)):?>
                        <p><?php echo kindaid_kses_post($error_content);?></p>
                        <?php endif;?>

                        <?php if(!empty($error_btn_text)):?>
                            <a class="tp-btn tp-btn-animetion mr-5 mb-10" href="<?php echo esc_url(home_url('/') );?>">
                                <span class="btn-text"><?php echo esc_html($error_btn_text);?></span>
                                <span class="btn-icon">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                </span>
                            </a>
                        <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();