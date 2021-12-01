<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

//Route::resource('user', 'UsersController');
//donne ces itinéraires nommés:
//Verb          Path                  Action  Route Name
//GET           /user                 index   user.index
//GET           /user/create          create  user.create
//POST          /user                 store   user.store
//GET           /user/{user}          show    user.show
//GET           /user/{user}/edit     edit    user.edit
//PUT|PATCH     /user/{user}          update  user.update
//DELETE        /user/{user}          destroy user.destroy
Route::resource('user', UserController::class);


Route::resource('user', UserController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
