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

Route::get('/cv_alka', function () {
    return view('cv');
});

Route::get('/data_diri_alka', function () {
    return view('biodata_diri', [
        "tittle" => "BIDOATA MUHAMAD AL KAUSAR RAMADHAN",
        "text1" => "Muhamad Al Kausar Ramadhan",
        "text2" => "19 Tahun",
        "text3" => "Depok",
        "text4" => "13 November 2002",
        "text5" => "Software Developer / Web Developer",
        "text6" => "Jalan Merapi Raya, Depok Timur. Jawa Barat",
        "text7" => "Malang",
        "text8" => "0855-7107-548",
        "text9" => "SMK TARUNA BHAKTI",
        "text10" => "Islam"
    ]);
});

Route::get('/project_alka', function () {
    return view('project', [
        "tittle" => "PROJECT - PROJECT YANG PERNAH DIBUAT"
    ]);
});
Route::get('/pendidikan_alka', function () {
    return view('pendidikan', [
        "tittle" => "PENDIDIKAN",
        "text11" => "SD Yaspen Tugu Ibu",
        "text22" => "SMP Yaspen Tugu Ibu",
        "text33" => "SMK Taruna Bhakti"
    ]);
}); 
Route::get('/halaman_awal', function () {
    return view('halaman_utama', [
        "tittle" => "Halaman Utama"
    ]);
});

Route::get('/komentar-alka', function () {
    return view('komentar', [
        "tittle" => "KOMENTAR"
    ]);
});
