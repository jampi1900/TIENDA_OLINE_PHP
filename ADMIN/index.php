<?php
//Saliendo de la carpeta y entrando a config para la conexcion y agarrado las propiedades
include('../config/conex.php');
include('layout/parte_1.php');


?>


<body>
  <div id="global-loader">
    <div class="whirly-loader"> </div>
  </div>

  <div class="main-wrapper">

    <?php include('layout/parte_3.php'); ?>






    <!--Comienzo de index-->


    <div class="page-wrapper">
      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="dash-widget">
              <div class="dash-widgetimg">
                <span><img src="assets/img/icons/dash1.svg" alt="img" /></span>
              </div>
              <div class="dash-widgetcontent">
                <h5>
                  $<span class="counters" data-count="307144.00">$307,144.00</span>
                </h5>
                <h6>Total de Ventas</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="dash-widget dash1">
              <div class="dash-widgetimg">
                <span><img src="assets/img/icons/dash2.svg" alt="img" /></span>
              </div>
              <div class="dash-widgetcontent">
                <h5>
                  $<span class="counters" data-count="4385.00">$4,385.00</span>
                </h5>
                <h6>Total Sales Due</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="dash-widget dash2">
              <div class="dash-widgetimg">
                <span><img src="assets/img/icons/dash3.svg" alt="img" /></span>
              </div>
              <div class="dash-widgetcontent">
                <h5>
                  $<span class="counters" data-count="385656.50">385,656.50</span>
                </h5>
                <h6>Total Sale Amount</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="dash-widget dash3">
              <div class="dash-widgetimg">
                <span><img src="assets/img/icons/dash4.svg" alt="img" /></span>
              </div>
              <div class="dash-widgetcontent">
                <h5>
                  $<span class="counters" data-count="40000.00">400.00</span>
                </h5>
                <h6>Total Sale Amount</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count">
              <div class="dash-counts">
                <h4>100</h4>
                <h5>Ordenes</h5>
              </div>
              <div class="dash-imgs">
                <i data-feather="user"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count das1">
              <div class="dash-counts">
                <h4>100</h4>
                <h5>Productos</h5>
              </div>
              <div class="dash-imgs">
                <i data-feather="user-check"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count das2">
              <div class="dash-counts">
                <h4>100</h4>
                <h5>Purchase Invoice</h5>
              </div>
              <div class="dash-imgs">
                <i data-feather="file-text"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count das3">
              <div class="dash-counts">
                <h4>105</h4>
                <h5>Sales Invoice</h5>
              </div>
              <div class="dash-imgs">
                <i data-feather="file"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-7 col-sm-12 col-12 d-flex">
            <div class="card flex-fill">
              <div
                class="card-header pb-0 d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Compra y Ventas</h5>
                <div class="graph-sets">
                  <ul>
                    <li>
                      <span>Ventas</span>
                    </li>

                    <li>
                      <span>Compras</span>
                    </li>
                  </ul>

                  <div class="dropdown">
                    <button
                      class="btn btn-white btn-sm dropdown-toggle"
                      type="button"
                      id="dropdownMenuButton"
                      data-bs-toggle="dropdown"
                      aria-expanded="false">
                      2024
                      <img
                        src="assets/img/icons/dropdown.svg"
                        alt="img"
                        class="ms-2" />
                    </button>

                    <ul
                      class="dropdown-menu"
                      aria-labelledby="dropdownMenuButton">
                      <li>
                        <a href="javascript:void(0);" class="dropdown-item">2024</a>
                      </li>

                      <li>
                        <a href="javascript:void(0);" class="dropdown-item">2023</a>
                      </li>

                      <li>
                        <a href="javascript:void(0);" class="dropdown-item">2022</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div id="sales_charts"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-sm-12 col-12 d-flex">
            <div class="card flex-fill">
              <div
                class="card-header pb-0 d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">
                  Productos Agregados Recientemente
                </h4>
                <div class="dropdown">
                  <a
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    class="dropset">
                    <i class="fa fa-ellipsis-v"></i>
                  </a>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton">
                    <li>
                      <a href="productlist.html" class="dropdown-item">Product List</a>
                    </li>
                    <li>
                      <a href="addproduct.html" class="dropdown-item">Product Add</a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card-body">
                <div class="table-responsive dataview">
                  <table class="table datatable">
                    <thead>
                      <tr>
                        <th>N°</th>
                        <th>Productos</th>
                        <th>Precio</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td class="productimgname">
                          <a href="productlist.html" class="product-img">
                            <img
                              src="assets/img/product/product22.jpg"
                              alt="product" />
                          </a>
                          <a href="productlist.html">Apple Earpods</a>
                        </td>
                        <td>$891.2</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td class="productimgname">
                          <a href="productlist.html" class="product-img">
                            <img
                              src="assets/img/product/product23.jpg"
                              alt="product" />
                          </a>
                          <a href="productlist.html">iPhone 11</a>
                        </td>
                        <td>$668.51</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td class="productimgname">
                          <a href="productlist.html" class="product-img">
                            <img
                              src="assets/img/product/product24.jpg"
                              alt="product" />
                          </a>
                          <a href="productlist.html">samsung</a>
                        </td>
                        <td>$522.29</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td class="productimgname">
                          <a href="productlist.html" class="product-img">
                            <img
                              src="assets/img/product/product6.jpg"
                              alt="product" />
                          </a>
                          <a href="productlist.html">Macbook Pro</a>
                        </td>
                        <td>$291.01</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="card mb-0">
          <div class="card-body">
            <h4 class="card-title">Productos mas Vendidos</h4>
            <div class="table-responsive dataview">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Codigo Producto</th>
                    <th>Nombre Producto</th>
                    <th>Marca</th>
                    <th>Categoria</th>
                    <th>Cantidad Vendida</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>1</td>
                    <td><a href="javascript:void(0);">IT0001</a></td>
                    <td class="productimgname">
                      <a class="product-img" href="productlist.html">
                        <img
                          src="assets/img/product/product2.jpg"
                          alt="product" />
                      </a>
                      <a href="productlist.html">Orange</a>
                    </td>
                    <td>N/D</td>
                    <td>Fruits</td>
                    <td>120</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><a href="javascript:void(0);">IT0002</a></td>
                    <td class="productimgname">
                      <a class="product-img" href="productlist.html">
                        <img
                          src="assets/img/product/product3.jpg"
                          alt="product" />
                      </a>
                      <a href="productlist.html">Pineapple</a>
                    </td>
                    <td>N/D</td>
                    <td>Fruits</td>
                    <td>250</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><a href="javascript:void(0);">IT0003</a></td>
                    <td class="productimgname">
                      <a class="product-img" href="productlist.html">
                        <img
                          src="assets/img/product/product4.jpg"
                          alt="product" />
                      </a>
                      <a href="productlist.html">Stawberry</a>
                    </td>
                    <td>N/D</td>
                    <td>Fruits</td>
                    <td>190</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><a href="javascript:void(0);">IT0004</a></td>
                    <td class="productimgname">
                      <a class="product-img" href="productlist.html">
                        <img
                          src="assets/img/product/product5.jpg"
                          alt="product" />
                      </a>
                      <a href="productlist.html">Avocat</a>
                    </td>
                    <td>N/D</td>
                    <td>Fruits</td>
                    <td>100</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div><!---fin de index--->










  </div>

  <?php include('layout/parte_2.php') ?>

</body>

</html>

<!--chif alt f -->