<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserActionController;

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

Route::group(['middleware' => 'checkStatus'], function () {
    // Все маршруты, к которым применяется Middleware
    Route::controller(WelcomeController::class)->group(function () {
        Route::get('/','welcome')->name('welcome');
        Route::get('/sign-up','signUp')->name('signUp');
        Route::get('/sign-in','signIn')->name('signIn');
        Route::get('/profile','profile')->name('profile');
        Route::get('/add-turist','addturist')->name('addturist');
        Route::get('/flight/{from}/{to}','flight')->name('flight');
        Route::get('/hotel/{hotel}','hotel')->name('hotel');
        Route::get('/shipsApi','shipsApi')->name('shipsApi');
        Route::get('/catalog-flight','catalogflight')->name('catalogflight');
        Route::get('/catalog-hotel','cataloghotel')->name('cataloghotel');

Route::get('/bron','bron')->name('bron');
Route::get('/allTourists','allTourists')->name('allTourists');
Route::get('/about','about')->name('about');
Route::post('/changeValute','changeValute')->name('changeValute');


    });
    
    
    Route::controller(AuthController::class)->group(function (){
        Route::post('/signUpUser','signUpUser')->name('signUpUser');
        Route::post('/signInUser','signInUser')->name('signInUser');

        Route::post('/editProfile','editProfile')->name('editProfile');
    Route::get('/delete-profile','delProfile')->name('delProfile');
    Route::post('/ban/{user}','ban')->name('ban');
    Route::post('/unban/{user}','unban')->name('unban');
    Route::post('/changePass','changePass')->name('changePass');

    });

    Route::controller(AdminController::class)->group(function (){

        Route::post('/addShip','addShip')->name('addShip');
        Route::post('/addHotel','addHotel')->name('addHotel');
        Route::post('/addNumber','addNumber')->name('addNumber');
        Route::post('/addRace','addRace')->name('addRace');

    });

    Route::controller(SearchController::class)->group(function(){

        Route::post('/searchMain','searchMain')->name('searchMain');
        Route::post('/searchRace','searchRace')->name('searchRace');
        Route::post('/choiceNumber/{number}','choiceNumber')->name('choiceNumber');
        Route::post('/chooseClass/{from}/{to}','chooseClass')->name('chooseClass');
        Route::post('/filterHotel','filterHotel')->name('filterHotel');
        Route::post('/flightFilter','flightFilter')->name('flightFilter');
        
    });  

    Route::controller(UserActionController::class)->group(function(){

        Route::post('/addTurist/{count}','addTurist')->name('addTurist');
        Route::post('/makeBron','makeBron')->name('makeBron');
        Route::post('/addTuristProfile','addTuristProfile')->name('addTuristProfile');
        
        Route::post('/addRewiew/{hotel}','addRewiew')->name('addRewiew');
    });


});
Route::get('/ban', function () {
    return view('pages.ban');
})->name('blocked-page');
    
Route::controller(AuthController::class)->group(function (){
Route::get('/logout','logout')->name('logout');
});