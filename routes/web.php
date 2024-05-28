<?php

use App\Http\Controllers\FeaturepageController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProfileController;
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






Route::get('/test', function () {
    return view('test');
});

route::get('/',[HomepageController::class,'Homepage'])->name('homepage');
route::get('/blogpage/{slug}',[BlogPageController::class,'BlogPage'])->name('blog.page');
route::get('/featurepage/{id}',[FeaturepageController::class,'FeaturePage'])->name('feature.page');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
