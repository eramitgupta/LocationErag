# LocationErag – Free and Easy Location Lookup for Indian Areas


Explore Indian locations effortlessly using our software, **Locationerag**. Simply add a PIN code as a parameter, and instantly get an array of the entire area of India. It's a quick and easy way to find locations – simplify your searches with Locationerag!


## Screenshot
<img width="1470" alt="Screenshot 2024-08-07 at 11 32 57 PM" src="https://github.com/user-attachments/assets/b3d82b4e-e1c0-434c-8356-5affa9d3b583">

## Getting Started

### Installation

To get started with **Locationerag**, run the following command to install it via Composer:

```bash
composer require erag/locationerag
```

### Step 1: Register the Service Provider

#### For Laravel 11.x
Ensure that the service provider is registered in `/bootstrap/providers.php`:

```php
return [
    // ...
    LocationErag\LocationEragServiceProvider::class
];
```

#### For Laravel 10.x
Add the service provider in `config/app.php`:

```php
'providers' => [
    // ...
    LocationErag\LocationEragServiceProvider::class,
];
```

### Step 2: Usage Example

Now, use the **Locationerag** package in your routes:

```php
<?php

use Illuminate\Support\Facades\Route;
use LocationErag\Get\Location;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Register web routes for your application.
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    echo '<pre>';
    print_r(Location::MapData(226010)); // Example: Get location data using a PIN code.
});
```
