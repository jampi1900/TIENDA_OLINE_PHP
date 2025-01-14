<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Primer Ecommer</title>

    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include ('../layout/Parte_001.php'); ?>


  </head>

  
  <!-- Body-->
  <body>
  

    <!-- Page loading spinner-->
    <div class="cs-page-loading active">
      <div class="cs-page-loading-inner">
        <div class="cs-page-spinner"></div><span>Loading...</span>
      </div>
    </div>

    <!-- Page wrapper for sticky footer -->
    <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="cs-page-wrapper">






  
      <!-- Page content -->
      <section class="container pt-3 pt-md-4 pb-3 pb-sm-4 pb-lg-5 mb-4">
        <div class="row">

          <!-- Checkout content -->
          <div class="col-lg-8 pr-lg-6">
            <div class="d-flex align-items-center justify-content-between pb-2 mb-4">
              <h1 class="mb-0">Checkout</h1>
              <a href="shop-catalog.html"><strong>Back to shopping</strong></a>
            </div>

            <!-- Alert -->
            <div class="alert alert-info mb-4" role="alert">
              <div class="media align-items-center">
                <i class="cxi-profile lead mr-3"></i>
                <div class="media-body">
                  Already have an account?&nbsp;&nbsp;<a href="#modal-signin" class="alert-link" data-toggle="modal" data-view="#modal-signin-view">Sign in</a>&nbsp;&nbsp;for faster checkout experience.
                </div>
              </div>
            </div>

            <hr class="border-top-0 border-bottom pt-2 mb-4">

            <!-- Order review -->
            <h2 class="h4 mb-4">1. Order Review</h2>
            <div class="bg-secondary rounded mb-5">
              <!-- Item -->
              <div class="media px-2 px-sm-4 py-4 border-bottom">
                <a href="shop-single.html" style="min-width: 80px;">
                  <img src="../../assets/img/ecommerce/cart/01.png" width="80" alt="Product thumb">
                </a>
                <div class="media-body w-100 pl-3">
                  <div class="d-sm-flex">
                    <div class="pr-sm-3 w-100" style="max-width: 16rem;">
                      <h3 class="font-size-sm mb-3">
                        <a href="shop-single.html" class="nav-link font-weight-bold">Basic hooded sweatshirt in pink</a>
                      </h3>
                      <ul class="list-unstyled font-size-xs mt-n2 mb-2">
                        <li class="mb-0"><span class="text-muted">Color:</span> Pink</li>
                        <li class="mb-0"><span class="text-muted">Size:</span> S</li>
                      </ul>
                    </div>
                    <div class="d-flex pr-sm-3">
                      <input type="number" class="form-control form-control-sm bg-light mr-3" style="width: 4.5rem;" value="1">
                      <div class="text-nowrap pt-2"><strong class="text-danger">$15.00</strong> <s class="font-size-xs text-muted">$31.00</s></div>
                    </div>
                    <div class="d-flex align-items-center flex-sm-column text-sm-center ml-sm-auto pt-3 pt-sm-0">
                      <button class="btn btn-outline-primary btn-sm mr-2 mr-sm-0">Delete</button>
                      <button class="btn btn-link btn-sm text-decoration-none pt-0 pt-sm-2 px-0 pb-0 mt-0 mt-sm-1">
                        Move to
                        <i class="cxi-heart ml-1"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Item -->
              <div class="media px-2 px-sm-4 py-4 border-bottom">
                <a href="shop-single.html" style="min-width: 80px;">
                  <img src="../../assets/img/ecommerce/cart/02.png" width="80" alt="Product thumb">
                </a>
                <div class="media-body w-100 pl-3">
                  <div class="d-sm-flex">
                    <div class="pr-sm-3 w-100" style="max-width: 16rem;">
                      <h3 class="font-size-sm mb-3">
                        <a href="shop-single.html" class="nav-link font-weight-bold">Black and white sport cap</a>
                      </h3>
                    </div>
                    <div class="d-flex pr-sm-3">
                      <input type="number" class="form-control form-control-sm bg-light mr-3" style="width: 4.5rem;" value="1">
                      <div class="text-nowrap pt-2"><strong>$18.15</strong></div>
                    </div>
                    <div class="d-flex align-items-center flex-sm-column text-sm-center ml-sm-auto pt-3 pt-sm-0">
                      <button class="btn btn-outline-primary btn-sm mr-2 mr-sm-0">Delete</button>
                      <button class="btn btn-link btn-sm text-decoration-none pt-0 pt-sm-2 px-0 pb-0 mt-0 mt-sm-1">
                        Move to
                        <i class="cxi-heart ml-1"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Item -->
              <div class="media px-2 px-sm-4 py-4 border-bottom">
                <a href="shop-single.html" style="min-width: 80px;">
                  <img src="../../assets/img/ecommerce/cart/03.png" width="80" alt="Product thumb">
                </a>
                <div class="media-body w-100 pl-3">
                  <div class="d-sm-flex">
                    <div class="pr-sm-3 w-100" style="max-width: 16rem;">
                      <h3 class="font-size-sm mb-3">
                        <a href="shop-single.html" class="nav-link font-weight-bold">Mid-rise slim cropped fit jeans</a>
                      </h3>
                      <ul class="list-unstyled font-size-xs mt-n2 mb-2">
                        <li class="mb-0"><span class="text-muted">Size:</span> M</li>
                      </ul>
                    </div>
                    <div class="d-flex pr-sm-3">
                      <input type="number" class="form-control form-control-sm bg-light mr-3" style="width: 4.5rem;" value="1">
                      <div class="text-nowrap pt-2"><strong>$76.00</strong></div>
                    </div>
                    <div class="d-flex align-items-center flex-sm-column text-sm-center ml-sm-auto pt-3 pt-sm-0">
                      <button class="btn btn-outline-primary btn-sm mr-2 mr-sm-0">Delete</button>
                      <button class="btn btn-link btn-sm text-decoration-none pt-0 pt-sm-2 px-0 pb-0 mt-0 mt-sm-1">
                        Move to
                        <i class="cxi-heart ml-1"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Item -->
              <div class="media px-2 px-sm-4 py-4 border-bottom">
                <a href="shop-single.html" style="min-width: 80px;">
                  <img src="../../assets/img/ecommerce/cart/04.png" width="80" alt="Product thumb">
                </a>
                <div class="media-body w-100 pl-3">
                  <div class="d-sm-flex">
                    <div class="pr-sm-3 w-100" style="max-width: 16rem;">
                      <h3 class="font-size-sm mb-3">
                        <a href="shop-single.html" class="nav-link font-weight-bold">Men fashion gray shoes</a>
                      </h3>
                      <ul class="list-unstyled font-size-xs mt-n2 mb-2">
                        <li class="mb-0"><span class="text-muted">Color:</span> Gray</li>
                        <li class="mb-0"><span class="text-muted">Size:</span> 10.5</li>
                      </ul>
                    </div>
                    <div class="d-flex pr-sm-3">
                      <input type="number" class="form-control form-control-sm bg-light mr-3" style="width: 4.5rem;" value="1">
                      <div class="text-nowrap pt-2"><strong>$84.00</strong></div>
                    </div>
                    <div class="d-flex align-items-center flex-sm-column text-sm-center ml-sm-auto pt-3 pt-sm-0">
                      <button class="btn btn-outline-primary btn-sm mr-2 mr-sm-0">Delete</button>
                      <button class="btn btn-link btn-sm text-decoration-none pt-0 pt-sm-2 px-0 pb-0 mt-0 mt-sm-1">
                        Move to
                        <i class="cxi-heart ml-1"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="px-3 px-sm-4 py-4 text-right">
                <span class="text-muted">Subtotal:<strong class="text-dark font-size-lg ml-2">$198.65</strong></span>
              </div>
            </div>

            <!-- Adresses -->
            <h2 class="h4 mb-4">2. Shipping &amp; Billing Address</h2>
            <div class="row pb-3">
              <div class="col-sm-6 form-group">
                <label for="ch-fn">First Name</label>
                <input type="text" class="form-control form-control-lg" id="ch-fn" placeholder="Your first name">
              </div>
              <div class="col-sm-6 form-group">
                <label for="ch-ln">Last Name</label>
                <input type="text" class="form-control form-control-lg" id="ch-ln" placeholder="Your last name">
              </div>
              <div class="col-sm-6 form-group">
                <label for="ch-email">Email</label>
                <input type="email" class="form-control form-control-lg" id="ch-email" placeholder="Your email address">
              </div>
              <div class="col-sm-6 form-group">
                <label for="ch-phone">Phone</label>
                <input type="text" class="form-control form-control-lg" id="ch-phone" placeholder="Your phone number">
              </div>
              <div class="col-sm-6 form-group">
                <label for="ch-country">Country</label>
                <select id="ch-country" class="custom-select custom-select-lg">
                  <option value="" disabled selected>Choose country</option>
                  <option value="argentina">Australia</option>
                  <option value="brazil">Brazil</option>
                  <option value="belgium">Belgium</option>
                  <option value="france">France</option>
                  <option value="germany">Germany</option>
                  <option value="uk">United Kingdom</option>
                  <option value="usa">USA</option>
                </select>
              </div>
              <div class="col-sm-6 form-group">
                <label for="ch-city">City</label>
                <select id="ch-city" class="custom-select custom-select-lg">
                  <option value="" disabled selected>Choose city</option>
                  <option value="belgium">Brussels</option>
                  <option value="germany">Berlin</option>
                  <option value="uk">London</option>
                  <option value="argentina">Melbourne</option>
                  <option value="usa">New York</option>
                  <option value="france">Paris</option>
                  <option value="brazil">Rio de Janeiro</option>
                </select>
              </div>
              <div class="col-sm-6 form-group">
                <label for="ch-address">Address</label>
                <input type="text" class="form-control form-control-lg" id="ch-address" placeholder="Street, appartment...">
              </div>
              <div class="col-sm-6 form-group">
                <label for="ch-zip">ZIP Code</label>
                <input type="text" class="form-control form-control-lg" id="ch-zip" placeholder="ZIP code">
              </div>
              <div class="col-12 form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="same-details" checked>
                  <label for="same-details" class="custom-control-label">Billing and Shipping details are the same</label>
                </div>
              </div>
            </div>

            <hr class="mb-4 pb-2">

            <!-- Shipping -->
            <h2 class="h4 mb-4">3. Shipping Method</h2>
            <div class="custom-control custom-radio mb-3">
              <input type="radio" class="custom-control-input" id="courier" name="shipping" checked>
              <label for="courier" class="custom-control-label d-flex align-items-center">
                <span>
                  <strong class="d-block">Courier to your address</strong>
                  <span class="text-muted font-size-sm">Estimated date: November 9</span>
                </span>
                <span class="ml-auto">$25.00</span>
              </label>
            </div>
            <div class="custom-control custom-radio mb-3">
              <input type="radio" class="custom-control-input" id="store-pickup" name="shipping">
              <label for="store-pickup" class="custom-control-label d-flex align-items-center">
                <span>
                  <strong class="d-block">Pick up from store</strong>
                  <span class="text-muted font-size-sm">Pick up on November 8 from 12:00pm</span>
                </span>
                <span class="ml-auto">Free</span>
              </label>
            </div>
            <div class="custom-control custom-radio mb-3">
              <input type="radio" class="custom-control-input" id="ups" name="shipping">
              <label for="ups" class="custom-control-label d-flex align-items-center">
                <span>
                  <strong class="d-block">UPS Ground Shipping</strong>
                  <span class="text-muted font-size-sm">Up to one week</span>
                </span>
                <span class="ml-auto">$10.00</span>
              </label>
            </div>
            <div class="custom-control custom-radio mb-3">
              <input type="radio" class="custom-control-input" id="locker-pickup" name="shipping">
              <label for="locker-pickup" class="custom-control-label d-flex align-items-center">
                <span>
                  <strong class="d-block">Pick up at Createx Locker</strong>
                  <span class="text-muted font-size-sm">Pick up on November 8 from 12:00pm</span>
                </span>
                <span class="ml-auto">$8.50</span>
              </label>
            </div>
            <div class="custom-control custom-radio mb-3">
              <input type="radio" class="custom-control-input" id="global-export" name="shipping">
              <label for="global-export" class="custom-control-label d-flex align-items-center">
                <span>
                  <strong class="d-block">Createx Global Export</strong>
                  <span class="text-muted font-size-sm">3-4 days</span>
                </span>
                <span class="ml-auto">$15.00</span>
              </label>
            </div>

            <hr class="border-top-0 border-bottom pt-4 mb-4">

            <!-- Payment -->
            <h2 class="h4 pt-2 mb-4">4. Payment Method</h2>
            <div class="row pb-4">
              <div class="col-lg-7">
                <div class="accordion-alt" id="payment-methods">

                  <!-- Card: Credit card -->
                  <div class="card mb-3 px-4 py-3 border rounded box-shadow-sm">
                    <div class="card-header py-2">
                      <div class="accordion-heading custom-control custom-radio" data-toggle="collapse" data-target="#cc-card">
                        <input type="radio" class="custom-control-input" id="cc" name="payment" checked>
                        <label for="cc" class="custom-control-label d-flex align-items-center">
                          <strong class="d-block mr-3">Credit card</strong>
                          <img src="../../assets/img/ecommerce/checkout/cards.png" width="108" alt="Credit cards">
                        </label>
                      </div>
                    </div>
                    <div class="collapse show" id="cc-card" data-parent="#payment-methods">
                      <div class="card-body pt-3 pb-0">
                        <div class="form-group mb-3">
                          <label for="cc-number">Card number</label>
                          <input type="text" id="cc-number" class="form-control form-control-lg" data-format="card" placeholder="0000 0000 0000 0000">
                        </div>
                        <div class="d-flex">
                          <div class="form-group mb-3 mr-3">
                            <label for="cc-exp-date">Expiry date</label>
                            <input type="text" id="cc-exp-date" class="form-control form-control-lg" data-format="date" placeholder="mm/yy">
                          </div>
                          <div class="form-group mb-3">
                            <label for="cc-cvc">CVC</label>
                            <input type="text" id="cc-cvc" class="form-control form-control-lg" data-format="cvc" placeholder="000">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Card: PayPal -->
                  <div class="card mb-3 px-4 py-3 border rounded box-shadow-sm">
                    <div class="card-header py-2">
                      <div class="accordion-heading custom-control custom-radio" data-toggle="collapse" data-target="#paypal-card">
                        <input type="radio" class="custom-control-input" id="paypal" name="payment">
                        <label for="paypal" class="custom-control-label d-flex align-items-center">
                          <strong class="d-block mr-3">PayPal</strong>
                          <img src="../../assets/img/ecommerce/checkout/paypal-badge.png" width="48" alt="PayPal">
                        </label>
                      </div>
                    </div>
                    <div class="collapse" id="paypal-card" data-parent="#payment-methods">
                      <div class="card-body pt-3 pb-0">
                        <a href="#" class="d-inline-block mb-2" style="max-width: 300px;">
                          <img src="../../assets/img/ecommerce/checkout/paypal.png" alt="PayPal">
                        </a>
                        <a href="#" class="d-inline-block mb-2" style="max-width: 300px;">
                          <img src="../../assets/img/ecommerce/checkout/paypal-credit.png" alt="PayPal Credit">
                        </a>
                      </div>
                    </div>
                  </div>

                  <!-- Card: Cash -->
                  <div class="card mb-3 px-4 py-3 border rounded box-shadow-sm">
                    <div class="card-header py-2">
                      <div class="accordion-heading custom-control custom-radio" data-toggle="collapse" data-target="#cash-card">
                        <input type="radio" class="custom-control-input" id="cash" name="payment">
                        <label for="cash" class="custom-control-label">
                          <strong class="d-block mr-3">Cash on delivery</strong>
                        </label>
                      </div>
                    </div>
                    <div class="collapse" id="cash-card" data-parent="#payment-methods">
                      <div class="card-body pt-3 pb-0">
                        <p class="mb-2 text-muted">You have selected to pay with cash upon delivery.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <hr class="mb-4 pb-2">

            <!-- Additional info -->
            <h2 class="h4 mb-4">5. Additional Information (optional)</h2>
            <div class="form-group">
              <label for="ch-notes">Order notes</label>
              <textarea id="ch-notes" class="form-control form-control-lg" rows="5" placeholder="Notes about your order, e.g. special noted for delivery."></textarea>
            </div>
          </div>


          <!-- Order totals (sticky sidebar) -->
          <!-- For more sticky sidebar options visit https://abouolia.github.io/sticky-sidebar/#options -->
          <aside class="col-lg-4">
            <div class="sidebar-sticky" data-sidebar-sticky-options='{
              "topSpacing": 120,
              "minWidth": 991
            }'>
              <div class="sidebar-sticky-inner">
                <div class="form-group">
                  <label for="promo-code">Apply a promo code</label>
                  <div class="input-group input-group-lg">
                    <input type="text" id="promo-code" class="form-control" placeholder="Enter promo code">
                    <div class="input-group-append">
                      <button type="button" class="btn btn-primary">&nbsp;&nbsp;Apply&nbsp;&nbsp;</button>
                    </div>
                  </div>
                </div>
                <div class="bg-secondary rounded mb-4">
                  <div class="border-bottom p-4">
                    <h2 class="h4 mb-0">Order totals</h2>
                  </div>
                  <ul class="list-unstyled border-bottom mb-0 p-4">
                    <li class="d-flex justify-content-between mb-2">
                      <span class="font-weight-bold">Subtotal:</span>
                      <span class="font-weight-bold">$198.65</span>
                    </li>
                    <li class="d-flex justify-content-between mb-2">
                      <span>Shipping costs:</span>
                      <span>$25.00</span>
                    </li>
                    <li class="d-flex justify-content-between mb-2">
                      <span>Discount:</span>
                      <span>&mdash;</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <span>Estimated sales tax:</span>
                      <span>$6.35</span>
                    </li>
                  </ul>
                  <div class="d-flex justify-content-between p-4">
                    <span class="h5 mb-0">Order total:</span>
                    <span class="h5 mb-0">$230.00</span>
                  </div>
                </div>
                <button type="button" class="btn btn-primary btn-lg btn-block">Complete order</button>
              </div>
            </div>
          </aside>
        </div>
      </section>

    </main>


  

    <?php include ('../layout/Parte_002.php'); ?>
  </body>
</html>