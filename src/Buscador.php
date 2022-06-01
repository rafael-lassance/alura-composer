<?php 

namespace Alura\BuscadorDeCursos;

use \GuzzleHttp\Client;
use \Symfony\Component\DomCrawler\Crawler;


class Buscador {

    private Client $client;
    private Crawler $crawler;


    public function __construct( Client $client, Crawler $crawler) {
        $this->client = $client;
        $this->crawler = $crawler;
    }

    public function buscar (String $url) : array 
    {
        $response = $this->client->request('GET', $url);
        $html   = $response->getBody(); 

        $this->crawler->addHtmlContent($html);

        $elementosCurso = $this->crawler->filter("span.card-curso__nome");

        $cursos = [];

        foreach($elementosCurso as $elemento) { 
            $cursos[] = $elemento->textContent;
        }

        return $cursos;
    }

}
