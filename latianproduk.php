<?php
include "config/config.php";

$query = "select * from produk";
$hasil = mysqli_query($is_connect, $query);

// if (isset($_POST["productForm"])) {
//   $_SESSION['pro'] = $_POST['productID'];
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="vendor/glightbox/css/glightbox.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="img/favicon.png">
</head>

<body>
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
                                    <li class="list-inline-item m-0 p-0"><a href="latiancart.php?id=<?= $result['id']?>" href="latianprosescart.php?id=<?= $result['id']?>" class="btn btn-sm btn-dark ilhamG"
                                            data-tambah-id="<?php echo $result['id'] ?>">Add to cart</a></li>
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

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <!-- <script>
      document.addEventListener("DOMContentLoaded", function () {
        const btnAddToCart = document.querySelectorAll('.ilhamG');

        btnAddToCart.forEach(button => {
          button.addEventListener('click', function (event) {
            event.preventDefault();

            const produkId = this.dataset.tambahId;

            fetch('latianprosescart.php', {
              method: 'POST',
              headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
              },
              body: `produkId=${produkId}`
            })
              .then(response => response.json())
              .then(data => {
                if (data.status === 'success') {
                  console.log('Produk berhasil ditambahkan ke keranjang:', data.produkId);
                  console.log(data.message); // Log pesan sukses
                } else {
                  console.error(data.message); // Log pesan error dari server
                }
              })
              .catch(error => {
                console.log("gagal megirim"); // Log pesan kesalahan
              });
          });
        });
      });


    </script> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</html>