<?php
include('session.php');
if (!isset($_SESSION['login_user'])) {
    header("location: index.php");
}
require_once('php/CreateDb.php');
require_once('./php/component.php');
$database = new CreateDb("Productdb", "Producttb");
if (isset($_POST['add'])) {
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if (in_array($_POST['product_id'], $item_array_id)) {
            echo '<script>alert("Product is already added in the cart..!")</script>';
            echo '<script>window.location = "index.php"</script>';
        } else {
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );
            $_SESSION['cart'][$count] = $item_array;
        }
    } else {
        $item_array = array(
            'product_id' => $_POST['product_id']
        );
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <div id="profile">
        <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
        <b id="logout"><a href="logout.php">Log Out</a></b>
    </div>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style-cart.css">
    <link rel="stylesheet" href="style-profile-foot.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <?php require_once("php/header.php"); ?>
    <section class="project-area">
        <div class="container">
            <div class="project-title pb-5">
                <h1 class="text-uppercase title-h1">Digon Alley</h1>
            </div>

            <div class="button-group">
                <button type="button" class="active" id="btn1" data-filter="*">All</button>
                <button type="button" data-filter=".gryffindor">Gryffindor</button>
                <button type="button" data-filter=".slytherin">Slytherin</button>
                <button type="button" data-filter=".ravenclaw">Ravenclaw</button>
                <button type="button" data-filter=".hufflepuff">Hufflepuff</button>
            </div>

            <div class="row grid">
                <div class="col-lg-4 col-md-6 col-sm-12 element-item slytherin">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="#bottom">
                                <img src="./Images/product1.png" alt="portfolio-1" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Minimul Desing</h4>
                            <span class="text-secondary">slytherin, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item gryffindor">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p2.jpg">
                                <img src="./Images/product2.png" alt="portfolio-2" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Paint Wall</h4>
                            <span class="text-secondary">Gryffindor, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item gryffindor">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p3.jpg">
                                <img src="./Images/product2.png" alt="portfolio-3" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Female light</h4>
                            <span class="text-secondary">Gryffindor, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item hufflepuff">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p4.jpg">
                                <img src="./Images/product3.png" alt="portfolio-4" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Fourth Air</h4>
                            <span class="text-secondary">hufflepuff, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item hufflepuff">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p5.jpg">
                                <img src="./Images/product4.png" alt="portfolio-5" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Muliple fown</h4>
                            <span class="text-secondary">hufflepuff, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item ravenclaw">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p6.jpg">
                                <img src="./Images/product1.png" alt="portfolio-6" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Together sign</h4>
                            <span class="text-secondary">ravenclaw, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item ravenclaw">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p7.jpg">
                                <img src="./Images/product2.png" alt="portfolio-7" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Green Heaven</h4>
                            <span class="text-secondary">ravenclaw, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p8.jpg">
                                <img src="./Images/product4.png" alt="portfolio-8" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Fly Male</h4>
                            <span class="text-secondary">Following, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item hufflepuff">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p9.jpg">
                                <img src="./Images/product1.png" alt="portfolio-9" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Camera Lens</h4>
                            <span class="text-secondary">hufflepuff, Portfolio</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container" id="bottom">
        <div class="row text-center py-5">
            <?php
            $result = $database->getData();
            while ($row = mysqli_fetch_assoc($result)) {
                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
            }
            ?>
        </div>
    </div>
    <!-- for using bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./bootstrap/isotope.min.js"></script>
    <script src="store.js"></script>
    <script src="jQuery.js"></script>
    <footer class="main-footer">
        <div class="container main-footer-container">
            <h3 class="band-name">The Gryffindor's Hub</h3>
            <div class="icon facebook">
                <div class="tooltip">Facebook</div>
                <span><a href="https://www.facebook.com/wizardingworld/"><i class="fab fa-facebook-f"></i></a></span>
            </div>

            <div class="icon twitter">
                <div class="tooltip">Twitter</div>
                <span><a href="https://twitter.com/wizardingworld?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a></span>
            </div>

            <div class="icon instagram">
                <div class="tooltip">Instagram</div>
                <span><a href="https://www.instagram.com/wizardingworld/?hl=en"><i class="fab fa-instagram"></i></a></span>
            </div>

            <div class="icon youtube">
                <div class="tooltip">YouTube</div>
                <span><a href="https://www.youtube.com/c/WizardingWorld/videos"><i class="fab fa-youtube"></i></a></span>
            </div>
        </div>
    </footer>
</body>

</html>