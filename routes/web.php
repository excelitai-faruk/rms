<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\SuperAdmin\SuperAdminController;


use App\Http\Controllers\Backend\ExpenseController;
use App\Http\Controllers\Backend\PaymentMethodController;



Route::get('/', function () {
    return view('auth.admin.login');
});

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


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
//////////////////////////  Super Admin Login end //////////////////////////////////////////////////


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
