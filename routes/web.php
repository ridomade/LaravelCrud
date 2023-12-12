<?php

use Illuminate\Support\Facades\Route;

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
// routes/web.php

use App\Http\Controllers\YourController;

Route::get('/parallax', [YourController::class, 'showParallax']);

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php

use App\Http\Controllers\VideoController;

Route::get('/video', [VideoController::class, 'showFullScreenVideo']);
