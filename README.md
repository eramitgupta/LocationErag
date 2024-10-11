
## Get Location Free Only india

Explore Indian locations effortlessly using our software, Locationerag. Simply add a PIN code as a parameter, and instantly get an array of the entire area of INDIA. It's a quick and easy way to find locations – simplify your searches with Locationerag



<p align="center">
  <a href="https://paypal.me/teamdevgeek">
    <img src="https://github.com/eramitgupta/server-commands/blob/main/%24-donate-ff69b4.svg">
  </a>

  <a>
    <img src="https://github.com/eramitgupta/server-commands/blob/main/framework.svg" alt="License">
  </a>
</p>


<img width="1470" alt="Screenshot 2024-08-07 at 11 32 57 PM" src="https://github.com/user-attachments/assets/b3d82b4e-e1c0-434c-8356-5affa9d3b583">


## Getting Started

```bash
composer require erag/locationerag
```

```




### Step 1: Register Service Provider

#### Laravel 11.x  
Ensure the service provider is registered in `/bootstrap/providers.php`:
```php
return [
    // ...
    LocationEragServiceProvider::class
];
```

#### Laravel 10.x  
Add the service provider in `config/app.php`:
```php
'providers' => [
    // ...
    LocationErag\LocationEragServiceProvider::class,
];
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
    echo '<pre>';
    print_r(Location::MapData(226010));
});
```

## License

The MIT License (MIT). Please see License File for more information.

> GitHub [@eramitgupta](https://github.com/eramitgupta) &nbsp;&middot;&nbsp;
> Linkedin [@eramitgupta](https://www.linkedin.com/in/eramitgupta/)

