<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryArtController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageCategoryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [GalleryArtController::class,'index'])->name('/');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])
->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    //category Routes
    Route::get('/dashboard',[AdminController::class, 'index'])->name('dashboard');
    Route::get('/add-category',[CategoryController::class, 'addCategory'])->name('add-category');
    Route::get('/manage-category',[CategoryController::class, 'manageCategory'])->name('manage-category');
    Route::post('/new-category',[CategoryController::class,'newCategory'])->name('new-category');
    Route::get('/cStatus/{id}',[CategoryController::class,'statusCategory'])->name('cStatus');
    Route::get('/edit-category/{id}',[CategoryController::class,'editCategory'])->name('edit-category');
    Route::post('/update-category',[CategoryController::class,'updateCategory'])->name('update-category');
    Route::post('/delete-category',[CategoryController::class,'deleteCategory'])->name('delete-category');

    //category image routes
    Route::get('/add-image',[ImageCategoryController::class,'index'])->name('add-image');
    Route::get('/manage-image',[ImageCategoryController::class,'manageImage'])->name('manage-image');
    Route::post('/new-image',[ImageCategoryController::class,'newImage'])->name('new-image');
    Route::get('/edit-Image/{id}',[ImageCategoryController::class,'editImage'])->name('edit-image');
    Route::post('/update-image',[ImageCategoryController::class,'updateImage'])->name('update-image');
    Route::post('/delete-image',[ImageCategoryController::class,'deleteImage'])->name('delete-image');
});