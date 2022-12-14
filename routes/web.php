<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('about', [PageController::class, 'about'])
    ->name('about');

Route::get('articles', [ArticleController::class, 'index'])
    ->name('articles.index');

// создание статьи
// всегда нужно ставить перед articles/{id}
Route::get('articles/create', [ArticleController::class, 'create'])
    ->name('articles.create');


Route::post('articles', [ArticleController::class, 'store'])
    ->name('articles.store');

// изменение стати
Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])
    ->name('articles.edit');

Route::patch('articles/{id}', [ArticleController::class, 'update'])
    ->name('articles.update');


// удаление статьи
Route::delete('articles/{id}', [ArticleController::class, 'destroy'])
    ->name('articles.destroy');

// вывод определенной статьи
Route::get('articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');

// заглушка на время
Route::get('/register', [ArticleController::class, 'register'])
    ->name('register');

// заглушка пока не разобрался
Route::get('/login', [ArticleController::class, 'login'])
    ->name('login');


