<?php

use GuzzleHttp\Client;

$client = new \GuzzleHttp\Client();
$resposta = $client->request(
    "GET",
    "https://www.alura.com/cursos-online-programacao/php"
);
