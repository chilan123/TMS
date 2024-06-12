<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DivisionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\DegreeorcourseController;
use App\Http\Controllers\UniorinstituteController;
use App\Http\Controllers\DurationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
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

//home
Route::get('/home', function () {
    return view('pages.home'); // assuming your Blade file is located at resources/views/page/home.blade.php
});




    //degreeorcourse Routes
    Route::group(['as' => '.degreeorcourse'], function () {
        Route::get('/degree', [DegreeorcourseController::class, 'viewdata']);
        Route::post('/savedeg', [DegreeorcourseController::class, 'storedeg']);
        Route::post('/updatedegdata', [DegreeorcourseController::class, 'updatedegdata']);
        Route::get('/deletedeg/{id}', [DegreeorcourseController::class, 'deletedeg']);
        Route::get('/updatedeg/{id}', [DegreeorcourseController::class, 'updatedegview']);
    });

    //Uniorinstitute Routes
    Route::group(['as' => '.uniorinstitute'], function () {
        Route::get('/university', [UniorinstituteController::class, 'viewdata']);
        Route::post('/saveuniorinstitute', [UniorinstituteController::class, 'storeuni']);
        Route::get('/deleteuniorinstitute/{id}', [UniorinstituteController::class, 'deleteuniorinstitute']);
        Route::get('/updateuniorinstitute/{id}', [UniorinstituteController::class, 'updateuniorinstituteview']);
        Route::post('/updateunidata', [UniorinstituteController::class, 'update']);
    });

      //duration
      Route::group(['as' => '.duration'], function () {
        Route::get('/duration', [DurationController::class, 'viewdata']);
        Route::post('/saveduration', [DurationController::class, 'store']);
        Route::get('/deleteduration/{id}', [DurationController::class, 'deleteduration']);
        Route::get('/updateduration/{id}', [DurationController::class, 'updatedurationview']);
        Route::post('/updatedata', [DurationController::class, 'update']);
    });

Route::group(['as' => '.supervisor'], function () {
    Route::get('/supervisor', [SupervisorController::class, 'viewdata']); // Adjust path if needed
    Route::post('/savesupervisor', [SupervisorController::class, 'storesupervisor']);
    Route::get('/deletesupervisor/{id}', [SupervisorController::class, 'deletesupervisor']);
    Route::get('/updatesupervisor/{id}', [SupervisorController::class, 'updatesupervisorview']);
    Route::post('/updatesupervisor', [SupervisorController::class, 'update']); // Adjust endpoint name if needed
});


// divison and category
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

