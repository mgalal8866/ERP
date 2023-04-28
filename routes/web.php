<?php

use App\Http\Livewire\Customer\ViewCustomer;
use App\Http\Livewire\Layouts\Dashboard\Home;
use App\Http\Livewire\Welcome;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

// Route::get('/jj',function()
// {
// $dir = new DirectoryIterator(public_path(''));
// foreach($dir as $file)
// {
//     if($file->isFile())
//     return 'dd'  . $file;
// }
// });

Route::get('social-auth/{provider}/callback',[SocialLoginController::class,'providerCallback']);
Route::get('social-auth/{provider}',[SocialLoginController::class,'redirectToProvider'])->name('social.redirect');
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'  ,'auth']
    ], function(){
        Route::group(
            [
                'prefix' => 'admin',
            ], function(){
                Route::get('/dashboard', Home::class)->name('dashboard');
                Route::get('/customer',  ViewCustomer::class)->name('customer');
                // Route::get('/roles', Roles::class)->name('roles');
                // Route::get('/view/user', ViewUser::class)->name('viewuser');
                // Route::get('/payment_method', function () {  return view('payment_method');})->name('payment_method');
                // Route::get('/signin_method', function () {  return view('signin_method');})->name('signin_method');
        });
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
