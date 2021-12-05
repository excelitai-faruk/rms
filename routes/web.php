<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\SuperAdmin\SuperAdminController;

// Eqramul
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StockAdjustmentController;
use App\Http\Controllers\TableController;


// Pronoy
use App\Http\Controllers\Backend\FoodMenuCategoryController;
use App\Http\Controllers\Backend\IngredientCategoriesController;

// Faruk
use App\Http\Controllers\Backend\OutletController;
use App\Http\Controllers\SettingController;


// Radia
use App\Http\Controllers\Backend\ExpenseController;
use App\Http\Controllers\Backend\PaymentMethodController;
use App\Http\Controllers\Employee\DepartmentController;    // reltionship acche department er sathy tai employee folder er vitor



use Illuminate\Support\Facades\Auth;

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


//  ************************************ End Login Method *************************************************** //




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



//************************************************Product Purchasing****************************************** */

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


//******************************************   Product Supplier   *************************************************** */
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



//************************************************   Stock   ************************************************************************ */
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


//*********************************************************  Table    *****************************************************************/
//Add Table
Route::get('table/add', [TableController::class, 'TableAdd'])->name('table.add');

//Store Table
Route::post('/table/store', [TableController::class, 'TableStore'])->name('table.store');




//********************************************************* Stock Addjustment *********************************************************** */
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


// Radia
//*************************************** Customer/User Crud Operation start *************************************//

//User Add
Route::get('/user/add',[UserController::class , 'CustomerAdd'])->name('customer.add');
// User store 
Route::post('/user/store',[UserController::class, 'CustomerStore'])->name('customer.store');
// User View 
Route::get('/user/view', [UserController::class, 'CustomerView'])->name('customer.view');
// User Edit
Route::get('/user/edit/{id}', [UserController::class, 'CustomerEdit'])->name('customer.edit');
// User Update
Route::post('/user/update', [UserController::class, 'CustomerUpdate'])->name('customer.update');
// User Delete
Route::get('/user/delete/{id}', [UserController::class, 'CustomerDelete'])->name('customer.delete'); 


//*************************************** Expense and Expense Items Crud Operation start *************************************//
Route::prefix('expense')->group(function(){

    //Expense_Item Crud start

//Expense_Item Add
Route::get('/expenseitem/add',[ExpenseController::class , 'ExpenseItemAdd'])->name('expenseitem.add');
// Expense_Item store 
Route::post('/expenseitem/store',[ExpenseController::class, 'ExpenseItemStore'])->name('expenseitem.store');
// Expense_Item View 
Route::get('/expenseitem/view', [ExpenseController::class, 'ExpenseItemView'])->name('expenseitem.view');
// Expense_Item Edit
Route::get('/expenseitem/edit/{id}', [ExpenseController::class, 'ExpenseItemEdit'])->name('expenseitem.edit');
// Expense_Item Update
Route::post('/expenseitem/update', [ExpenseController::class, 'ExpenseItemUpdate'])->name('expenseitem.update');
// Expense_Item Delete
Route::get('/expenseitem/delete/{id}', [ExpenseController::class, 'ExpenseItemDelete'])->name('expenseitem.delete');


    //Expense Crud start

//Expense Add
Route::get('/add',[ExpenseController::class , 'ExpenseAdd'])->name('expense.add');
// Expense store 
Route::post('/store',[ExpenseController::class, 'ExpenseStore'])->name('expense.store');
// Expense View 
Route::get('/view', [ExpenseController::class, 'ExpenseView'])->name('expense.view');
// Expense Edit
Route::get('/edit/{id}', [ExpenseController::class, 'ExpenseEdit'])->name('expense.edit');
// Expense Update
Route::post('/update', [ExpenseController::class, 'ExpenseUpdate'])->name('expense.update');
// Expense Delete
Route::get('/delete/{id}', [ExpenseController::class, 'ExpenseDelete'])->name('expense.delete');

});

// **************************************************** Payment Method Crud Operation Start ***********************************************************//
Route::prefix('payment')->group(function(){

//payment Add
Route::get('/add',[PaymentMethodController::class , 'PaymentAdd'])->name('payment.add');
// payment store 
Route::post('/store',[PaymentMethodController::class, 'PaymentStore'])->name('payment.store');
// payment View 
Route::get('/view', [PaymentMethodController::class, 'PaymentView'])->name('payment.view');
// payment Edit
Route::get('/edit/{id}', [PaymentMethodController::class, 'PaymentEdit'])->name('payment.edit');
// payment Update
Route::post('/update', [PaymentMethodController::class, 'PaymentUpdate'])->name('payment.update');
// payment Delete
Route::get('/delete/{id}', [PaymentMethodController::class, 'PaymentDelete'])->name('payment.delete');

});

//  ******************************************* Employee Crud Start ************************************** //

//employee Add
Route::get('/employee/add',[EmployeeController::class , 'EmployeeAdd'])->name('employee.add');
// employee store 
Route::post('/employee/store',[EmployeeController::class, 'EmployeeStore'])->name('employee.store');
// employee View 
Route::get('/employee/view', [EmployeeController::class, 'EmployeeView'])->name('employee.view');
// employee Edit
Route::get('/employee/edit/{id}', [EmployeeController::class, 'EmployeeEdit'])->name('employee.edit');
// employee Update
Route::post('/employee/update', [EmployeeController::class, 'EmployeeUpdate'])->name('employee.update');
// Employee Delete
Route::get('/employee/delete/{id}', [EmployeeController::class, 'EmployeeDelete'])->name('employee.delete');

//  *********************************** Department Crud start **************************************************//

// dep Add
Route::get('/dep/add',[DepartmentController::class , 'DepAdd'])->name('dep.add');
// dep store 
Route::post('/dep/store',[DepartmentController::class, 'DepStore'])->name('dep.store');
// // dep View 
// Route::get('/dep/view', [DepartmentController::class, 'DepView'])->name('dep.view');
// dep Edit
Route::get('/dep/edit/{id}', [DepartmentController::class, 'DepEdit'])->name('dep.edit');
// dep Update
Route::post('/dep/update', [DepartmentController::class, 'DepUpdate'])->name('update.dep');
// dep Delete
Route::get('/dep/delete/{id}', [DepartmentController::class, 'DepDelete'])->name('dep.delete');






//////////////////////////  outlet route //////////////////////////////////////////////////


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

    
    //********************************************************* Setting Crud start **********************************//

    Route::get('setting/add', [SettingController::class, 'SettingtAdd'])->name('setting.show');

    //setting stor
     Route::post('setting/store', [SettingController::class, 'SettingStore'])->name('setting.store');







