<?php

use App\Models\Repositories\ArticlesRepository;
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
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/articles', function () {
    return view('articles.index', [
        'articles' => App\Models\Article::all(),
    ]);
})->name('articles');

Route::get('search', function (ArticlesRepository $repository) {
    if (request('q') === null) {
        return redirect()->route('articles');
    }

    $articles = $repository->search(request('q'));
    return view('articles.index', [
        'articles' => $articles,
    ]);
});
