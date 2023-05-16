<?php

use App\Http\Controllers\Site\HomepageController;
use App\Http\Controllers\Site\PostPageController;
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

Route::get('/', [HomepageController::class, 'show']);
Route::get('/post/{post_id}', [PostPageController::class, 'show']);
