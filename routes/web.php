<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\WerkenBijControlller;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/pizza', [PizzaController::class, 'index'])->name('pagina.index');
Route::get('/about_us', [AboutusController::class, 'index']);
Route::get('/werken_bij_ons', [WerkenBijControlller::class, 'index']);

Route::group(['middleware'=>'auth'], function(){Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/resetpassword/{id}', [AdminController::class, 'resetpassword'])->name('admin.resetpassword');
    Route::put('/admin/updatepassword/{id}', [AdminController::class, 'updatepassword'])->name('admin.updatepassword');
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
    Route::resource('/employee', EmployeeController::class);
    Route::resource('/customer', CustomerController::class);
});


require __DIR__.'/auth.php';
