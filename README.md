# alura-composer
Projeto que utiliza o orquestrador de dependências Composer para criar uma biblioteca em PHP que busque os cursos no site da Alura.

## Como utilizar:

Para baixar a biblioteca para seu projeto, utilize o seguinte comando do composer:

**composer require rafael-lassance/buscador-cursos**

Após fazer o download dor arquivos e dependências, segue um exemplo da utilização da biblioteca para baixar os textos dos cursos de PHP do site da Alura:

```php

<?php

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

require "vendor/autoload.php";

$client = new Client(["base_uri" => "https://www.alura.com.br/"]);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);

$cursos = $buscador->buscar("cursos-online-programacao/php");

foreach ($cursos as $curso) {
    exibeMensagem($curso);
}

```
