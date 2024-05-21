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
            <?php
            if (isset($_SESSION["id"])) {
                echo '<li class="nav-item"><a class="nav-link" href="logout.php">';
                echo '<i class="fas fa-user me-1 text-gray fw-normal"></i>Logout</a></li>';  
            }
            ?>
        </ul>
    </div>
</nav>