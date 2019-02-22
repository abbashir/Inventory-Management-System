<?php

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


Route::get('/', 'frontEndController@index')->middleware('myAuth');
Route::get('/8070', 'frontEndController@adminLogin');

Auth::routes();

Route::get('/dashboard', 'HomeController@index');


/* ----------Route for barnds start---------*/

//brands alise
Route::get('/brands', 'BrandsController@createbrands');

//insert
Route::post('/save', 'BrandsController@storebrands');

//edit alise
Route::get('/brands/update/{id}', 'BrandsController@editBrand');

//update
Route::post('/update', 'BrandsController@updateBrand');

//delete
Route::get('/brands/delete/{id}', 'BrandsController@deleteBrand');

/* ----------Route for barnds End---------*/





/* ----------Route for Category start---------*/

//category alise
Route::get('/category', 'CategoryController@showCategory');

//insert
Route::post('/saveCategory', 'CategoryController@storeCategory');

//edit alise
Route::get('/category/update/{id}', 'CategoryController@editCategory');

//update
Route::post('/updateCategory', 'CategoryController@updateCategory');

//delete
Route::get('/category/delete/{id}', 'CategoryController@deleteCategory');

/* ----------Route for Category End---------*/




/* ----------Route for product start---------*/
//just alise
Route::get('/product/add-product', 'ProductsController@addProductPage');
//insert
Route::post('/saveProduct', 'ProductsController@storeProducts');
//manage poduct
Route::get('/product/manage', 'ProductsController@ManageProduct');
//delete poduct
Route::get('/product/delete/{id}', 'ProductsController@deleteProduct');
//edit product
Route::get('/product/update/{id}', 'ProductsController@editProduct');
//update
Route::post('/updateProduct', 'ProductsController@updateProduct');

/* ----------Route for product end---------*/




/* ----------Route for customers start---------*/
//just alise
Route::get('/customers/add', 'CustomersController@customersAdd');
//insert
Route::post('/saveCustomer', 'CustomersController@storeCustomers');
//manage poduct
Route::get('/customers/manage', 'CustomersController@ManageCustomers');
//delete poduct
Route::get('/customers/delete/{id}', 'CustomersController@deleteCustomers');
//edit alise
Route::get('/customers/update/{id}', 'CustomersController@editCustomers');
//update
Route::post('/updateCustomers', 'CustomersController@updateCustomers');

/* ----------Route for customers end---------*/




/* ----------Route for Invoice start---------*/
//just alise
Route::get('/invoice/add', 'InvoiceController@invoiceAdd');
//manage poduct
Route::get('/invoice/manage', 'InvoiceController@ManageInvoive');
//insert
Route::post('/saveInvoice', 'InvoiceController@storeInvoice');

//test
Route::get('/test', 'InvoiceController@test');

/* ----------Route for Invoice end---------*/



/* ----------Route for Purchase start---------*/
//just alise
Route::get('/purchase/add', 'PurchaseController@purchaseAdd');
//insert
Route::post('/savePurchase', 'PurchaseController@storePurchase');
//manage poduct
Route::get('/purchase/manage', 'PurchaseController@ManagePurchase');

/* ----------Route for Purchase end---------*/



/* ----------Route for Bank start---------*/
//just alise
Route::get('/bank/add', 'BankController@BankAdd');
//insert
Route::post('/banksave', 'BankController@storeBank');
//delete
Route::get('/bank/delete/{id}', 'BankController@deleteBank');
//edit alise
Route::get('/bank/update/{id}', 'BankController@editBank');
//update
Route::post('/Bankupdate', 'BankController@updateBank');

//bank transaction
Route::get('/bank/transaction', 'BankController@BankTransaction');
 
//insert  
Route::post('/saveTransaction', 'BankController@StoreTransaction');

//view Bank Ledger
Route::get('/bank/ledger/{id}', 'BankController@ledgerBank');

/* ----------Route for Bank end---------*/