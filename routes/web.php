<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Ilkom_newsController;

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

Route::get('WebinarBeasiswa2023', function () {
    return redirect('https://forms.gle/cLYbMqjm22pZdNfk7');
});

Route::get('PendaftaranAksiPemudaDonorDarah', function () {
    return redirect('https://docs.google.com/forms/d/e/1FAIpQLSfVEm9OJZAlrJMGWUtxG_K4UvIajw3BxoAUMTybnml5vCnZOQ/viewform');
});

Route::get('DaftarBPH-BEMILKOM24', function () {
    return redirect('https://docs.google.com/forms/d/e/1FAIpQLSdu6xuLkaruwHG3XP2F-EV8ARUfPnBCVnypPWTokBLeeUJ4sQ/viewform');
});

Route::get('SurveiNilaiUSEPT', function () {
    return redirect('https://forms.gle/qpjB8VVyPG2wgjRM9');
});

Route::get('PenilaianKabinetCakraBaswara', function () {
    return redirect('https://forms.gle/CkLp5QidEBcwSFaA9');
});

Route::get('GBOpenRecruitment', function () {
    return redirect('https://drive.google.com/file/d/1A8THIc_BTNRtlu2JP4WCpWjQHbCOuLt9/view?usp=drivesdk');
});

Route::get('/', [BeritaController::class, 'showmain']);
Route::get('/profile',[Controller::class, 'profil']);
Route::get('/about',[Controller::class, 'about']);
Route::get('/majalah',[Controller::class, 'majalah']);
Route::get('/berita',[BeritaController::class, 'show']);
Route::get('/berita/isiberita/{id}',[Controller::class, 'isiberita']);
Route::get('/ilkomnews',[Ilkom_newsController::class, 'index']);


/*Route Login Admin */
Route::get('/admin',[Controller::class, 'masuklogin']);

//Route Process Login
Route::post('/admin', [AuthController::class, 'login']);

//Route Store Majalah
Route::post('/admin/e-majalah/store', [AdminController::class, 'storemajalah']);

//Route Store Berita
Route::post('/admin/berita/store', [AdminController::class, 'storeberita']);

//Route Store Birokrasi
Route::post('/admin/birokrasi/store', [AdminController::class, 'storebirokrasi']);
//Route Store Ilkom news
Route::post('/admin/ilkomnews/store', [AdminController::class, 'storeilkomnews']);
/*Route Admin */    
Route::get('/admin/main', [Controller::class, 'adminmain']);
Route::get('/admin/e-majalah',[Controller::class, 'adminmajalah']);
Route::get('/admin/berita',[Controller::class, 'beritaadmin']);
Route::get('/admin/birokrasi',[Controller::class, 'birokrasi']);
Route::get('/admin/ilkomnews',[Controller::class, 'ilkomnewsadmin']);