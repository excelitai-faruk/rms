<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\SuperAdmin\SuperAdminController;


use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StockAdjustmentController;

use App\Http\Controllers\TableController;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Backend\FoodMenuCategoryController;
use App\Http\Controllers\Backend\IngredientCategoriesController;


use App\Http\Controllers\Backend\OutletController;

use App\Http\Controllers\SettingController;





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



//******************Product Purchasing*************************** */

//Add purchase
Route::get('purchase/add', [PurchaseController::class, 'PurchaseAdd'])->name('purchase.add');


//Store purchase
Route::post('/purchase/store', [PurchaseController::class, 'PurchaseStore'])->name('purchase.store');

//Purchase view

Route::get('purchase/view',[PurchaseController::class,'PurchaseView'])->name('veiw.purchase');

//Purchase Edit
Route::get('/purchase/edit/{id}',[PurchaseController::class,'PurchaseEdit'])->name('purchase.edit');


//Purchase Update
Route::post('/purchase/update',[PurchaseController::class,'PurchaseUpdate'])->name('purchase.update');


//Purchase Delete
Route::post('/purchase/delete',[PurchaseController::class,'PurchaseDelete'])->name('purchase.delete');

//******************Product Supplier*************************** */
//Add Supplier
Route::get('supplier/add', [SupplierController::class, 'SupplierAdd'])->name('supplier.add');

//Store Supplier
Route::post('/supplier/store', [SupplierController::class, 'SupplierStore'])->name('supplier.store');


//Supplier view

Route::get('supplier/view',[SupplierController::class,'SupplierView'])->name('veiw.supplier');

//Supplier Edit
Route::get('/supplier/edit/{id}',[SupplierController::class,'SupplierEdit'])->name('supplier.edit');


//Supplier Update
Route::post('/supplier/update',[SupplierController::class,'SupplierUpdate'])->name('supplier.update');

//Supplier Delete
Route::post('/supplier/delete',[SupplierController::class,'SupplierDelete'])->name('supplier.delete');



//******************Stock*************************** */
//Add Stock
Route::get('stock/add', [StockController::class, 'StockAdd'])->name('stock.add');

 //Store Stock
 Route::post('/stock/store', [StockController::class, 'StockStore'])->name('stock.store');


 //Stock view view

Route::get('stock/view',[StockController::class,'StockView'])->name('veiw.stock');

//Stock Edit
 Route::get('/stock/edit/{id}',[StockController::class,'StockEdit'])->name('stock.edit');


 //Stock Update
Route::post('/stock/update',[StockController::class,'StockUpdate'])->name('stock.update');

//Stock Delete
Route::post('/stock/delete',[StockController::class,'StockDelete'])->name('stock.delete');


//******************Table***************************/
//Add Table
Route::get('table/add', [TableController::class, 'TableAdd'])->name('table.add');

//Store Table
Route::post('/table/store', [TableController::class, 'TableStore'])->name('table.store');




//******************Stock Addjustment*************************** */
//Add Stock Addjustment
Route::get('stock_adj/add', [StockAdjustmentController::class, 'StockAdjustmentAdd'])->name('stock_adj.add');

//Store Stock Addjustment
Route::post('/stock_adj/store', [StockAdjustmentController::class, 'StockAdjustmentStore'])->name('stock_adj.store');

//Stock view Addjustment

Route::get('stock_adj/view',[StockAdjustmentController::class,'StockAdjustmentView'])->name('stock_adj.view');


//Stock Edit Addjustment
Route::get('/stock_adj/edit/{id}',[StockAdjustmentController::class,'StockAdjustmentEdit'])->name('stock_adj.edit');

//Stock Update Addjustment
Route::post('/stock_adj/update',[StockAdjustmentController::class,'StockAdjustmentUpdate'])->name('stock_adj.update');


//Stock Delete Addjustment
Route::post('/stock_adj/delete',[StockAdjustmentController::class,'StockAdjustmentDelete'])->name('stock_adj.delete');


//////////////////////////  outlet rout //////////////////////////////////////////////////


// Admin All Brands Route Group 
Route::get('/add', [OutletController::class, 'OutletAdd'])->name('outlet.add');


    Route::post('/store', [OutletController::class, 'OutletStore'])->name('outlet.store');
    //outlet view
    Route::get('outlet/view',[OutletController::class,'OutletView'])->name('veiw.outlet');
    //outlet Delete
    Route::post('/outlet/delete',[OutletController::class,'OutletDelete'])->name('outlet.delete');


    //outlet Edit
    Route::get('outletdeshboard/add', [OutletController::class, 'OutletDeshbord'])->name('outlet.deshbord');

    Route::get('/outlet/edit/{id}',[OutletController::class,'OutletEdit'])->name('outlet.edit');
// outlet Update
    Route::post('/outlet/update',[OutletController::class,'OutletUpdate'])->name('outlet.update');

    

    // seting

    Route::get('setting/add', [SettingController::class, 'SettingtAdd'])->name('setting.show');

    //setting stor
     Route::post('setting/store', [SettingController::class, 'SettingStore'])->name('setting.store');







