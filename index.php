<?php

require_once './vendor/autoload.php';
require_once './src/routes/main.php';

use App\Core\Core;
use App\Http\Route;

Core::dispatch(Route::routes());