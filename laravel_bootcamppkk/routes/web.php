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
    return view('dashboard');
 });

Route::get('/about', function () {
    return view('about');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/info', function () {
    return view('info');
});
Route::get('/project', function () {
    return view('project');
});

Route::get('/sidebar', function () {
    return view('template/sidebar');
});


Route::get('about', function()  {
    $data = [
        [
            'nama' => 'Gita Kartika Pariwara',
            'alamat' => 'Lowokwaru, Malang'
        ],
        [
            
            'nama' => 'Gita Kartika Pariwara',
            'alamat' => 'Lowokwaru, Malang'
        ],
        [
            'nama' => 'Gita Kartika Pariwara',
            'alamat' => 'Lowokwaru, Malang'
        ],
    ];
            return view('about', compact('data'));
});


//  Route::get('/d', function () {
//      return view('dashboard');
//      });
