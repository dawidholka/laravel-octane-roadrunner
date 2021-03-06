<?php

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

Route::get('/log', function (){
   \Illuminate\Support\Facades\Log::info('info');
   \Illuminate\Support\Facades\Log::error('error');
   \Illuminate\Support\Facades\Log::warning('warning');
   \Illuminate\Support\Facades\Log::debug('debug');
});
