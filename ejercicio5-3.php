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
// Definir la calificación
$calificacion = 75;

// Clasificar la calificación
if ($calificacion >= 90) {
    echo "Excelente";
} elseif ($calificacion >= 70) {
    echo "Bueno";
} elseif ($calificacion >= 50) {
    echo "Suficiente";
} else {
    echo "Insuficiente";
}
?>
</body>
</html>