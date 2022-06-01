<?php

require "vendor/autoload.php";

/*
for($i=0;$i<5;$i++) {
    exibeMensagem(Teste::metodo());
}
exit(1);
*/

use \GuzzleHttp\Client;
use \Symfony\Component\DomCrawler\Crawler;
use \Alura\BuscadorDeCursos\Buscador;

$client = new Client(["base_uri" => "https://www.alura.com.br/"]);

$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);

$cursos = $buscador->buscar("/cursos-online-programacao/php");

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}
