<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Ejecutamos y guardamos el resultado
$result = curl_exec($ch);
$data =json_decode($result, true);
curl_close($ch);
// var_dump($data);
?>

<head>
    <title>Prox Marvel</title>
    <meta name="description" content="The next Marvel movie">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
/>
</head>

<main>
    <section>
    <img src="<?= $data["poster_url"]; ?>" width="300" alt="Imagen" style="border-radius: 16px;"/>

    </section>
    <hgroup>
        <h2><?= $data["title"]?> is released in <?= $data["days_until"]?> days.</h2>
        <p>Date: <?= $data["release_date"]?></p>
        <p>The next is <?= $data["following_production"]["title"]?></p>
    </hgroup>
</main>

<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display:grid;
        place-content: center;
    }
    main{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    p{
        text-align: center;
    }
</style>