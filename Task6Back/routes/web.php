<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContentController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'homePage'])->name('home.page');


Route::prefix('content')->group(function () {
    Route::get('/all', [ContentController::class, 'allContents'])->name('all.contents');
    Route::get('/create', [ContentController::class, 'createContent'])->name('create.content');
    Route::post('/add', [ContentController::class, 'addContent'])->name('add.content');
    Route::get('/edit/{id}', [ContentController::class, 'editContent'])->name('edit.content');
    Route::put('/update/{id}', [ContentController::class, 'updateContent'])->name('update.content');
});
