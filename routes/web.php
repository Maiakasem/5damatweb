<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BackEnd\VideoController;
use App\Http\Controllers\BackEnd\TagController;
use App\Http\Controllers\BackEnd\PageController;
use App\Http\Controllers\BackEnd\UserController;
use App\Http\Controllers\BackEnd\AdminController;
use App\Http\Controllers\BackEnd\SkillController;
use App\Http\Controllers\BackEnd\CategoryController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', function () {
    return view('backEnd.home');
});
Route::prefix('admin')->middleware('auth')->group(function () {
    
    // Dashboard route
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // Users management routes
    Route::resource('users', UserController::class)->except(['show','delete']);
    
    //Categories managment routes
    Route::resource('categories', CategoryController::class)->except(['show','delete']);
    
    //Skills managment routes
    Route::resource('skills', SkillController::class)->except(['show','delete']);
    
    //Tags managgment routes
    Route::resource('tags', TagController::class)->except(['show','delete']);

    //Pages managment routes
    Route::resource('pages', PageController::class)->except(['show','delete']);

    //Videos managment routes
    Route::resource('videos', VideoController::class)->except(['show','delete']);
});
require __DIR__.'/auth.php';
