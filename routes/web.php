<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlanController;

//Route::get('admin/plans', 'Controllers\Admin\PlanController@index')->name('plans.index');

Route::get('admin/plans', [PlanController::class, 'index'])->name('plans.index');

Route::get('/', function () {
    return view('welcome');
});
