<?php
const ASSET_PATH = '';
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{ BrandsController, CategoryController, ContactMessagesController, SettingsController};

//Route::group(['namespace' =>'Admin','middleware' => 'auth:web'],function (){



Route::group(['namespace' =>'Admin','middleware' => 'auth:admin'],function (){
    // Admin routes go here.
    Route::get('/dashboard','DashboardController@index')->name('admin.dashboard');
    Route::get('logout', 'DashboardController@logout')->name('admin.logout');
});

Route::group(['namespace' =>'Admin\Auth','middleware' => 'guest:admin'],function (){
    Route::get('/login',  'LoginController@showAdminLoginForm')->name('get.admin.login');
    Route::post('/login', 'LoginController@adminLogin')->name('admin.login');
});
//Route::group(['middleware' => ['auth:admin']], function() {

Route::group(['middleware' => ['auth:admin']], function() {

    Route::get('messages'           , [ContactMessagesController::class , 'index'])->name('messages.index');
    Route::get('messages/seen/{id}'   , [ContactMessagesController::class, 'toggleSeen'])->name('messages.toggleSeen');

    Route::group(['prefix' =>'settings' , 'as' => 'settings.'],function (){

        Route::get('/social_links'   , [SettingsController::class, 'index'])->name('index');
        Route::post('update_social_links',[SettingsController::class, 'updatesocilaLinks'])->name('update_social_links');
        Route::get('/about_us'   , [SettingsController::class, 'about_us'])->name('about_us');
        Route::post('update_about_us',[SettingsController::class, 'updateaboutUs'])->name('update_about_us');
        Route::get('/images'   , [SettingsController::class, 'Images'])->name('images');
        Route::post('update_images',[SettingsController::class, 'updateImages'])->name('update_images');
        Route::get('/texts'   , [SettingsController::class, 'Texts'])->name('texts');
        Route::post('update_texts',[SettingsController::class, 'updateTexts'])->name('update_texts');
    });

});


