<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostControl;

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

Route::match(['post','get'],'/post/create', [PostControl::class, 'create'])->name('create');
Route::get('/post/show', [PostControl::class, 'show'])->name('show');
Route::get('/post/show/{id}', [PostControl::class, 'showId'])->name('showId');
Route::post('/comment', [PostControl::class, 'comment'])->name('comment_create');
Route::get('/post/delete/{id}', [PostControl::class, 'delete'])->name('delete');
Route::get('/hotel', [PostControl::class, 'showUser'])->name('showUser');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
