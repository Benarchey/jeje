<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="img/favicon.png">
    <style>
        /* .product img {
            width: 100%;
            height: auto;
        } */

        #produkContainer {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 0 -25px;
            /* Menambahkan margin negatif untuk menyesuaikan jarak antara produk */
            /* Jarakkan produk secara horizontal */
        }

        .product {
            flex-basis: calc(33.33% - 50px);
            margin: 0 10px;
            /* Atur jarak atas dan bawah menjadi 10% */
        }
    </style>
</head>

<body>

    <div class="container">
        <div id="produkContainer">
        <?php
            // Buat koneksi ke database
            include "config/config.php";
            // Ambil nilai sortBy dari permintaan POST
            if (isset($_POST['sortBy']) && isset($_GET['id_category'])) {
                $id = $_GET['id_category'];
                $sortBy = $_POST['sortBy'];
                var_dump($id);
                
                // Query untuk mengambil data produk dari database berdasarkan sortBy
                $sql = "";

                if ($sortBy == 'popularity') {
                    // Jika sortBy adalah popularitas, sesuaikan query dengan kolom yang sesuai dengan popularitas di tabel database
                    $sql .= "SELECT * FROM produk where id_category = '$id' ORDER BY jumlah_klik DESC";
                } elseif ($sortBy == 'low-high') {
                    // Jika sortBy adalah harga rendah ke tinggi, sesuaikan query dengan kolom harga rendah ke tinggi di tabel database
                    $sql .= "SELECT * FROM produk where id_category = '$id' ORDER BY harga ASC";
                } elseif ($sortBy == 'high-low') {
                    // Jika sortBy adalah harga tinggi ke rendah, sesuaikan query dengan kolom harga tinggi ke rendah di tabel database
                    $sql .= "SELECT * FROM produk where id_category = '$id' ORDER BY harga DESC";
                } else {
                    // Jika sortBy tidak valid atau tidak ada yang dipilih, beri nilai kosong ke $sql untuk memastikan tidak ada produk yang ditampilkan
                    $sql = "";
                }

                // Eksekusi query
                if (!empty($sql)) {
                    $result = $is_connect->query($sql);
                    if ($result->num_rows > 0) {
                        // Output data dari setiap baris
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product text-center">
                                    <div class="mb-3 position-relative">
                                        <div class="badge text-white bg-"></div><a class="d-block" href="detail.php"><img
                                                class="img-fluid w-100" src="img/<?php echo $row['image'] ?>" alt="..."></a>
                                        <div class="product-overlay">
                                            <ul class="mb-0 list-inline">
                                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i
                                                            class="far fa-heart"></i></a></li>
                                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add
                                                        to cart</a></li>
                                                <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark"
                                                        href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h6> <a class="reset-anchor" href="detail.php"><?php echo $row['nama_produk'] ?></a></h6>
                                    <p class="small text-muted"><?php echo $row['harga'] ?></p>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "Tidak ada produk yang ditemukan.";
                    }
                }
            }
            ?>
        </div>
    </div>

</body>

</html>  