
 <!-- Viewport-->
 <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon and Touch Icons-->
<link rel="apple-touch-icon" sizes="180x180" href="../assets/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon-16x16.png">
<link rel="manifest" href="../assets/img/site.webmanifest">
<link rel="mask-icon" color="#5bbad5" href="../assets/img/safari-pinned-tab.svg">
<meta name="msapplication-TileColor" content="#766df4">
<meta name="theme-color" content="#ffffff">

<!-- Vendor Styles-->
<link rel="stylesheet" media="screen" href="../assets/vendor/tiny-slider/dist/tiny-slider.css"/>

<!-- Main Theme Styles + Bootstrap-->
<link rel="stylesheet" media="screen" href="../assets/css/demo/ecommerce/theme.min.css">
<link rel="stylesheet" media="screen" href="../assets/css/demo/ecommerce/simplebar.min.css">
<link rel="stylesheet" media="screen" href="../assets/css/demo/ecommerce/nouislider.min.css">
<!-- Page loading styles-->


<style>
      .cs-page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .cs-page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .cs-page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .cs-page-loading.active > .cs-page-loading-inner {
        opacity: 1;
      }
      .cs-page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #787a80;
      }
      .cs-page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        background-color: #cfcfd1; 
        border-radius: 50%;
        opacity: 0;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        50% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
      @keyframes spinner {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        50% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
    </style>

    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          var preloader = document.querySelector('.cs-page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 1000);
        };
      })();
    </script>

    <!-- Demo switcher off-canvas toggle styles -->
    <style>
      .cs-demo-switcher {
        position: fixed;
        display: block;
        top: 50%;
        right: 1rem;
        z-index: 100;
      }
      .cs-demo-switcher-inner {
        width: 3rem;
        height: 3rem;
        border: 1px solid #e5e8ed;
        border-radius: 50%;
        background-color: #fff;
        color: #1e212c;
        font-size: 1.25rem;
        line-height: 3rem;
        text-align: center;
        text-decoration: none;
        box-shadow: 0px 10px 15px 0px rgba(30,33,44,0.10);
      }
    </style>







      <!-- Shopping cart off-canvas -->
      <div id="cart" class="cs-offcanvas cs-offcanvas-right">

        <!-- Header -->
        <div class="cs-offcanvas-cap align-items-center border-bottom">
          <h2 class="h5 mb-0">Tu carrito (4)</h2>
          <button class="close mr-n1" type="button" data-dismiss="offcanvas" aria-label="Close">
            <span class="h3 font-weight-normal mb-0" aria-hidden="true">&times;</span>
          </button>
        </div>

        <!-- Body -->
        <div class="cs-offcanvas-body">

          <!-- Item_1 -->
          <div class="media p-4 border-bottom mx-n4">
            <a href="shop-single.html" style="min-width: 80px;">
              <img src="../assets/img/ecommerce/cart/01.png" width="80" alt="Product thumb">
            </a>
            <div class="media-body pl-3">
              <div class="d-flex justify-content-between">
                <div class="pr-2">
                  <h3 class="font-size-sm mb-3">
                    <a href="shop-single.html" class="nav-link font-weight-bold">Polo Bronco Color Negro </a>
                  </h3>
                  <ul class="list-unstyled font-size-xs mt-n2 mb-2">
                    <li class="mb-0"><span class="text-muted">Color:</span> Negro</li>
                    <li class="mb-0"><span class="text-muted">Talla:</span> S</li>
                  </ul>
                  <div class="d-flex align-items-center">
                    <input type="number" class="form-control form-control-sm bg-light mr-3" style="width: 4.5rem;" value="1">
                    <div class="text-nowrap"><strong class="text-danger">$15.00</strong> <s class="font-size-xs text-muted">$31.00</s></div>
                  </div>
                  <button class="btn btn-link btn-sm text-decoration-none px-0 pb-0">
                    Move to
                    <i class="cxi-heart ml-1"></i>
                  </button>
                </div>
                <div class="nav-muted mr-n2">
                  <a href="#" class="nav-link px-2 mt-n2" data-toggle="tooltip" title="Remove"><i class="cxi-delete"></i></a>
                </div>
              </div>
            </div>
          </div>


            <!-- Item_2 -->
            <div class="media p-4 border-bottom mx-n4">
              <a href="shop-single.html" style="min-width: 80px;">
                <img src="../assets/img/ecommerce/cart/01.png" width="80" alt="Product thumb">
              </a>
              <div class="media-body pl-3">
                <div class="d-flex justify-content-between">
                  <div class="pr-2">
                    <h3 class="font-size-sm mb-3">
                      <a href="shop-single.html" class="nav-link font-weight-bold">Polo Bronco Color Negro </a>
                    </h3>
                    <ul class="list-unstyled font-size-xs mt-n2 mb-2">
                      <li class="mb-0"><span class="text-muted">Color:</span> Negro</li>
                      <li class="mb-0"><span class="text-muted">Talla:</span> S</li>
                    </ul>
                    <div class="d-flex align-items-center">
                      <input type="number" class="form-control form-control-sm bg-light mr-3" style="width: 4.5rem;" value="1">
                      <div class="text-nowrap"><strong class="text-danger">$15.00</strong> <s class="font-size-xs text-muted">$31.00</s></div>
                    </div>
                    <button class="btn btn-link btn-sm text-decoration-none px-0 pb-0">
                      Move to
                      <i class="cxi-heart ml-1"></i>
                    </button>
                  </div>
                  <div class="nav-muted mr-n2">
                    <a href="#" class="nav-link px-2 mt-n2" data-toggle="tooltip" title="Remove"><i class="cxi-delete"></i></a>
                  </div>
                </div>
              </div>
            </div>

               <!-- Item_3 -->
                 <div class="media p-4 border-bottom mx-n4">
                  <a href="shop-single.html" style="min-width: 80px;">
                    <img src="../assets/img/ecommerce/cart/01.png" width="80" alt="Product thumb">
                  </a>
                  <div class="media-body pl-3">
                    <div class="d-flex justify-content-between">
                      <div class="pr-2">
                        <h3 class="font-size-sm mb-3">
                          <a href="shop-single.html" class="nav-link font-weight-bold">Polo Bronco Color Negro </a>
                        </h3>
                        <ul class="list-unstyled font-size-xs mt-n2 mb-2">
                          <li class="mb-0"><span class="text-muted">Color:</span> Negro</li>
                          <li class="mb-0"><span class="text-muted">Talla:</span> S</li>
                        </ul>
                        <div class="d-flex align-items-center">
                          <input type="number" class="form-control form-control-sm bg-light mr-3" style="width: 4.5rem;" value="1">
                          <div class="text-nowrap"><strong class="text-danger">$15.00</strong> <s class="font-size-xs text-muted">$31.00</s></div>
                        </div>
                        <button class="btn btn-link btn-sm text-decoration-none px-0 pb-0">
                          Move to
                          <i class="cxi-heart ml-1"></i>
                        </button>
                      </div>
                      <div class="nav-muted mr-n2">
                        <a href="#" class="nav-link px-2 mt-n2" data-toggle="tooltip" title="Remove"><i class="cxi-delete"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
  





        
        </div>

        <!-- Footer -->
        <div class="cs-offcanvas-cap flex-column border-top">
          <div class="d-flex align-items-center justify-content-between mb-3 pb-1">
            <span class="text-muted mr-2">Subtotal:</span>
            <span class="h5 mb-0">S/.198.65</span>
          </div>
          <a href="checkout.html" class="btn btn-primary btn-lg btn-block">
            <i class="cxi-credit-card font-size-lg mt-n1 mr-1"></i>
            Confirmar
          </a>
        </div>
      </div>
      <!-- Fin Shopping cart off-canvas -->

      








      <!-- Header (Topbar + Navbar) -->
      <header class="cs-header">
        <!-- Navbar -->
        <div class="navbar navbar-expand-lg navbar-light bg-light navbar-sticky" data-fixed-element>
          <div class="container px-0 px-xl-3">
                  <!--Logo de La Empresa-->
                  <a href="index.html" class="navbar-brand order-lg-1 mr-0 pr-lg-3 mr-lg-4">
                    <img src="../assets/img/ecommerce/logo.svg" alt="Createx Logo" width="130">
                  </a>
                  <!--Fin del Logo-->

                  <!-- Buscador de Categorias o Productos -->
                  <div class="input-group-overlay ml-4 d-lg-block d-none order-lg-3" style="max-width: 21rem;">
                    <input class="form-control appended-form-control" type="text" placeholder="Buscador de Productos...">
                      <div class="input-group-append-overlay">
                        <span class="input-group-text"><i class="cxi-search lead align-middle"></i></span>
                      </div>
                  </div>


                <!-- Toolbar El corazon y Carrito de Compras-->
                <div class="d-flex align-items-center order-lg-3">
                  <ul class="nav nav-tools flex-nowrap">
                    
                    <li class="nav-item d-lg-block d-none mb-0">
                      <a href="account-wishlist.html" class="nav-tool">
                        <i class="cxi-heart nav-tool-icon"></i>
                        <span class="nav-tool-label">2</span>
                      </a>
                    </li>

                    <li class="divider-vertical mb-0 d-lg-block d-none"></li>
                    <li class="nav-item align-self-center mb-0">
                      <a href="#" class="nav-tool pr-lg-0" data-toggle="offcanvas" data-target="cart">
                        <i class="cxi-cart nav-tool-icon"></i>
                        <span class="badge badge-success align-middle mt-n1 ml-2 px-2 py-1 font-size-xs">1</span>
                      </a>
                    </li>


                    <li class="divider-vertical mb-0 d-lg-none d-block"></li>
                    <li class="nav-item mb-0">
                      <button class="navbar-toggler mt-n1 mr-n3" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    </li>
                  </ul>
                </div>

                 <!--FIN DEL CARRITO Y CORAZON-->



            <!-- Navbar collapse -->
            <nav class="collapse navbar-collapse order-lg-2" id="navbarCollapse">
              <!-- Search mobile -->
              <div class="input-group-overlay form-group mb-0 d-lg-none d-block">
                <input type="text" class="form-control prepended-form-control rounded-0 border-0" placeholder="Search for products...">
                <div class="input-group-prepend-overlay">
                  <span class="input-group-text">
                    <i class="cxi-search font-size-lg align-middle mt-n1"></i>
                  </span>
                </div>
              </div>


              <!-- Menu -->
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a href="index.html" class="nav-link active">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tienda</a>
                  <ul class="dropdown-menu">
                    <li><a href="shop-catalog.html" class="dropdown-item">Catalog with Filters</a></li>
                    <li><a href="shop-single.html" class="dropdown-item">Single Product</a></li>
                    <li><a href="checkout.html" class="dropdown-item">Checkout</a></li>
                  </ul>
                </li>
               
               
              </ul>
            </nav>
          </div>
        </div>
      </header>
       <!-- Fin Header (Topbar + Navbar) -->


<!--------------------------------------------------------------------------------------->

      <!-- Promo bar -->
      <section class="cs-promo-bar bg-primary py-2">
        <div class="container d-flex justify-content-center">
          <div class="cs-carousel cs-controls-inverse">
            <div class="cs-carousel-inner" data-carousel-options = '{"mode": "gallery", "nav": false}'>
              <div class="font-size-xs text-light px-2">
                <strong class="mr-1">Up to 70% Off.</strong>
                <a href="#" class="text-light">Shop our latest sale offers</a>
              </div>
              <div class="font-size-xs text-light px-2">
                <strong class="mr-1">Money back guarantee.</strong>
                <a href="#" class="text-light">Learn more</a>
              </div>
              <div class="font-size-xs text-light px-2">
                <strong class="mr-1">Friendly customer support.</strong>
                <a href="#" class="text-light">Contacto 24/7</a>
              </div>
            </div>
          </div>
        </div>
      </section>
     <!--Fin Promo bar -->

