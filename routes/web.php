<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\PostConttroller;
use App\Http\Controllers\StaffBranchController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BranchCrontroller;  /*
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

Route::get('/hello', function () {
    echo '<center><u>Hello semuanya, apa kabar?<br>';
    echo 'Pada kali ini kita sedang belajar route basic</u><center>';

});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/pages1', function () {
    return view('pages1.index');
});

Route::get('/pages2', function () {
    return view('pages2.index');
});

Route::get('/pages3', function () {
    return view('pages3.index');
});

Route::get('/biodata/{nama}/{umur}/{alamat}/{jk}/{hobby}', function ($nama,$umur,$alamat,$jk,$hobby) {
    return view('pages1.biodata', compact('nama','umur','alamat','jk','hobby'));
});

Route::get('/pesanan/{minuman?}', function ($minuman = 'kosong') {
    return view('pages1.pesanan', compact('minuman'));
});

Route::get('/bangunan/{b_bangunan?}/{material1?}', function ($b_bangunan = 'Mohon maaf pesanan anda kosong',$material1 = 'Mohon maaf pesanan anda kosong') {
    return view('pages1.bangunan', compact('b_bangunan','material1'));
});

Route::get('/pengenalan', [App\Http\Controllers\PengenalanController::class, 'pengenalan']);

Route::get('/intro/{nama}/{alamat}/{umur}',[App\Http\Controllers\PengenalanController::class,'intro']);

Route::get('/siswa', [App\Http\Controllers\PengenalanController::class,'siswa']);

Route::get('/menu', [App\Http\Controllers\LatihanController::class,'menu']);

Route::get('kampus',[App\Http\Controllers\Latihancontroller::class,'kampus']);

Route::get('tv',[App\Http\Controllers\Latihancontroller::class,'tv']);

Route::get('belanja',[App\Http\Controllers\Latihancontroller::class,'belanja']);

Route::get('/post1', [App\Http\Controllers\PostConttroller::class, 'index']);

Route::get('/post2', [App\Http\Controllers\StaffBranchController::class, 'staffBranch']);

Route::get('/post3', [App\Http\Controllers\StaffController::class, 'staff']);

Route::get('/post4', [App\Http\Controllers\BranchCrontoller::class, 'branch']);