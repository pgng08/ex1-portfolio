<?php
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

// Routeur page "Home"
Route::get('/', [PortfolioController::class, "index"]);
Route::get('/home', [PortfolioController::class, "index"]);
Route::get('/index', [PortfolioController::class, "index"]);

// Routeur page "Portfolio"
Route::get('/portfolio', [PortfolioController::class, "portfolio"]);

// Routeur page "About"
Route::get('/about', [PortfolioController::class, "about"]);

// Routeur page "Contact"
Route::get('/contact', [PortfolioController::class, "contact"]);
Route::post('/contact', [PortfolioController::class, "formContact"]);

