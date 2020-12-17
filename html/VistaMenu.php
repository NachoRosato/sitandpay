<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sit and Pay</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">        
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleMenu.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    


<body>
    <a href="usuario-invitado-pedido" class="btn-flotante">Ver Pedido</a>

    <nav class="navbar navbar-dark bg-dark d-flex">
        <a class="navbar-brand" href="#">
            <img src="imgs/sitandpaylogo.png" class="d-inline-block align-top text-right" alt="">
        </a>
        <span class="text-white bg-dark">© 2020</span>
    </nav>

    <div class="container-fluid" id="publi">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imgs/food1.jpg" class="d-block w-100" alt="..">
                </div>
                <div class="carousel-item">
                    <img src="imgs/food2.jpg" class="d-block w-100" alt="..">
                </div>
                <div class="carousel-item">
                    <img src="imgs/food3.jpg" class="d-block w-100" alt="..">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="d-flex bd-highlight">
        <button type="button" class="btn btn-info btn-sm p-3 flex-fill bd-highlight" data-bs-toggle="collapse" data-bs-target="#mostrarForm1" aria-expanded="false" aria-controls="mostrarForm1">Bebidas</button>
        <button type="button" class="btn btn-info btn-sm p-3 flex-fill bd-highlight" data-bs-toggle="collapse" data-bs-target="#mostrarForm2" aria-expanded="false" aria-controls="mostrarForm2">Principal</button>
        <button type="button" class="btn btn-info btn-sm p-3 flex-fill bd-highlight" data-bs-toggle="collapse" data-bs-target="#mostrarForm3" aria-expanded="false" aria-controls="mostrarForm3">Postres</button>
    </div>

    <! -- ACA TRAEMOS LOS MENUS -->
        <h2 class="text-center">ARMA TU MENU ;)</h2>
        <div class="collapse" id="mostrarForm3">
            <?php foreach ($this->menus as $m) { ?>
                <?php if ($m['categoria'] == 3) { ?>
                    <form action="" method="post" class="form-inline">
                        <div class="form-group mb-2">
                            <label for="nombre" class="sr-only">Nombre</label>
                            <input type="text" readonly class="form-control-plaintext font-weight-bold" id="nombre" value="<?= $m['nombre']; ?>">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="precio" class="sr-only">Precio</label>
                            <input type="text" readonly class="form-control-plaintext font-weight-bold" id="precio" value="$ <?= $m['precio']; ?>">
                            <input type="hidden" name="menuid" value="<?= $m['id_menu']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm mb-2 form-inline">Agregar</button>
                    </form>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="collapse" id="mostrarForm2">
            <?php foreach ($this->menus as $m) { ?>
                <?php if ($m['categoria'] == 2) { ?>
                    <form action="" method="post" class="form-inline">
                        <div class="form-group mb-2">
                            <label for="nombre" class="sr-only">Nombre</label>
                            <input type="text" readonly class="form-control-plaintext font-weight-bold" id="nombre" value="<?= $m['nombre']; ?>">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="precio" class="sr-only">Precio</label>
                            <input type="text" readonly class="form-control-plaintext font-weight-bold" id="precio" value="$ <?= $m['precio']; ?>">
                            <input type="hidden" name="menuid" value="<?= $m['id_menu']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm mb-2 form-inline">Agregar</button>
                    </form>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="collapse" id="mostrarForm1">
            <?php foreach ($this->menus as $m) { ?>
                <?php if ($m['categoria'] == 1) { ?>
                    <form action="" method="post" class="form-inline">
                        <div class="form-group mb-2">
                            <label for="nombre" class="sr-only">Nombre</label>
                            <input type="text" readonly class="form-control-plaintext font-weight-bold" id="nombre" value="<?= $m['nombre']; ?>">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="precio" class="sr-only">Precio</label>
                            <input type="text" readonly class="form-control-plaintext font-weight-bold" id="precio" value="$ <?= $m['precio']; ?>">
                            <input type="hidden" name="menuid" value="<?= $m['id_menu']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm mb-2 form-inline">Agregar</button>
                    </form>
                <?php } ?>
            <?php } ?>
        </div>
        <! -- ANALIZAR FOOTER -->
            <div>
                <footer>
                    © 2020
                </footer>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>