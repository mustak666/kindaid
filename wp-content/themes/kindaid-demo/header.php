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

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

   <!-- Preloader Start -->
   <div class="preloader">
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

   <!--search-form-start -->
   <div class="tp-search-body-overlay"></div>
   <div class="tp-search-form-toggle">
      <div class="container">
         <div class="row mb-70">
            <div class="col-lg-12">
               <div class="tp-search-top d-flex justify-content-between align-items-center">
                  <div class="cm-search-logo">
                     <a href="index.html"><img data-width="108" src="assets/img/logo/logo.png" alt="logo"></a>
                  </div>
                  <button class="tp-search-close">
                     <i class="fa-light fa-xmark"></i>
                  </button>
               </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-12">
               <div class="tp-search-form">
                  <form action="#">
                     <div class="tp-search-form-input">
                        <input type="text" placeholder="What are you looking foor?" required>
                        <span class="tp-search-focus-border"></span>
                        <button class="tp-search-form-icon" type="submit">
                           <i class="fa-sharp fa-regular fa-magnifying-glass"></i>
                        </button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- search-form-end -->   

   <!-- tp-offcanvas start -->
   <div class="tp-offcanvas">
      <div class="tp-offcanvas-header mb-50">
         <div class="tp-offcanvas-logo">
            <a href="index.html"><img data-width="108" src="assets/img/logo/logo.png" alt=""></a>
         </div>
         <div class="tp-offcanvas-close">
            <button class="tp-offcanvas-close-button"><i class="fal fa-times"></i></button>
         </div>
      </div>
      <div class="tp-offcanvas-menu mb-50">
         <nav> 
         </nav>
      </div>
      <div class="tp-offcanvas-content mb-40">
         <h3 class="tp-offcanvas-title"> Hello There!</h3>
         <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit. </p>
      </div>
      <div class="tp-offcanvas-gallery mb-50">
         <a class="popup-image" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" alt=""></a>
         <a class="popup-image" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" alt=""></a>
         <a class="popup-image" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" alt=""></a>
         <a class="popup-image" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" alt=""></a>
      </div>
      <div class="tp-offcanvas-info mb-50">
         <h3 class="tp-offcanvas-title">Information</h3>
         <span><a href="#">+ 4 20 7700 1007</a></span>
         <span><a href="#">hello@exdos.com</a></span>
         <span><a href="#">Avenue de Roma 158b, Lisboa</a></span>
      </div>
      <div class="tp-offcanvas-social">
         <h3 class="tp-offcanvas-title"> Follow Us</h3>
         <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="18" viewBox="0 0 12 18" fill="none">
               <path fill-rule="evenodd" clip-rule="evenodd" d="M1.62839 7.77713C0.911363 7.77713 0.761719 7.91782 0.761719 8.59194V9.81416C0.761719 10.4883 0.911363 10.629 1.62839 10.629H3.36172V15.5179C3.36172 16.192 3.51136 16.3327 4.22839 16.3327H5.96172C6.67874 16.3327 6.82839 16.192 6.82839 15.5179V10.629H8.77466C9.31846 10.629 9.45859 10.5296 9.60798 10.038L9.97941 8.81579C10.2353 7.97368 10.0776 7.77713 9.14609 7.77713H6.82839V5.74009C6.82839 5.29008 7.21641 4.92527 7.69505 4.92527H10.1617C10.8787 4.92527 11.0284 4.78458 11.0284 4.11046V2.48083C11.0284 1.80671 10.8787 1.66602 10.1617 1.66602H7.69505C5.30182 1.66602 3.36172 3.49004 3.36172 5.74009V7.77713H1.62839Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
            </svg>
         </a>
         <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
               <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28884 0.714844H0.666992L6.14691 7.9153L1.01754 13.9556H3.38746L7.26697 9.38713L10.7118 13.9136H15.3337L9.69453 6.50391L9.70451 6.51669L14.5599 0.798959H12.19L8.58427 5.04503L5.28884 0.714844ZM3.21817 1.97588H4.65702L12.7825 12.6525H11.3436L3.21817 1.97588Z" fill="currentColor"></path>
            </svg>
         </a>
         <a href="#">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
               <circle cx="9.99991" cy="9.99991" r="8.38077" stroke="currentColor" stroke-width="1.5"></circle>
               <path d="M18.3799 11.0604C17.6032 10.9148 16.8043 10.8389 15.9891 10.8389C11.5034 10.8389 7.51372 13.1373 4.9707 16.7054" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
               <path d="M15.8665 4.13281C13.2437 7.2064 9.30255 9.16128 4.8957 9.16128C3.76828 9.16128 2.67133 9.03332 1.61914 8.79143" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
               <path d="M12.1938 18.3815C12.4039 17.3641 12.5142 16.3104 12.5142 15.2309C12.5142 9.93756 9.86111 5.26259 5.80957 2.45801" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
            </svg>
         </a>
         <a href="#">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M1.66602 8.99935C1.66602 5.54238 1.66602 3.8139 2.73996 2.73996C3.8139 1.66602 5.54238 1.66602 8.99935 1.66602C12.4563 1.66602 14.1848 1.66602 15.2587 2.73996C16.3327 3.8139 16.3327 5.54238 16.3327 8.99935C16.3327 12.4563 16.3327 14.1848 15.2587 15.2587C14.1848 16.3327 12.4563 16.3327 8.99935 16.3327C5.54238 16.3327 3.8139 16.3327 2.73996 15.2587C1.66602 14.1848 1.66602 12.4563 1.66602 8.99935Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
               <path d="M12.4747 9.00103C12.4747 10.9195 10.9195 12.4747 9.00103 12.4747C7.08256 12.4747 5.52734 10.9195 5.52734 9.00103C5.52734 7.08256 7.08256 5.52734 9.00103 5.52734C10.9195 5.52734 12.4747 7.08256 12.4747 9.00103Z" stroke="currentColor" stroke-width="1.5"></path>
               <path d="M13.251 4.75391L13.242 4.75391" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
         </a>
      </div>
   </div>
   <div class="tp-offcanvas-overlay"></div>
   <!-- tp-offcanvas end -->

   <!-- cart mini area start -->
   <div class="cartmini__area">
      <div class="cartmini__wrapper d-flex justify-content-between flex-column">
         <div class="cartmini__top-wrapper ">
            <div class="cartmini__top p-relative">
               <div class="cartmini__title">
                  <h4>Shopping cart</h4>
               </div>
               <div class="cartmini__close">
                  <button type="button" class="cartmini__close-btn cartmini-close-btn"><i class="fal fa-times"></i></button>
               </div>
            </div>
            <div class="cartmini__widget">
               <div class="cartmini__widget-item">
                  <div class="cartmini__thumb">
                     <a href="shop-details.html">
                        <img src="assets/img/product/product-4.jpg" alt="">
                     </a>
                  </div>
                  <div class="cartmini__content">
                     <h5><a href="shop-details.html">Tommy Hilfiger Women’s Jaden</a></h5>
                     <div class="cartmini__price-wrapper">
                        <span class="cartmini__price">$46.00</span>
                        <span class="cartmini__quantity">x2</span>
                     </div>
                  </div>
                  <button class="cartmini__del"><i class="fal fa-times"></i></button>
               </div>
               <div class="cartmini__widget-item">
                  <div class="cartmini__thumb">
                     <a href="shop-details.html">
                        <img src="assets/img/product/product-2.jpg" alt="">
                     </a>
                  </div>
                  <div class="cartmini__content">
                     <h5><a href="shop-details.html">Women's Essentials Convertible</a></h5>
                     <div class="cartmini__price-wrapper">
                        <span class="cartmini__price">$78.00</span>
                        <span class="cartmini__quantity">x1</span>
                     </div>
                  </div>
                  <button class="cartmini__del"><i class="fal fa-times"></i></button>
               </div>
               <div class="cartmini__widget-item">
                  <div class="cartmini__thumb">
                     <a href="shop-details.html">
                        <img src="assets/img/product/product-3.jpg" alt="">
                     </a>
                  </div>
                  <div class="cartmini__content">
                     <h5><a href="shop-details.html">Calvin Klein Gabrianna Novelty</a></h5>
                     <div class="cartmini__price-wrapper">
                        <span class="cartmini__price">$98.00</span>
                        <span class="cartmini__quantity">x3</span>
                     </div>
                  </div>
                  <button class="cartmini__del"><i class="fal fa-times"></i></button>
               </div>
            </div>
            <!-- for wp -->
            <!-- if no item in cart -->
            <div class="cartmini__empty text-center d-none">
               <img src="assets/img/product/cart/empty-cart.png" alt="">
               <p>Your Cart is empty</p>
               <a href="shop.html" class="tp-btn">Go to Shop</a>
            </div>
         </div>
         <div class="cartmini__checkout">
            <div class="cartmini__checkout-title mb-30">
               <h4>Subtotal:</h4>
               <span>$113.00</span>
            </div>
            <div class="cartmini__checkout-btn">
               <a href="cart.html" class="tp-btn justify-content-center mb-10 w-100"> view cart</a>
               <a href="checkout.html" class="tp-btn justify-content-center tp-btn-border w-100">checkout</a>
            </div>
         </div>
      </div>
   </div>
   <!-- cart mini area end -->

  <?php get_template_part('template-parts/headers/header-1');?>

  
   <main>
