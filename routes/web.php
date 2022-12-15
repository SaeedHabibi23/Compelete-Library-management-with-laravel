<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
// use category controller here
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LendingBookController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin' , 'middleware'=>['isAdmin' , 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard', [AdminController::class , 'index'])->name('admin.dashboard');
    // This Route is to display Admin Dashboard .................................
    Route::get('dashboard', [AdminController::class , 'index'])->name('admin.dashboard');

    // This Roue is to display Categories Page........................................
    Route::get('CategoryPage', [CategoryController::class , 'CategoryPage'])->name('admin.CategoryPage');
   // This Roue is to store any Category........................................
    Route::post('AdminStoreCategoryBook', [CategoryController::class , 'AdminStoreCategoryBook'])->name('admin.AdminStoreCategoryBook');
    // This Roue is to delete any Category........................................
    Route::delete('/delete-category/{cat_id}', [CategoryController::class , 'destroyCategory'])->name('admin.delete-category');
    // This Roue is to review the information of any Category........................................
    Route::post('/edit-category/{cat_id}', [CategoryController::class , 'edit'])->name('admin.edit-book');
    // This Roue is to update the form of any Category........................................
    Route::post('UpdateAnyOtherCategory', [CategoryController::class , 'update'])->name('admin.UpdateAnyOtherCategory');

    // End of category section here............................................

    // Start Book Section here.........................................................
    
    Route::get('Books', [BookController::class , 'Books'])->name('admin.Books');
    Route::post('AdminStoreBook', [BookController::class , 'AdminStoreBook'])->name('admin.AdminStoreBook');
    Route::delete('/delete-book/{book_id}', [BookController::class , 'destroyBook'])->name('admin.delete-book');
    Route::post('edit-book/{book_id}', [BookController::class , 'edit'])->name('admin.edit-book');
    Route::post('UpdateAnyOtherBook', [BookController::class , 'UpdateAnyOtherBook'])->name('admin.UpdateAnyOtherBook');



// For LEnidng and delivery books
    Route::get('deliveryBook', [LendingBookController::class , 'deliveryBook'])->name('admin.deliveryBook');
    Route::get('giveDeliverBook', [LendingBookController::class , 'giveDeliverBook'])->name('admin.giveDeliverBook');
    Route::post('giveDeliverToPerson', [LendingBookController::class , 'giveDeliverToPerson'])->name('admin.giveDeliverToPerson');
    Route::post('role-update/{lending_id}', [LendingBookController::class , 'rollUpdate'])->name('admin.rollUpdate');
    Route::post('role-updateLending/{lending_id}', [LendingBookController::class , 'updateDeliverBook'])->name('admin.role-updateLending');
    Route::post('updateDeliverToPerson', [LendingBookController::class , 'updateDeliverToPerson'])->name('admin.updateDeliverToPerson');
    Route::delete('delete-lending/{lending_id}', [LendingBookController::class , 'destroyLending'])->name('admin.delete-lending');
 


});


Route::group(['prefix' => 'user' , 'middleware'=>['isUser' , 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard', [UserController::class , 'index'])->name('user.dashboard');
});
