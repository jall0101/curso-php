<link rel="stylesheet" href="style.css">
<h1>PELICULAS DE ESTRENO MCU</h1>
<?php
 
//VARIABLE CONSTANTE
const API_URL="https://whenisthenextmcufilm.com/api";
//Inicializar una nueva sesión en cURL; ch = cURL handle
$ch = curl_init(API_URL);
//Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//ejecutar la petición y guardamos el resultado
$respuesta = curl_exec($ch);

$data=json_decode($respuesta, true);
curl_close($ch);

//var_dump($data);


?>

<head>
    <meta charset="UTF-8"/>
    <title>La proxima pelicula de marvel</title>
    <meta name="description" content="La próxima película de marvel"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Centered viewport --> 
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>

<main>
    <section>
        <img src= "<?= $data["poster_url"]; ?>" width="300" alt="poster de " <?= $data["title"]; ?>/>
    </section>

    <hgroup>
        <h3><?=  $data["title"]; ?> Se estrena en <?= $data["days_until"];  ?> días</h3>

        <p>Fecha de estreno: <?=$data["release_date"]; ?></p>
        <p>La siguiente pelicula de estreno es: <?=$data["following_production"]["title"]; ?></p>
    </hgroup>
</main>