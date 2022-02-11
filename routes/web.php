<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\WerkenBijControlller;
use App\Http\Controllers\winkelmandjeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderPizzaController;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/order', [OrderController::class, 'index'])->name('pagina.index');

Route::post('/order',[OrderController::class ,'store'])->Name('order.store');

//nadat de klant zijn gegevens ingevuld heeft en op verder geklinkt heeft gaat hij naar de pagina om de pizzas te bestellen
Route::get('/order/{order}/pizzas',[OrderController::class,'show'])->name('order.pizzas');

//pizzas bestellen (order en pizza in de tussentabel voegen -> (order_pizza table)
Route::post('/order/{orderid}/pizzas/{pizzaid}',[OrderPizzaController::class,'store'])->name('order_pizzas.store');


//de show weergeeft de winkelmand.blade.php met de order/klant gegevens en de pizzas die de klant heeft aan zijn bestelling toegevoegd.\
Route::get('/winkelmand/{orderid}',[OrderPizzaController::class,'show'])->name('winkelmand.show');

Route::get('/about_us', [AboutusController::class, 'index']);
Route::get('/werken_bij_ons', [WerkenBijControlller::class, 'index']);

Route::post('/pizza/delete/{pizzaid}/{orderid}',[OrderPizzaController::class,'destroy'])->name('order_pizzas.destroy');


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
