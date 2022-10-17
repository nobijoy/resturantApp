<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/menus', [WebController::class, 'menus'])->name('menus');
Route::get('/all-restaurant', [WebController::class, 'restaurant'])->name('restaurantList');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');
Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/booking', [WebController::class, 'booking'])->name('booking');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/form', function () {return view('admin.form');})->name('form');
//    Route::get('/managesite', [AdminController::class, 'manage'])->name('managesite');

//    Route::get('/homepage', [AdminController::class, 'adminHome'])->name('homepage');

//    Route::get('/restaurantpage', [AdminController::class, 'restaurantPage'])->name('restaurantpage');

//    Route::get('/aboutpage', [AdminController::class, 'aboutPage'])->name('aboutpage');

//    Route::get('/contactpage', [AdminController::class, 'contactPage'])->name('contactpage');

//    Route::get('/bookingpage', [AdminController::class, 'bookingPage'])->name('bookingpage');

    Route::match(['get', 'post'], 'managewebsite', 'App\Http\Controllers\Back\Setup\SettingsController@appItemUpdate')->name('managewebsite');

    Route::match(['get', 'post'], 'mananagehomepage', 'App\Http\Controllers\HomepageController@homepageUpdate')->name('mananagehomepage');

    Route::match(['get', 'post'], 'mananagerestaurantpage', 'App\Http\Controllers\RestaurantpageController@restaurantpageUpdate')->name('mananagerestaurantpage');

//    Route::match(['get', 'post'], 'mananageaboutpage', 'App\Http\Controllers\AboutpageController@aboutpageUpdate')->name('mananageaboutpage');

    Route::match(['get', 'post'], 'mananageabout', 'App\Http\Controllers\AboutController@aboutpageUpdate')->name('mananageabout');

    Route::match(['get', 'post'], 'mananagecontactpage', 'App\Http\Controllers\ContactpageController@contactpageUpdate')->name('mananagecontactpage');

    Route::match(['get', 'post'], 'managebookingpage', 'App\Http\Controllers\BookingpageController@bookingpageUpdate')->name('managebookingpage');


    Route::resource('area', 'App\Http\Controllers\Back\AreaController')->parameters('area','id') ;

    Route::match(['get', 'post'], 'restaurant/{id}/lunch/menu', 'App\Http\Controllers\Back\RestaurantController@lunch')->name('restaurant.lunch');
    Route::match(['get', 'post'], 'restaurant/{id}/dinner/menu', 'App\Http\Controllers\Back\RestaurantController@dinner')->name('restaurant.dinner');
    Route::match(['get', 'post'], 'restaurant/{id}/facility', 'App\Http\Controllers\Back\RestaurantController@facility')->name('restaurant.facility');
    Route::match(['get', 'post'], 'restaurant/{id}/parking', 'App\Http\Controllers\Back\RestaurantController@parking')->name('restaurant.parking');

    Route::delete('restaurant/{id}/delete/lunch', 'App\Http\Controllers\Back\RestaurantController@deleterestaurantLunchItem')->name('restaurantLunchItem.delete');
    Route::post('restaurant/update/lunch', 'App\Http\Controllers\Back\RestaurantController@updaterestaurantLunchItem')->name('restaurantLunchItem.update');
    Route::delete('restaurant/{id}/delete/dinner', 'App\Http\Controllers\Back\RestaurantController@deleterestaurantDinnerItem')->name('restaurantDinnerItem.delete');
    Route::post('restaurant/update/dinner', 'App\Http\Controllers\Back\RestaurantController@updaterestaurantDinnerItem')->name('restaurantDinnerItem.update');
    Route::delete('restaurant/{id}/delete/parking', 'App\Http\Controllers\Back\RestaurantController@deleterestaurantParking')->name('restaurantParking.delete');
    Route::post('restaurant/update/parking', 'App\Http\Controllers\Back\RestaurantController@updaterestaurantParking')->name('restaurantParking.update');

    Route::delete('restaurant/{id}', 'App\Http\Controllers\Back\RestaurantController@delete')->name('restaurant.delete');
    Route::resource('restaurant', 'App\Http\Controllers\Back\RestaurantController')->parameters('restaurant','id') ;
    Route::post('restaurant/{id}/update', 'App\Http\Controllers\Back\RestaurantController@update')->name('restaurant.update');

});
