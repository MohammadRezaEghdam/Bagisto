<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashbordController;
use App\Http\Controllers\Admin\Market\CommentController;
use App\Http\Controllers\Admin\Market\CategoryController;

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
// * Admin Panel
Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/', [AdminDashbordController::class, 'index'])->name('admin.panel');
    
    
    Route::prefix('market')->namespace('Market')->group(function () {
        
        // * Categories Routes
        Route::prefix('category')->group(function () {

            Route::get('/', [CategoryController::class, 'index'])->name('category.index');
            Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
            Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
            Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
            Route::post('/{category}', [CategoryController::class, 'update'])->name('categories.update');
            Route::get('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
        });


        // * Comments Routes
        Route::prefix('comments')->group(function () {

            Route::get('/', [CommentController::class, 'index'])->name('comment.index');
            Route::get('/create', [CommentController::class, 'create'])->name('comment.create');
            Route::get('/{comment}/show', [CommentController::class, 'show'])->name('comment.show');
            Route::post('/', [CommentController::class, 'store'])->name('comment.store');
            Route::get('/{comment}/edit', [CommentController::class, 'edit'])->name('comment.edit');
            Route::put('/{comment}', [CommentController::class, 'update'])->name('comment.update');
            Route::delete('/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
        });
    });
});




// Route::get('/', function () {
//     return view('Admin.index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
