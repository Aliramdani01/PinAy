<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [AuthController::class, 'register']);

Route::post('/registered', [AuthController::class, 'registered']);
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::middleware('auth')->group(function(){
    Route::get('/home', function () {
        return view('page.home');
    });

    //Home
    Route::get('/getDataExplore', [ExploreController::class, 'getdata']);
    Route::post('/likefotos', [ExploreController::class, 'likesfoto']);
    Route::get('/detail/{id}', [ViewController::class, 'detail']);
    Route::get('/detail/{id}/getdatadetail', [ExploreController::class, 'getdatadetail']);
    Route::get('/detail/getComment/{id}', [ExploreController::class, 'ambildatakomentar']);
    Route::post('/detail/kirimkomentar', [ExploreController::class, 'kirimkomentar']);


    // UserLain
    Route::get('/other-pin/{id}', [ViewController::class, 'userlain']);
    Route::get('/other-pin/getDataPin/{id}', [PinController::class, 'getdatapin']);
    Route::get('/getdataotherpinexplore/', [PinController::class, 'getdata']);
    Route::post('/likefotos', [PinController::class, 'likesfotos']);



    //Upload
    Route::get('/upload', [ViewController::class, 'upload']);
    Route::post('/upload/store', [UploadController::class, 'storeFoto']);

    //Profile
    Route::get('/profile', [ViewController::class, 'profile']);
    Route::get('/dataprofile/', [ProfileController::class, 'getdataprofile']);
    Route::get('/getdataprofile/', [ProfileController::class, 'getdata']);

    // Update Profile
    Route::get('/ubahprofile', [ViewController::class, 'ubahprofle']);
    Route::post('/update', [ProfileController::class, 'update']);


   //UbahPassword
    Route::get('/ubahpassword', [ViewController::class, 'ubahpassword']);
    Route::post('/update-password', [ProfileController::class, 'ubahpassword']);

    //Album
    Route::get('/album', [ViewController::class, 'album']);
    Route::post('/buat-album', [AlbumController::class, 'storeAlbum']);
    Route::get('/detailalbum/{id}', [AlbumController::class, 'detail']);
    Route::get('/buatalbum', [ViewController::class, 'buatalbum']);


    //Edit Hapus Foto
    Route::get('/hapus/{id}', [FotoController::class, 'hapuspostingan']);

    Route::get('/edit-foto', function(){
        return view('page.edit-foto');
    });




    Route::get('/like', function () {
        return view('page.like');
    });
    
    Route::get('/detail', function () {
        return view('page.detail');
    });
    
    Route::get('/profile', function () {
        return view('page.profile');
    });
    
    Route::get('/editprofile', function () {
        return view('page.editprofile');
    });
    
    Route::get('/ubahpassword', function () {
        return view('page.ubahpassword');
    });
    
    
    Route::get('/tambahalbum', function () {
        return view('page.tambahalbum');
    });
    
    Route::get('/isialbum', function () {
        return view('page.isialbum');
    });

});

//Auth
Route::post('/auth', [AuthController::class, 'auth']);
Route::post('/', [AuthController::class, 'index']);

