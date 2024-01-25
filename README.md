
## Get location Free only india

Explore Indian locations effortlessly using our software, Locationerag. Simply add a PIN code as a parameter, and instantly get an array of the entire area of INDIA. It's a quick and easy way to find locations – simplify your searches with Locationerag


<p align="center">
  <a href="https://paypal.me/teamdevgeek">
    <img src="https://github.com/eramitgupta/server-commands/blob/main/%24-donate-ff69b4.svg">
  </a>

  <a>
    <img src="https://github.com/eramitgupta/server-commands/blob/main/framework.svg" alt="License">
  </a>
</p>

![screenshot](https://raw.githubusercontent.com/eramitgupta/files/main/locationerag.gif)

## Getting Started

```bash
composer require erag/locationerag
```

```bash
<?php

use Illuminate\Support\Facades\Route;
use LocationErag\Get\Location;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $LocationErag = new Location();
    echo '<pre>';
    print_r($LocationErag::MapData('226010'));
});
```
## License

The MIT License (MIT). Please see License File for more information.

> GitHub [@eramitgupta](https://github.com/eramitgupta) &nbsp;&middot;&nbsp;
> Linkedin [@eramitgupta](https://www.linkedin.com/in/eramitgupta/)

