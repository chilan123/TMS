<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DivisionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index.division');
// });
Route::get('/',[DivisionController::class,'show'])->name('division.show');
Route::post('/addtrainee',[DivisionController::class,'divisionStore'])->name('division.adddivision');
// Route::get('/category/add',[CategoryController::class,'addtrinee'])->name('category.add');
Route::get('/create/new/cat',[CategoryController::class,'create'])->name('category.create');
Route::post('/addcategorytrainee',[CategoryController::class,'CategoryStore'])->name('category.store');
// Division Update
Route::post('/divisions/{division}/edit', [DivisionController::class, 'divisionedit'])->name('division.editpage');
Route::post('/divisions/{division}', [DivisionController::class, 'update'])->name('division.update');

//Category Update
Route::get('/category/{category}/edit', [CategoryController::class, 'categoryedit'])->name('category.editpage');
Route::put('/categories/update/{category}', [CategoryController::class, 'categoryupdate'])->name('category.update');

//division Delete
Route::delete('/division/{division}', [DivisionController::class, 'destroy'])->name('division.destroy');
//Route::delete('/categories/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');


//Category Delete
Route::delete('/category/{category}', [CategoryController::class, 'CategoryDestroy'])->name('category.destroy');

