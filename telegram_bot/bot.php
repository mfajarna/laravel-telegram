<?php

$apiToken = "1815998889:AAGuTx4z2mt53fEr0fR-RDsIfudxd3IKzFs";

$data = [
    'chat_id' => '@iconetplus', //-1001162247021
    'text' => 'Hello world!'
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
// Do what you want with result




