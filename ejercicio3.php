<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Definir constantes
define("PI", 3.14159);
define("GRAVITY", 9.81);
define("WELCOME_MESSAGE", "¡Bienvenido a nuestra aplicación!");

// Usar constantes
echo "El valor de PI es: " . PI . "<br>";
echo "La aceleración debida a la gravedad es: " . GRAVITY . " m/s²<br>";
echo WELCOME_MESSAGE;
?>
</body>
</html>