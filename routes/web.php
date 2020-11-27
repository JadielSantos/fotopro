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

//Route::group(
//  [
//    'middleware' => [],
//    'prefix' => 'usuario',
//    'namespace' => 'User',
//  ], function () {
//  Route::name('user.')->group(function () {
//    Route::get('/', 'UserController@home')->name('home');
//
//    Route::get('/fotos', 'UserController@photos')->name('photos');
//
//    Route::get('/contato', 'UserController@contacts')->name('contact');
//
//    Route::get('/sobre', 'UserController@about')->name('about');
//
//  });
//});

//Route::get('/', 'LandingPageController@landing_page')->name('landing-page');
//
//Route::get('/test', function () {
//  return view('test');
//})->name('test');
//
//Route::get('/login', function () {
//  return 'Login';
//})->name('login');

/*Examples:
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
  return view('site.contact');
});

Route::any('/any', function () {
  return 'Any';
});

Route::match(['get', 'post'],'/match', function () {
  return 'Match';
});

Route::get('/categorias/{subcat}', function ($subcat) {

  return "Categoria: {$subcat}";
});

Route::get('/categorias/{subcat}/blog', function ($subcat) {

  return "Blog da categoria: {$subcat}";
});

Route::get('/fotos/{idPicture?}', function ($idPicture = '') {
  return "Fotos {$idPicture}";
});

Route::get('/redirect1', function ($idPicture = '') {
  return redirect('/redirect2');
});

Route::redirect('/redirect1', '/redirect2');

Route::get('/redirect2', function ($idPicture = '') {
  return 'Redirect 2';
});

Route::view('/view', 'welcome');

Route::get('/test-name', function ($idPicture = '') {
  return 'Uba';
})->name('url.name');

Route::get('/redirect3', function ($idPicture = '') {
  return redirect()->route('url.name');
});

route('url.name');

Route Group
Route::middleware([])->group(function () {

  Route::prefix('admin')->group(function () {

    Route::namespace('Admin')->group(function () {

      Route::name('admin.')->group(function () {
        Route::get('/dashboard', 'TestController@test')->name('dashboard');

        Route::get('/financeiro', 'TestController@test')->name('finance');

        Route::get('/fotos', 'TestController@test')->name('pictures');

        Route::get('/', function () {
          return redirect()->route('admin.dashboard');
        })->name('home');
      });
    });
  });
});*/

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::view('', 'landing-page')->name('landing_page');

Route::resource('galerias', 'GalleryController')->names('galleries')->parameters(['galerias' => 'gallery']);
Route::post('galerias/selecao', 'GalleryController@password')->name('galleries.password');
Route::post('galerias/selecao/enviar', 'GalleryController@submit_selection')->name('galleries.submit_selection');

Route::resource('clientes', 'CustomerController')->names('customers')->parameters(['clientes' => 'customer']);

Route::get('/storage', function () {
  Artisan::call('storage:link');
});
