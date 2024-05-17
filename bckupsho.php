<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JEJE | Ecommerce</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <link rel="stylesheet" href="vendor/glightbox/css/glightbox.min.css">
  <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
  <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
  <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="shortcut icon" href="img/favicon.png">
</head>

<>
  <div class="page-holder">
    <header class="header bg-white">
      <div class="container px-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.php"><span
              class="fw-bold text-uppercase text-dark">JEJE</span></a>
          <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="shop.php">Shop</a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a
                    class="dropdown-item border-0 transition-link" href="index.php">Homepage</a><a
                    class="dropdown-item border-0 transition-link" href="shop.php">Category</a><a
                    class="dropdown-item border-0 transition-link" href="detail.php">Product detail</a><a
                    class="dropdown-item border-0 transition-link" href="cart.php">Shopping cart</a><a
                    class="dropdown-item border-0 transition-link" href=""></a></div>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link" href="cart.php"> <i
                    class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small
                    class="text-gray fw-normal">(2)</small></a></li>
              <li class="nav-item"><a class="nav-link" href="#!"> <i class="far fa-heart me-1"></i><small
                    class="text-gray fw-normal"> (0)</small></a></li>
              <li class="nav-item"><a class="nav-link" href="login.php"> <i
                    class="fas fa-user me-1 text-gray fw-normal"></i>Login</a></li>
            </ul>
          </div>
        </nav>
      </div>`
    </header>
    <!--  Modal -->
    <div class="modal fade" id="productView" tabindex="-1">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content overflow-hidden border-0">
          <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button"
            data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-body p-0">
            <div class="row align-items-stretch">
              <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center"
                  style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-gallery="gallery1"
                  data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg"
                  data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                  href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
              </div>
              <div class="col-lg-6">
                <div class="p-4 my-md-4">
                  <ul class="list-inline mb-2">
                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                  </ul>
                  <h2 class="h4">Red digital smartwatch</h2>
                  <p class="text-muted">$250</p>
                  <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper
                    leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur
                    ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                  <div class="row align-items-stretch mb-4 gx-0">
                    <div class="col-sm-7">
                      <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span
                          class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                        <div class="quantity">
                          <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                          <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                          <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-5"><a
                        class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                        href="cart.php">Add to cart</a></div>
                  </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                      class="far fa-heart me-2"></i>Add to wish list</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- HERO SECTION-->
      <section class="py-5 bg-light">
        <div class="container">
          <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
            <div class="col-lg-6">
              <h1 class="h2 text-uppercase mb-0">Shop</h1>
            </div>
            <div class="col-lg-6 text-lg-end">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                  <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Shop</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="py-5">
        <div class="container p-0">
          <div class="row">
            <!-- SHOP SIDEBAR-->
            <div class="col-lg-3 order-2 order-lg-1">
              <h5 class="text-uppercase mb-4">Categories</h5>
              <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase fw-bold">Fashion &amp;
                  Acc</strong></div>
              <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal mb-5">
                <li class="mb-2"><a class="reset-anchor" href="shop.php">Shoes</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Clothes</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Watches</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Bags</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#">Electronics</a></li>
              </ul>
              <h6 class="text-uppercase mb-4">Price range</h6>
              <div class="price-range pt-4 mb-5">
                <div id="range"></div>
                <div class="row pt-2">
                  <div class="col-6"><strong class="small fw-bold text-uppercase">From</strong></div>
                  <div class="col-6 text-end"><strong class="small fw-bold text-uppercase">To</strong></div>
                </div>
              </div>
              <h6 class="text-uppercase mb-3">Show only</h6>
              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" id="checkbox_1">
                <label class="form-check-label" for="checkbox_1">Returns Accepted</label>
              </div>
              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" id="checkbox_2">
                <label class="form-check-label" for="checkbox_2">Returns Accepted</label>
              </div>
              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" id="checkbox_3">
                <label class="form-check-label" for="checkbox_3">Completed Items</label>
              </div>
              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" id="checkbox_4">
                <label class="form-check-label" for="checkbox_4">Sold Items</label>
              </div>
              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" id="checkbox_5">
                <label class="form-check-label" for="checkbox_5">Deals &amp; Savings</label>
              </div>
              <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" id="checkbox_6">
                <label class="form-check-label" for="checkbox_6">Authorized Seller</label>
              </div>
            </div>
            <!-- SHOP LISTING-->
            <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
              <div class="row mb-3 align-items-center">
                <div class="col-lg-6 mb-2 mb-lg-0">
                  <p class="text-sm text-muted mb-0">Showing 1–12 of 53 results</p>
                </div>

                <head>
                  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <title>Product Sorting</title>
                  <!-- Tambahkan link CSS atau file Bootstrap jika diperlukan -->
                </head>


                <div class="col-lg-6">
                  <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                    <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#"><i
                          class="fas fa-th-large"></i></a></li>
                    <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#"><i
                          class="fas fa-th"></i></a></li>
                    <li class="list-inline-item">
                      <select id="sortSelect" class="selectpicker" data-customclass="form-control form-control-sm">
                        <option value="">Sort By</option>
                        <option value="popularity">Popularity</option>
                        <option value="low-high">Price: Low to High</option>
                        <option value="high-low">Price: High to Low</option>
                      </select>
                    </li>
                  </ul>
                </div>

                <!-- Container untuk menampilkan produk -->




              </div>
              <div id="kontenProduk"></div>
              <div class="row">

                <!-- PRODUCT-->
                <!--<div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white bg-"></div><a class="d-block" href="detail.php"><img
                            class="img-fluid w-100" src="img/product-1.jpg" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i
                                  class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to
                                cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView"
                                data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="detail.php"><?php # echo $row["nama_produk"]; ?></a></h6>
                      <p class="small text-muted"><?php # echo $row["harga"]; ?></p>
                    </div>
                  </div>-->
                <?php include "tampilkanProduk.php"; ?>

                <!-- PAGINATION-->
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center justify-content-lg-end">
                    <li class="page-item mx-1"><a class="page-link" href="#!" aria-label="Previous"><span
                          aria-hidden="true">«</span></a></li>
                    <li class="page-item mx-1 active"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item mx-1"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item mx-1"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item ms-1"><a class="page-link" href="#!" aria-label="Next"><span
                          aria-hidden="true">»</span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
      </section>
    </div>
    <footer class="bg-dark text-white">
      <div class="container py-4">
        <div class="row py-5">
          <div class="col-md-4 mb-3 mb-md-0">
            <h6 class="text-uppercase mb-3">Customer services</h6>
            <ul class="list-unstyled mb-0">
              <li><a class="footer-link" href="https://wa.me/62895377219504">Help &amp; Contact Us</a></li>
              <li><a class="footer-link" href="https://wa.me/62895377219504">Returns &amp; Refunds</a></li>
              <li><a class="footer-link" href="https://wa.me/62895377219504">Online Stores</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h6 class="text-uppercase mb-3">Social media</h6>
            <ul class="list-unstyled mb-0">
              <li><a class="footer-link" href="https://wa.me/62895377219504"></a></li>
              <li><a class="footer-link" href="https://www.instagram.com/_jee.jeee/">Instagram</a></li>
              <li><a class="footer-link" href="https://wa.me/62895377219504"></a></li>
              <li><a class="footer-link" href="https://wa.me/62895377219504"></a></li>
            </ul>
          </div>
        </div>
        <div class="border-top pt-4" style="border-color: #1d1d1d !important">
          <div class="row">
            <div class="col-md-6 text-center text-md-start">
              <p class="small text-muted mb-0">&copy; 2024 All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
              <p class="small text-muted mb-0"><a class="text-white reset-anchor"
                  href="https://www.instagram.com/_jee.jeee/">JEJE COMPANY</a></p>
              <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="js/front.js"></script>
    <!-- Nouislider Config-->
    <script>
      var range = document.getElementById('range');
      noUiSlider.create(range, {
        range: {
          'min': 0,
          'max': 2000
        },
        step: 5,
        start: [100, 1000],
        margin: 300,
        connect: true,
        direction: 'ltr',
        orientation: 'horizontal',
        behaviour: 'tap-drag',
        tooltips: true,
        format: {
          to: function (value) {
            return '$' + value;
          },
          from: function (value) {
            return value.replace('', '');
          }
        }
      });

    </script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {

        var ajax = new XMLHttpRequest();
        ajax.open("GET", path, true);
        ajax.send();
        ajax.onload = function (e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
        }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');

    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#sortSelect').change(function () {
          var sortBy = $(this).val(); // Mendapatkan nilai yang dipilih dari dropdown

          // Kirim permintaan ke server PHP dengan nilai yang dipilih
          $.ajax({
            type: 'POST',
            url: 'tampilkanProduk.php', // URL file PHP yang menangani permintaan
            data: { sortBy: sortBy }, // Mengirim nilai yang dipilih ke PHP dengan nama 'sortBy'
            success: function (response) {
              // Memasukkan respons dari server ke dalam div #kontenProduk
              $('#kontenProduk').html(response);
            },
            error: function () {
              // Tangani kesalahan jika terjadi saat mengirim permintaan AJAX
              alert('Terjadi kesalahan. Silakan coba lagi.');
            }
          });
        });
      });
    </script>

    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </div>
  </body>

</html>