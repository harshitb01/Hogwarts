<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="profile.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> Shopping Cart
            </h3>
        </a>
        <ul id="navbar">
                <!-- <div style="float:left" class="navHeading">Hogwarts Hub</div> -->
                <li><a href="">LOGIN</a></li>
                <li><a href="">DIAGON ALLEY</a></li>
                <!-- <li><a href="table.html">MEET OUR STAR CAST</a></li> -->
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="" class="btnLogout glyphicon-log-out" style="float:right">LOGOUT</a></li>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> <label for="px-5 cart" class="cartName">Cart</label>
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        } else {
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }
                        ?>
                    </h5>
                </a>
            </div>
        </div>
    </nav>
</header>