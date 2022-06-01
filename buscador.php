<?php

use \GuzzleHttp\Client;

$client = new Client();

$response = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');

$status = $response->getStatusCode(); // 200
$header = $response->getHeaderLine('content-type');
$html   = $response->getBody(); 

