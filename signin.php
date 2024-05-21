<?php

include "config/config.php";

if(isset($_POST["signin"])){
   $username = $_POST["username"];
   $password = $_POST["password"];  

   $sql = "insert into user (name, password) values ('$username', '$password')";

   if($is_connect->query($sql)){
    header('Location: login.php');
   }else{
    echo 'sign in failed';
    header('Location: signin.php');    
   }

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JEJE | Ecommerce</title>
    <meta name="description" content="">
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
        .card-body {
            display: flex;
            justify-content: center;
        }

        .card-header {
            text-align: center;
        }

        .navbar-brand {
            font-size: 2.5rem;
            font-weight: bold;
            color: black;
        }

        .d-flex {
            display: flex;
            align-items: center;
        }

        .mr-2 {
            margin-right: 0.5rem;
        }
    </style>
</head>

<body>
    <div class="page-holder">
        <header class="header bg-white">
            <div class="container px-lg-3">
                <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0">
                    <a class="navbar-brand" href="#"><span class="fw-bold text-uppercase text-dark">JEJE</span></a>
                    <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"></li>
                            <li class="nav-item"></li>
                            <li class="nav-item"></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-4" id="forms">
                        <div class="card-header">LOGIN</div>
                        <div class="card-body">
                            <form  action="signin.php" method="POST">
                                <div class="container">

                                    <div class="mb-3">
                                        <label class="form-label" for="exampleInputEmail1" name="username">Username</label>
                                        <input name="username" class="form-control" id="exampleInputEmail1" 
                                            aria-describedby="emailHelp">
                                        <div class="form-text" id="emailHelp">We'll never share your email with anyone
                                            else.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleInputPassword1" name="password">Password</label>
                                        <input name="password" class="form-control" id="exampleInputPassword1" type="password">
                                    </div>
                                    <button type='submit' class="btn btn-dark" name="signin">Sign In</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-dark text-white">
            <div class="container py-4">
                <div class="row py-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h6 class="text-uppercase mb-3">Customer services</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a class="footer-link" href="https://wa.me/62895377219504">Help &amp; Contact Us</a>
                            </li>
                            <li><a class="footer-link" href="https://wa.me/62895377219504">Returns &amp; Refunds</a>
                            </li>
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
    </div>

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>
</body>

</html>