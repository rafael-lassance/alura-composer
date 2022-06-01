<?php

use \GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();

$response = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');

$status = $response->getStatusCode(); // 200
$header = $response->getHeaderLine('content-type');
$html   = $response->getBody(); 

$crawler = new Crawler($html);

foreach ($crawler as $domElement) {
    var_dump($domElement->nodeName);
}