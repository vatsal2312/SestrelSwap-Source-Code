<?php

use Illuminate\Support\Facades\Route;
use App\Models\SiteConfig;

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

Route::get('/','HomeController@show_home');

Route::post('/store_log','HomeController@store_history');

$admin_controller = 'App\Http\Controllers\ADMiN';
$admin_url = SiteConfig::where('id', 1)->first()->admin_redirect;

Route::group(['prefix' => $admin_url], function () {    

    Route::get('/verify_tfa', function () {
        return view('admin.auth.verify2fa');
    })->name('admin.2fa');

    Route::get('InGqkuuiaiusdha', 'Admin\Auth\LoginController@show_login_page')->name('admin.showlogin');

    Route::get('login','Admin\Auth\LoginController@show_login_page');
    Route::get('logout','Admin\Auth\LoginController@logout')->name('admin.logout');

    Route::get('create_usr','Admin\Auth\LoginController@admin_register');

    Route::post('admin_login','Admin\Auth\LoginController@admin_login')->name('admin.login');
    Route::post('verify2fa','Admin\Auth\LoginController@verify2fa')->name('admin.verify_2fa');  

});

Route::group(['prefix' => $admin_url, 'middleware' => ['auth','verify2fa']], 
function (){

    Route::get('/dashboard', function () {
        return view('admin.home');
    })->name('admin.dashboard');

   Route::get('/manage_2fa','TFAController@show_tfa_page')
   ->name('admin.manage_2fa');
 
    Route::get('/manage_whitelist','Admin\AdminController@load_whitelist')->name('admin.whitelist');

    Route::post('/whitelist_add','Admin\AdminController@add_whitelist')->name('admin.add_ip');
    
    Route::post('/whitelist_del','Admin\AdminController@delete_ip')->name('admin.delete_ip');

    Route::post('/store_log_price','Admin\AdminController@store_price_log')->name('log_price');
    Route::post('/store_log_pair','Admin\AdminController@store_pair_log')->name('log_pair');

});
