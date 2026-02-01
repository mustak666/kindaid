<!doctype html>
<html class="<?php echo language_attributes( );?>">

<head>
   <meta charset="<?php bloginfo( 'charset' );?>">
    <?php if( is_singular() && pings_open(get_queried_object() ) ):?>
    <?php endif;?>
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
   <?php wp_body_open();
   ?>




   <!-- Preloader Start -->
   <div class="preloader d-none">
      <div class="loader"></div>
   </div>
   <!-- Preloader End -->

   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
               stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->

  <?php kindaid_header(); kindaid_breadcrumb();?>

   <main>
