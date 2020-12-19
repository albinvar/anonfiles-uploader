<h1 align="center"> Anon Files Uploader </h1> <br>
<p align="center">
  <a href="https://anonfiles.com/">
    <img src="https://i.ibb.co/kJY81TL/Anon-Files.png" alt="logo" width="190" border="0">
  </a>
</p>


## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Demo](#demo)
- [Installation](#installation)
- [Contributions](#contributions)

## Introduction

Anon Files Uploader is a php file uploader which runs using Anonfiles API. 

## Features

- Built with PHP (supports PHP 8.0)
- Easy to Deploy using heroku deploy button
- Show Error messages according to the Error code from API
- Optional API key provided along with heroku deploy

## Demo

Live Demo : http://test.com

## Installation

### Easy way (recommended)

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)

### Setup on VPS/local machine

* Install [php](https://www.php.net/downloads.php) and [composer](https://www.getcomposer.org)

* Clone this repository using git <br>
```git clone https://github.com/albinvar/anonfiles-uploader.git```

* Change directory using ```cd anonfiles-uploader``` and Run ``` composer install```

* Open ```process.php``` file and replace the $token variable with your API Key.

```php
<?php

require __DIR__.'/vendor/autoload.php';

use App\Uploader;

$token = "YOUR_ANONFILES_API_TOKEN_HERE"
```
* Start localhost using <br>```php -S localhost:8080```

* Open your [http://localhost:8080](http://localhost:8080) to load the web interface.

