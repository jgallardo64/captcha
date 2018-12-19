<?php
// Creación y configuración del lienzo
$ancho = 300;
$alto = 120;
$imagen = imagecreatetruecolor($ancho, $alto);
$blanco = imagecolorallocate($imagen, 255, 255, 255);
$azul = imagecolorallocate($imagen, 0, 0, 64);
//Se genera el texto a introducir
$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
$longitud = rand(5, 8);
$cadena = ""; //variable para almacenar la cadena generada
for ($i = 0; $i < $longitud; $i++) {
    $cadena .= substr($caracteres, rand(0, strlen($caracteres)), 1); // Extraemos 1 caracter de los caracteres entre el rango 0 a Numero de letras que tiene la cadena
}
// Se dibuja la imagen
imagefill($imagen, 0, 0, $blanco);
imageline($imagen, 0, 0, $ancho, $alto, $azul);
//imagestring($imagen, 5, 100, 50, $cadena, $azul);
imagettftext($imagen, 20, 0, 100, 50, $azul, "C:\xampp\php\extras\fonts\ttf\Vera.ttf", $cadena);
// Generación de la imagen.
header('content-type: image/png');
imagepng($imagen);
// Liberamos la imagen de memoria.
imagedestroy($imagen);
?>