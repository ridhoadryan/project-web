<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DosenController as AdminDosenController;
use App\Http\Controllers\Admin\MataKuliahController as AdminMataKuliahController;
use App\Http\Controllers\AlumniInformatikaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformatikaUnbaraController;
use App\Http\Controllers\KegiatanMahasiswaController;
use App\Http\Controllers\KerjaSamaController;
use App\Http\Controllers\LowonganPekerjaanController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\PenerimaanMahasiswaBaruController;
use App\Http\Controllers\PetaKurikulumController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Auth::routes();

// User
Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::get('/visi-misi', [VisiMisiController::class, 'index'])->name('visimisi');

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');

Route::get('/sejarah', [SejarahController::class, 'index'])->name('sejarah');

Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('strukturorganisasi');

Route::get('/mata-kuliah', [MataKuliahController::class, 'index'])->name('matakuliah');

Route::get('/peta-kurikulum', [PetaKurikulumController::class, 'index'])->name('petakurikulum');

Route::get('/penerimaan-mahasiwa-baru', [PenerimaanMahasiswaBaruController::class, 'index'])->name('penerimaanmahasiswabaru');

Route::get('/informatika-unbara', [InformatikaUnbaraController::class, 'index'])->name('informatikaunbara');

Route::get('/alumni-informatika', [AlumniInformatikaController::class, 'index'])->name('alumniinformatika');

Route::get('/kegiatan-mahasiswa', [KegiatanMahasiswaController::class, 'index'])->name('kegiatanmahasiswa');

Route::get('/kerja-sama', [KerjaSamaController::class, 'index'])->name('kerjasama');

Route::get('/lowongan-pekerjaan', [LowonganPekerjaanController::class, 'index'])->name('lowonganpekerjaan');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');


// Admin
Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resources([
        'dosen' => AdminDosenController::class,
        'matakuliah' => AdminMataKuliahController::class,
    ]);
});