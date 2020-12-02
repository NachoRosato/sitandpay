<?php
// SDK de Mercado Pago
require '../vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-1733007128401887-120205-72c22417010d20fe45f6a65d5397059c-164257781');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();
$preference->back_urls = array (
    "success" => "./success.php"
);

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Restaurante/bar';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos</title>
</head>

<body>
    <form action="" method="post">
        <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js" data-preference-id="<?php echo $preference->id; ?>">
        </script>
    </form>
</body>
</html>