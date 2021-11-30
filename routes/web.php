<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\SuperAdmin\SuperAdminController;
use App\Http\Controllers\Backend\FoodMenuCategoryController;
use App\Http\Controllers\Backend\IngredientCategoriesController;




Route::get('/', function () {
    return view('auth.admin.login');
});

 Auth::routes();
 //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//////////////////////////  User Login Start //////////////////////////////////////////////////
Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/login','auth.user.login')->name('login');
          Route::view('/register','auth.user.register')->name('register');
          Route::post('/create',[UserController::class,'create'])->name('create');
          Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
          Route::view('/home','auth.user.home')->name('home');
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
          Route::get('/add-new',[UserController::class,'add'])->name('add');
    });

});

//////////////////////////  User Login end //////////////////////////////////////////////////



//////////////////////////  Admin Login Start //////////////////////////////////////////////////


Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','auth.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','admin.index')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    });

});
//////////////////////////  Admin Login End //////////////////////////////////////////////////


//////////////////////////  Employee Login Start //////////////////////////////////////////////////
Route::prefix('employee')->name('employee.')->group(function(){

       Route::middleware(['guest:employee','PreventBackHistory'])->group(function(){
            Route::view('/login','auth.employee.login')->name('login');
            Route::view('/register','dashboard.employee.register')->name('register');
            Route::post('/create',[EmployeeController::class,'create'])->name('create');
            Route::post('/check',[EmployeeController::class,'check'])->name('check');
       });

       Route::middleware(['auth:employee','PreventBackHistory'])->group(function(){
            Route::view('/home','auth.employee.home')->name('home');
            Route::post('logout',[EmployeeController::class,'logout'])->name('logout');
       });

});

//////////////////////////  Employee Login End //////////////////////////////////////////////////


//////////////////////////  Super Admin Login Start //////////////////////////////////////////////////
Route::prefix('superadmin')->name('superadmin.')->group(function(){
    Route::middleware(['guest:superadmin','PreventBackHistory'])->group(function(){
         Route::view('/login','auth.superadmin.login')->name('login');
         Route::view('/register','auth.superadmin.register')->name('register');
         Route::post('/create',[SuperAdminController::class,'create'])->name('create');
         Route::post('/check',[SuperAdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:superadmin','PreventBackHistory'])->group(function(){
         Route::view('/home','auth.superadmin.home')->name('home');
         Route::post('logout',[SuperAdminController::class,'logout'])->name('logout');
    });
});
//////////////////////////  Super Admin Login end ///////////////////////////////////////////////////








//////////////////////////////////  Food Menu Category Start //////////////////////////////////////////////

//Food Menu Add
Route::get('/add/foodmenu',[FoodMenuCategoryController::class, 'FoodCategoryAdd'])->name('add.foodmenucategory');

//Food Menu Store

Route::post('/store/foodmenu',[FoodMenuCategoryController::class, 'FoodCategoryStore'])->name('store.foodmenucategory');

//Food Menu View

Route::get('/view/foodmenu',[FoodMenuCategoryController::class, 'FoodCategoryView'])->name('view.foodmenucategory');

//Food Menu Edit

Route::get('/edit/{id}/foodmenu',[FoodMenuCategoryController::class, 'FoodCategoryEdit'])->name('edit.foodmenucategory');

//Food Menu Update

Route::post('/update/foodmenu',[FoodMenuCategoryController::class, 'FoodCategoryUpdate'])->name('update.foodmenucategory');

//Food Menu Delete

Route::get('/delete/{id}/foodmenu',[FoodMenuCategoryController::class, 'FoodCategoryDelete'])->name('delete.foodmenucategory');


//////////////////////////////////  Food Menu Category End //////////////////////////////////////////////







//////////////////////////////////  Ingredient Categories Start //////////////////////////////////////////////

//Ingredient Categories Add

Route::get('/add/ingredient',[IngredientCategoriesController::class, 'IngredientCategoriesAdd'])->name('add.ingredientcategories');

//Ingredient Categories Store

Route::post('/store/ingredient',[IngredientCategoriesController::class, 'IngredientCategoriesStore'])->name('store.ingredientcategories');

//View

Route::get('/view/ingredient',[IngredientCategoriesController::class, 'IngredientCategoriesView'])->name('view.ingredientcategories');

//Ingredient Categories  Edit

Route::get('/edit/{id}/ingredient',[IngredientCategoriesController::class, 'IngredientCategoriesEdit'])->name('edit.ingredientcategories');

//Ingredient Categories  Update

Route::post('/update/ingredient',[IngredientCategoriesController::class, 'IngredientCategoriesUpdate'])->name('update.ingredientcategories');


//Food Menu Delete

Route::get('/delete/{id}/ingredient',[IngredientCategoriesController::class, 'IngredientCategoriesDelete'])->name('delete.ingredientcategories');



//////////////////////////////////  Ingredient Categories End //////////////////////////////////////////////




/////////////////////////////////////  Ingredient Unit  //////////////////////////////////////////////////

//Ingredient Unit Add

Route::get('/add/ingredientunit',[IngredientUnitsController::class, 'IngredientUnitsAdd'])->name('add.ingredientunits');

//Ingredient Unit Store

Route::post('/store/ingredientunit',[IngredientUnitsController::class, 'IngredientCategoriesStore'])->name('store.ingredientunits');


















