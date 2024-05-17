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
    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" data-produk-ids="1" href="uji.php">Add to
            cart</a>
    </li>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const btnAddToCart = document.querySelectorAll('.btn-dark');

            btnAddToCart.forEach(button => {
                button.addEventListener('click', function (event) {
                    event.preventDefault();

                    const productId = this.dataset.produkids;
                    console.log('Product ID:', productId); // Log untuk memastikan productId benar

                    fetch('tambahKeranjang.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: `produkId=${productId}`
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
                            console.error('Request error:', error);
                        });
                });
            });
        });
    </script>


</body>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="js/front.js"></script>
</html>