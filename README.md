<h1 align="center"> Anon Files Uploader </h1> <br>
<p align="center">
  <a href="https://anonfiles.com/">
    <img src="https://i.ibb.co/kJY81TL/Anon-Files.png" alt="logo" width="190" border="0">
  </a>
</p>

<a href="https://anonfiles-uploader.herokuapp.com"><img src="http://heroku-badge.herokuapp.com/?app=anonfiles-uploader&style=flat&svg=1" /></a>

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Screenshots](#screenshots)
- [Demo](#demo)
- [Installation](#installation)
- [Contributing](#contributing)
- [License](#license)

## Introduction

Anon Files Uploader is a simple php file uploader which runs using Anonfiles API. 

## Features

- Built with PHP (supports PHP 8.0)
- Easy to Deploy using heroku deploy button
- Show Error messages according to the Error code from API
- Optional API key provided along with heroku deploy

## Screenshots

|Default Interface|After Uploading|
|--|--|
|![desktop](https://i.ibb.co/8XPTDC8/IMG-20201219-090522.jpg)|![desktop](https://i.ibb.co/K96qn1j/IMG-20201219-090943.jpg)|


## Demo

Live Demo : <a href="https://anonfiles-uploader.herokuapp.com" target="_blank">Anonfile Uploader</a>

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

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

The project is certified using [MIT License](LICENSE)
