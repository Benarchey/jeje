<?php session_start() ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bellow</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <link rel="stylesheet" href="../vendor/glightbox/css/glightbox.min.css">
  <link rel="stylesheet" href="../vendor/nouislider/nouislider.min.css">
  <link rel="stylesheet" href="../vendor/choices.js/public/assets/styles/choices.min.css">
  <link rel="stylesheet" href="../vendor/swiper/swiper-bundle.min.css">
  <link rel="stylesheet"
    href="../https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
  <link rel="stylesheet"
    href="../https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
  <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="shortcut icon" href="../img/favicon.png">
</head>

<body>
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
                <a class="nav-link" href="deleteProduk.php">Delete Product</a>
              </li>
            
            </ul>
            <ul class="navbar-nav ms-auto">
             <h2>
             <li class="nav-item">
                <a class="nav-link" href="user.php">Delete User</a>
              </li>
             </h2>
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
      <!-- HERO SECTION-->
      <section class="py-5 bg-light">
        <div class="container">
          <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
            <div class="col-lg-6">
              <h1 class="h3 mb-0">Add Product</h1>
            </div>
            <div class="col-lg-6 text-lg-end">
              <nav aria-label="breadcrumb">
                <?php


                include "../config/config.php";



                if (isset($_SESSION['id'])) {
                  $id = $_SESSION['id'];

                  $sql = "select * from user where id = $id";
                  $result = mysqli_query($is_connect, $sql);
                  if (mysqli_num_rows($result) > 0) {
                    while ($data = mysqli_fetch_assoc($result)) {

                      ?>
                      <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                        <li class="breadcrumb-item"><a class="text-dark" href="index.php"></a><?= $data['name'] ?></li>
                        <li class="breadcrumb-item active" aria-current="page">Admin</li>
                      <?php }
                  }
                } ?>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="py-5">

        <div class="row">
          <div class="col-lg-8 mb-4 mb-lg-9" style="width: 100%;">
            <!-- CART TABLE-->
            <div class="table-responsive mb-4">



              <form action="tambahProduk.php" method="POST" enctype="multipart/form-data">

                <table class="table text-nowrap">
                  <thead class="bg-light">
                    <tr>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Product</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Price</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Category</strong>
                      </th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Quantity</strong>
                      </th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Description</strong>
                      </th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Image</strong></th>

                    </tr>
                  </thead>

                  <tbody class="border-0">
                    <tr>
                      <td class="ps-0 py-3 border-light" scope="row">

                        <input  name="nama_produk" type="text" placeholder="Enter Product Name" />

                        </t>
                      <td class="ps-0 p-3 align-middle border-light">
                        <input style="height: 31px;" name="harga" type="number"  placeholder="Enter Product Price" />
                      </td>
                      <td class="p-3 align-middle border-light">
                        <select name="id_category" style="height: 31px;">
                          <option value="0">Choose Category</option>
                          <?php
                          include "config/config.php";

                          $sql = "select * from category";
                          $result = mysqli_query($is_connect, $sql);

                          if ($result->num_rows > 0) {
                            while ($data = mysqli_fetch_assoc($result)) {
                              ?>
                              <option value="<?= $data['id'] ?>"><?= $data['category'] ?></option>

                              <?php
                            }
                          }
                          ?>
                          <option value=""></option>
                        </select>
                      </td>
                      <td class="p-3 align-middle border-light">

                        <div class="quantity align-items-center justify-content-between border-light"
                          style="width: 35%; height: 20px;">
                         
                          <input name="pquantity" id="qty" class="form-control  form-control-sm"
                            style="border: 1px solid black; padding: 0px; height : 15px; width: 40px;" type="number"
                            value="0" />
                            
                         
                          


                        </div>

                      </td>
                      <td class="p-3 align-middle border-light">
                        <input name="description" type="text" placeholder="Enter Product Description" />
                      </td>
                      <td class="ps-0 py-3 border-light" scope="row">

                        <input type="file" id="fileInput" name="image" onchange="updateFileName()" style="display: none;" />
                        <label for="fileInput" id="fileInputLabel"
                          style="cursor: pointer; border: 1px solid black; padding: 5px;">Select Image</label>

                        <script>
                          function updateFileName() {
                            var input = document.getElementById('fileInput');
                            var label = document.getElementById('fileInputLabel');
                            var fileName = input.files[0].name;
                            label.innerHTML = fileName;
                          }
                        </script>



                      </td>


                    </tr>



                  </tbody>
                </table>

            </div>
            <!-- CART NAV-->
            <div class="bg-light" style="height: 100px; display: flex; justify-content: center; align-items: center;">
              <button class="bg-dark" type="submit" name="submit" style="color: white; width: 100px;">
                Submit
              </button>
            </div>
            </form>

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
              <li><a class="footer-link" href="https://wa.me/62895377219504"></a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h6 class="text-uppercase mb-3">Social media</h6>
            <ul class="list-unstyled mb-0">
              <li><a class="footer-link" href="https://wa.me/62895377219504"></a></li>
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
              <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../vendor/nouislider/nouislider.min.js"></script>
    <script src="../vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="../js/front.js"></script>
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
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </div>
</body>

</html>