<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client();

//$consulta= $client->request('GET','https://reqres.in/api/users');
//$consulta= $client->request('GET','https://pokeapi.co/api/v2/location-area/5/');
$consulta= $client->request('GET','https://api.github.com/users/NombreGitHUb');


$resultado= json_decode( $consulta->getBody()->getContents(),true);

echo 'Resultado de la peticion '. $consulta->getStatusCode();
echo $consulta->getHeader('content-type')[0];

    echo'<pre>';
print_r($resultado);

