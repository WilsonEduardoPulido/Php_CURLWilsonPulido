<?php

$handle =curl_init();
$key='live_ac8c225c8edca7529f68';
$email ='wepulido2@misena.edu.co';

$url ='https://reqres.in/api/users';
curl_setopt($handle,CURLOPT_URL,$url);
curl_setopt($handle,CURLOPT_RETURNTRANSFER,true);



$content=curl_exec($handle);

if($content !==false){
    $data =json_decode($content,true);

    echo'<pre>';
print_r($content);
}

curl_close($handle);

//API + cURL
