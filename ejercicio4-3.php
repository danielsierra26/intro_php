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
// Definir edad y estado de la identificación
$edad = 18;
$identificacion_valida = true;

// Verificar si la persona puede votar
if ($edad >= 18 && $identificacion_valida) {
    echo "La persona puede votar.";
} else {
    echo "La persona no puede votar.";
}
?>
</body>
</html>