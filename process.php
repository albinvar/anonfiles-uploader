<?php

require __DIR__.'/vendor/autoload.php';

use App\Uploader;

$token = "Your API Token";

$uploader = new Uploader($token);
$result = $uploader->decodeJson();

var_dump($result);