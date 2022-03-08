<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\frontController;
use App\Http\Controllers\KubernetController;


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
Route::get('/delete-elastic/{id}', [DemoController::class, 'deleteelastic']);


//************************ for kubernets routes */

Route::get('/add-kubernet-content', [KubernetController::class, 'index']);
Route::post('/addkubernet', [KubernetController::class, 'create']);

Route::get('/show-kubernet-list', [KubernetController::class, 'showkubernetlist']);
Route::get('/delete-kubernet/{id}', [KubernetController::class, 'deleteKubernet']);


//***************** log OUT */
Route::get('/logout',function(){
    session()->forget('username');
    return redirect('/');

});

});

Route::get('/admin-login', [AdminLoginController::class, 'index']);
Route::post('/admin-login', [AdminLoginController::class, 'create']);

//*************** routes for Frontend */

Route::get('/', [frontController::class, 'viewfront']);

Route::get('/details/{id}', [frontController::class, 'dockerDetails']);
Route::get('/docker', [frontController::class, 'viewDocker']);

Route::get('/elastic', [frontController::class, 'viewelastic']);
Route::get('/elastic-details/{id}', [frontController::class, 'elasticDetails']);








