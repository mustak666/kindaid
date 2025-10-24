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

  <?php kindaid_header();?>

  
   <main>
