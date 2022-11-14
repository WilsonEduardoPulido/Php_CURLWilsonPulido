
<?php
//GET
/*
$conexion = curl_init();

curl_setopt($conexion,CURLOPT_URL,'https://reqres.in/api/users/2');
//curl_setopt($conexion,CURLOPT_RETURNTRANSFER,true);

//$repuesta =curl_exec($conexion);

curl_exec($conexion);

if (curl_errno($conexion))echo curl_error($conexion);

//else $a =json_decode($repuesta,true);
//var_dump($a);


curl_close($conexion);*/

//POST
/*
$conexion = curl_init();
$datos =[ 'name'=>'Wilson',

'job'=>'Estudia'];


$pasar =http_build_query($datos);

curl_setopt($conexion,CURLOPT_URL,'https://reqres.in/api/users');

curl_setopt($conexion,CURLOPT_POST,true);
curl_setopt($conexion,CURLOPT_POSTFIELDS,$pasar);


curl_setopt($conexion,CURLOPT_RETURNTRANSFER,true);

$repuesta=curl_exec($conexion);

if (curl_errno($conexion))echo curl_error($conexion);
else $a =json_decode($repuesta,true);


foreach($a as $key=>$value){
    echo "$key:$value <br>";
}

curl_close($conexion);*/


//Ejemplo
/*
$id =45;
$conexion = curl_init();

curl_setopt($conexion,CURLOPT_URL,"https://pokeapi.co/api/v2/location-area/$id/");

curl_setopt($conexion,CURLOPT_RETURNTRANSFER,true);

$respuesta =curl_exec($conexion);



curl_close($conexion);

$datos =json_decode($respuesta,true);

echo "El nombre del pokemos es  :".$datos[ 'name'];*/


