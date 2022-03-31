<?php

require "vendor/autoload.php";
require "src/Buscador.php";

use GuzzleHttp\Client;
use Alura\BuscadorDeCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();
$resposta = $client->request(
    "GET",
    "https://www.alura.com.br/cursos-online-programacao/php"
);

$client = new Client(["base_uri" => "https://www.alura.com.br/"]);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar("/cursos-online-programacao/php");

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}
