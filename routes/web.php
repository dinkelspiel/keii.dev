<?php

use App\Http\Middleware\IsAdmin;
use App\Livewire\Admin\Blog\Create;
use App\Livewire\Index;
use App\Livewire\Login;
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

Route::get('/', Index::class);

Route::get('/login', Login::class);

Route::middleware(IsAdmin::class)->group(function() {
    Route::redirect('/admin', '/admin/blog/create');
    Route::get('/admin/blog/create', Create::class);
});
