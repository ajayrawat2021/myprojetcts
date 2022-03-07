<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;
use App\Http\Controllers\AdminLoginController;



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

Route::group(['middleware'=>'admin_auth'],function(){
//return views
Route::get('/dashboard', [DemoController::class, 'index']);
Route::get('/add-docker-content', [DemoController::class, 'viewDocker']);
Route::post('/addDocker', [DemoController::class, 'addDocker']);

Route::get('/show-docker-list', [DemoController::class, 'showDockerlist']);
Route::get('/delete/{id}', [DemoController::class, 'delete']);

//*********** for elastic Search */

Route::get('/add-elasticsearch-content', [DemoController::class, 'viewelastic']);
Route::post('/addelastic', [DemoController::class, 'addelastic']);
Route::get('/show-elasticsearch-list', [DemoController::class, 'showelasticlist']);


//***************** log OUT */
Route::get('/logout',function(){
    session()->forget('username');
    return redirect('/');

});


});


Route::get('/', [AdminLoginController::class, 'index']);
Route::post('/admin-login', [AdminLoginController::class, 'create']);








// ///insert user data
// Route::post('/submituser', [DemoController::class, 'create']);
// Route::get('/delete/{id}', [DemoController::class, 'delete']);




