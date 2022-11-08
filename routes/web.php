<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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


Route::name('articles.')->group(function () {
    Route::get('articles', [ArticleController::class, 'index'])
        ->name('index');

    // создание статьи
    // всегда нужно ставить перед articles/{id}
    Route::get('articles/create', [ArticleController::class, 'create'])
        ->name('create');

    Route::post('articles', [ArticleController::class, 'store'])
        ->name('store');

    // изменение стати
    Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])
        ->name('edit');

    Route::patch('articles/{id}', [ArticleController::class, 'update'])
        ->name('update');

    // удаление статьи
    Route::delete('articles/{id}', [ArticleController::class, 'destroy'])
        ->name('destroy');

    // вывод определенной статьи
    Route::get('articles/{id}', [ArticleController::class, 'show'])
        ->name('show');
});

Route::name('users.')->group(function(){

});


//// заглушка на время
//Route::get('/register', [ArticleController::class, 'register'])
//    ->name('register');
//
//// заглушка пока не разобрался
//Route::get('/login', [ArticleController::class, 'login'])
//    ->name('login');


Route::middleware('guest')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
