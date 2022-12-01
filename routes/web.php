<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//memanggil file controller

use App\Http\Controllers\HomeController;
//route sebelumnya
// Route::get('/', function () {
// return view('frontpage.landingpage');
// });
//route yang terbaru
Route::get('/', [HomeController::class, 'index']);

Route::get('/', function () {
    return view('public.post.index');
})->name('post.index');

Route::get('/aboutus', function () {
    return view('public.post.aboutus');
})->name('post.aboutus');

Route::get('/story/detail', function () {
    return view('public.post.detail');
})->name('post.detail');

Route::get('/dashboard', function () {
    return view('dashboard');
   })->middleware(['auth'])->name('dashboard');




/*Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/

require __DIR__.'/auth.php';
