<?php

require_once __DIR__ . "/../vendor/autoload.php";

use AbieSoft\App;
use AbieSoft\Http\Route;
use Application\Controllers\FileController;
use Application\Controllers\HomeController;
use Application\Controllers\UsersController;

$app = new App;


Route::data(page: 'users', controller: UsersController::class, auth: true);
// Route::data(page: 'file', controller: FileController::class, auth: true);
Route::get('/file{:folder}', [FileController::class, 'index']);
Route::get('/file{:get}', [FileController::class, 'loadingfile']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', 'login');


$app->start();
