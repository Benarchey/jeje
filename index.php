<?php
include "config/config.php";
session_start();
$query = "select * from produk";
$hasil = mysqli_query($is_connect, $query);

if (isset($_POST["productForm"])) {
  $_SESSION['pro'] = $_POST['productID'];
}
?>

<!DOCTYPE html>
<html>
<!-- Telo godok
telo godok
telogodok
telo Godok
TeloGodok-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JEJE | Ecommerce </title>
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

<body>
  <div class="page-holder">
    <header class="header bg-white">
      <div class="container px-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.php"><span
              class="fw-bold text-uppercase text-dark" style="font-size: 40px;">JEJE</span></a> <!-- JEJE -->
          <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
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
      </div>
    </header>
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
      <section class="hero pb-3 bg-cover bg-center d-flex align-items-center"
        style="background: url(img/hero-banner-alt.jpg)">
        <div class="container py-5">
          <div class="row px-4 px-lg-5">
            <div class="col-lg-6">
              <p class="text-muted small text-uppercase mb-2">AUTHENTIC LUXURY FASHION</p>
              <h1 class="h2 text-uppercase mb-3">20% off on new season</h1><a class="btn btn-dark"
                href="shop.php">Browse collections</a>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-5">
        <header class="text-center">
          <p class="small text-muted small text-uppercase mb-1">Carefully created collections</p>
          <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
          <?= $_SESSION['pro'] ?>
        </header>
        <div class="row">
          <div class="col-md-4"><a class="category-item" href="shop.php?id_category=3"><img class="img-fluid"
                src="img/cat-img-1.jpg" alt="" /><strong class="category-item-title">Clothes</strong></a>
          </div>
          <div class="col-md-4">
            <div>
              <a class="category-item mb-4" href="shop.php?id_category=2"><img class="img-fluid" src="img/cat-img-2.jpg"
                  alt="" /><strong class="category-item-title">Shoes</strong></a>
            </div>
            <div>
              <a class="category-item" href="shop.php?id_category=4"><img class="img-fluid" src="img/cat-img-3.jpg"
                  alt="" /><strong class="category-item-title">Watches</strong></a>
            </div>

          </div>
          <div class="col-md-4"><a class="category-item" href="shop.php?id_category=5"><img class="img-fluid"
                src="img/cat-img-4.jpg" alt="" /><strong class="category-item-title">Electronics</strong></a>
          </div>
        </div>
      </section>
      <section class="py-5">
        <header>
          <p class="small text-muted small text-uppercase mb-1">Top trending products</p>
          <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
        </header>
        <div class="row">
          <?php if (mysqli_num_rows($hasil) != 0) {
            while ($result = mysqli_fetch_assoc($hasil)) {
              ?>
              <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product text-center" data-produk-id="<?php echo $result['id'] ?>">
                  <div class="position-relative mb-3">
                    <div class="badge text-white bg-primary">Sale</div><a class="d-block" href="detail.php"><img
                        class="img-fluid w-100" src="img/product-2.jpg" alt="..."></a>
                    <div class="product-overlay">
                      <ul class="mb-0 list-inline">
                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i
                              class="far fa-heart"></i></a></li>
                        <!-- ini kontol -->
                        <form class="list-inline-item m-0 p-0" action="index.php" method="post" id="productForm">
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark ilhamG"
                              data-tambah-id="<?php echo $result['id'] ?>" href="#">Add to cart</a>
                          </li>
                          <input type="hidden" id="pruductID" name="productID" />
                        </form>
                        <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView"
                            data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <h6><a class="reset-anchor" href="detail.php"><?php echo $result['nama_produk']; ?></a></h6>
                  <p class="small text-muted"><?php echo $result['harga']; ?></p>
                </div>
              </div>
            <?php }
          } ?>
        </div>
      </section>

      <section class="py-5 bg-light">
        <div class="container">
          <div class="row text-center gy-3">
            <div class="col-lg-4">
              <div class="d-inline-block">
                <div class="d-flex align-items-end">
                  <svg class="svg-icon svg-icon-big svg-icon-light">
                    <use xlink:href="#delivery-time-1"> </use>
                  </svg>
                  <div class="text-start ms-3">
                    <h6 class="text-uppercase mb-1">Free shipping</h6>
                    <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="d-inline-block">
                <div class="d-flex align-items-end">
                  <svg class="svg-icon svg-icon-big svg-icon-light">
                    <use xlink:href="#helpline-24h-1"> </use>
                  </svg>
                  <div class="text-start ms-3">
                    <h6 class="text-uppercase mb-1">24 x 7 service</h6>
                    <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="d-inline-block">
                <div class="d-flex align-items-end">
                  <svg class="svg-icon svg-icon-big svg-icon-light">
                    <use xlink:href="#label-tag-1"> </use>
                  </svg>
                  <div class="text-start ms-3">
                    <h6 class="text-uppercase mb-1">Festivaloffers</h6>
                    <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-5">
        <div class="container p-0">
          <div class="row gy-3">
            <div class="col-lg-6">
              <h5 class="text-uppercase">Let's be friends!</h5>
              <p class="text-sm text-muted mb-0"></p>
            </div>
            <div class="col-lg-6">
              <form action="#">
                <div class="input-group">
                  <input class="form-control form-control-lg" type="email" placeholder="Enter your email address"
                    aria-describedby="button-addon2">
                  <button class="btn btn-dark" id="button-addon2" type="submit">Subscribe</button>
                </div>
              </form>
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
              <li><a class="footer-link" href="#!"></a></li>
              <li><a class="footer-link" href="https://www.instagram.com/_jee.jeee/">Instagram</a></li>
              <li><a class="footer-link" href="#!"></a></li>
              <li><a class="footer-link" href="#!"></a></li>
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
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="js/front.js"></script>
    <script>
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
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');

    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var products = document.querySelectorAll(".product");

        products.forEach(function (product) {
          var idProduk = product.dataset.produkId;

          product.addEventListener("click", function (event) {
            var data = { idProduk: idProduk };

            fetch("tambah_klik_produk.php", {
              method: "POST",
              headers: {
                "Content-Type": "application/json"
              },
              body: JSON.stringify(data)
            })
              .then(response => response.json())
              .then(result => {
                console.log(result.message);
                console.log(data);
                // Lakukan sesuatu setelah berhasil atau gagal
              })
              .catch(error => {
                console.error("Terjadi kesalahan:", error);
                // Tangani kesalahan jaringan atau permintaan
              });
          });
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const btnAddToCart = document.querySelectorAll('.ilhamG');

        let inputProductID = document.getElementById('productID')

        btnAddToCart.forEach(button => {
          button.addEventListener('click', function (event) {
            event.preventDefault();

            const produkId = this.dataset.tambahId; // Perbaikan di sini
            inputProductID.value = produkId

            inputProductID.onchange = function () => {

            }

            fetch('tambahKeranjang.php', {
              method: 'POST',
              headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
              },
              body: `produkId=${produkId}`
            })
              .then(response => response.json())
              .then(data => {
                if (data.status === 'success') {
                  console.log(data.message); // Log pesan sukses
                } else {
                  console.error(data.message); // Log pesan error dari server
                }
              })
              .catch(error => {
                console.log(error); // Log pesan kesalahan
              });
          });
        });
      });

    </script>

    <script>
      document.getElementById('pruductID').onchange = function () => {
        document.getElementById('productForm').submit()
      }
    </script>
    <SC <!-- tambahKeranjang -->
      <!-- Tambahkan jQuery jika belum ada -->

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </div>
</body>

</html>