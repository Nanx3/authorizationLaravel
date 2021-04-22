<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('/employees', EmployeeController::class)->middleware(['auth']);

/* // List
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');

// Creation
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');

Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');

// SHOW / UPDATE
// employees?id=1
// employees/1/edit
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');

Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');

// DELETE
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy')->middleware(['auth', 'can:delete.employee']);
 */