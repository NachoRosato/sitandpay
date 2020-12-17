<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sit and Pay</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/popper.min.js">
    <link rel="stylesheet" href="css/styleMenu.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<body>
    <a href="usuario-invitado-pago" class="btn-flotante">PAGAR</a>
    <a href="usuario-invitado-menu" class="btn-flotante2">VOLVER</a>

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
                    <img src="imgs/food3.jpg" class="d-block w-100 h-10" alt="..">
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

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col">
                    + / -
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $acum = 0; ?>
            <?php foreach ($this->menus as $me) { ?>
                <tr>
                    <th scope="row" id="cantidad<?= $me['id_menu']; ?>">1</th>
                    <td><?= $me['nombre']; ?></td>
                    <td><?= $me['descripcion']; ?></td>
                    <td id="precioParcial<?= $me['id_menu']; ?>"><?= $me['precio']; ?></td>
                    <input type="hidden" id="precioInicial<?= $me['id_menu']; ?>" value="<?= $me['precio']; ?>">
                    <td>
                        <button id="botonSumar" class="btn btn-primary font-weight-bold" onclick="sumarCant('<?= $me['id_menu']; ?>')">+</button>
                        <button id="botonRestar" class="btn btn-primary font-weight-bold" onclick="restarCant('<?= $me['id_menu']; ?>')">-</button>
                    </td>
                </tr>
                <?php $acum += $me['precio']; ?>
            <?php } ?>
            <th scope="row" class="table-info">#</th>
            <td class="table-info font-weight-bold">TOTAL</td>
            <td class="table-info"></td>
            <td class="table-info"></td>
            <td class="table-info font-weight-bold" id="precioAcum"><?= $acum ?></td>
        </tbody>
    </table>
    <! -- ANALIZAR FOOTER -->
        <div>
            <footer>
                © 2020
            </footer>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
<script>
    function sumarCant(id) {


        let precioInicial = document.getElementById('precioInicial' + id);
        precioInicial = parseFloat(precioInicial.value);

        let cantidad = document.getElementById('cantidad' + id);
        cantidad.textContent = parseInt(cantidad.textContent) + 1;

        let precioParcial = document.getElementById('precioParcial' + id);

        precioParcial.textContent = precioInicial * parseFloat(cantidad.textContent)

        let precioAcumulado = document.getElementById('precioAcum')
        precioAcumulado.textContent = parseFloat(precioAcumulado.textContent) + precioInicial

    }

    function restarCant(id) {

        let precioInicial = document.getElementById('precioInicial' + id);
        precioInicial = parseFloat(precioInicial.value);

        let cantidad = document.getElementById('cantidad' + id);
        if (cantidad.textContent > 1) {

            cantidad.textContent = parseInt(cantidad.textContent) - 1;

            let precioParcial = document.getElementById('precioParcial' + id);

            precioParcial.textContent = precioInicial * parseFloat(cantidad.textContent)

            let precioAcumulado = document.getElementById('precioAcum')
            precioAcumulado.textContent = parseFloat(precioAcumulado.textContent) - precioInicial
        }

    }
</script>
</html>