<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sit and Pay</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleMenu.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


<body>
    <!-- <button type="button" class="btn btn-info btn-lg btn-block" disabled>Sit and Pay</button> -->

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="../imgs/sitandpaylogo.png" class="d-inline-block align-top text-right" alt="">
        </a>
        <span class="text-white bg-dark">Carrito (<?php $menus?>)</span>
    </nav>

    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../imgs/food1.jpg" class="d-block w-100" alt="..">
                </div>
                <div class="carousel-item">
                    <img src="../imgs/food2.jpg" class="d-block w-100" alt="..">
                </div>
                <div class="carousel-item">
                    <img src="../imgs/food3.jpg" class="d-block w-100" alt="..">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <p></p>
    <! -- ACA TRAEMOS LOS MENUS -->
        <h2 class="text-center">ARMA TU MENU ;)</h2>
        <!-- controlador slider -->
        <div id="swiper-menus" class="swiper-container">
            <!-- contenido wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php foreach ($this->menus as $m) { ?>
                    <div class="swiper-slide">
                        <!-- trabajo sobre esto con un foreach -->
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="<?= $m['imagen'] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $m['nombre'] ?></h5>
                                <p class="card-text"><?= $m['descripcion'] ?></p>
                                <button type="button" class="btn btn-primary btn-lg" value="<?= $m['id_menu'] ?> ">Agregar</button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <! -- ANALIZAR FOOTER -->
            <footer>
                <button type="button" class="btn btn-success btn-lg">Limpiar Menu</button>
                <button type="button" class="btn btn-success btn-lg">Continuar</button>
            </footer>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
<script>
    var mySwiper = new Swiper('#swiper-menus', {
        loop: true,
    })
</script>
</html>