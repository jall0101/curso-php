<link rel="stylesheet" href="style.css">


<?php
/*VARIABLES*/
$nombre = 'Jesús López';
$edad = 0;
/*booleanos*/
$isDev = true;
/*constantes*/
const pi = 3.1416;

$mayorOmenor = $isDev = $edad >= 18;

/*IF EN PHP*/
if ($mayorOmenor) {
    echo "Es mayor de edad";
} else {
    echo "Es menor de edad" ;
}


/*OTRAS FORMAS DE EVALUAR LA EDAD
match SIRVE PARA COMPROBACIÓN E IDENTIFICACIÓN DE UN VALOR
*/

/*#1*/
$outputMatch1 = match ($edad){
    0,1,2 => "eres un bebesito, $nombre",
    3,4,5,6,7,8,9,10 => "eres un niño, $nombre",
    11,12,13,14,15,16,17,18 => "eres un adolescente, $nombre",
    19,20,21,22,23,24,25,26,27,28,29,30 => "Eres un adulto joven, $nombre",
    default => "Eres un adulto, $nombre",
};

/*#2*/
$outputMatch2 = match (true){
    $edad < 2 => "eres un bebesito, $nombre",
    $edad < 10 => "eres un niño, $nombre",
    $edad < 18 => "eres un adolescente, $nombre",
    $edad === 18 => "eres mayor de edad, $nombre",
    $edad < 30 => "Eres un adulto joven, $nombre",
    default => "Eres un adulto, $nombre",
};

/*ARREGLOS O ARRAYS*/
$frutas = ['manzana', 'pera', 'naranja', 'sandía', 1, 2];
$frutas[3] = "maracuyá";
$frutas[] = "mango";

/*ARREGLOS ASOSIATIVOS*/
$personas = [
    "nombre1" => "Jesús",
    "edad1" => 23,
    "frutas" => ["pera", "uva", "mango"],
];

/*PONER IMAGENES*/
define('LOGO_URL', 'https://www.google.com/images/branding/googlelogo/1x/googlelogo_light_color_272x92dp.png');

/*IMPRIMIR VARIABLE CONCATENADAS CON PUNTO(.)*/
$output = 'El nombre del desarrollador es ' . $nombre . ' y su edad es ' . $edad . '🤩 y muestra el ' . pi;
?>
<!--FUERA DE PHP-->


<img src="<?=  LOGO_URL ?>" alt="Logo de PHP">

<h1><?= $output ?></h1>
<h2><?=$outputMatch1?></h2>
<h2><?=$outputMatch2?></h2>
<!--arreglos-->
<h3><?=$frutas[3]?></h3>
<!--iterando arreglos-->
<ul>
    <p>iteración de arreglos</p>
    <?php foreach ($frutas as $key => $fruta) : ?>
        <li><?= $fruta . " .......... " . $key ?></li>
    <?php endforeach; ?>
</ul>


