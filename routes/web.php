<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('login');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('inbox',function(){
	echo "inbox";
})->middleware('verified');


//Employee routes here
Route::get('/employee','EmployeeController@index');
Route::post('/register-employee','EmployeeController@RegEmp');
Route::get('/delete-employee/{id}','EmployeeController@DelEmp');
Route::get('/single-employee/{id}','EmployeeController@SingleEmp');
Route::post('/update-employee/{id}','EmployeeController@UpdEmp');


// Products Route Here
Route::get('/product','ProductController@index');
Route::get('/add-product','ProductController@addProduct');
Route::post('/save-product','ProductController@SaveProduct');
Route::get('/single-product/{prod_id}','ProductController@singleProductview');
Route::get('/edit-product/{prod_id}','ProductController@singleProduct');
Route::post('/update-product/{prod_id}','ProductController@UpdateProduct');

//Damage products route
Route::get('/all-damage-products','ProductController@damageindex');
Route::get('/add-dmg','ProductController@damageAdd');
Route::POST('save-dmg-product','ProductController@saveDamage');
Route::get('/product-dmg-export','ProductController@damageexport');

//Excel export & import routs
Route::get('/product-export','ProductController@export');
Route::post('/import-products','ProductController@import');



//Store Route
Route::get('/store','storeController@storePage');
Route::post('/add-store','storeController@AddStore');
Route::get('/store-edit/{stored}','storeController@EditStore');
Route::Post('/store-update/{storeId}','storeController@UpdateStore');

//Sub Store Route
Route::get('/substore','SubstoreController@substorePage');
Route::post('/subadd-store','SubstoreController@AddsubStore');
Route::get('/substore-edit/{substoreid}','SubstoreController@EditsubStore');
Route::Post('/substore-update/{substoreid}','SubstoreController@UpdatesubStore');



//Department Route
Route::get('/department','departmentController@departmentPage');
Route::post('/add-department','departmentController@AddDepartment');
Route::get('/department-edit/{department_id}','departmentController@EditDepartment');
Route::Post('/department-update/{department_id}','departmentController@UpdateDepartment');

//Category Route
Route::get('/category','categoryController@categoryPage');
Route::post('/add-category','categoryController@AddCategory');
Route::get('/category-edit/{category_id}','categoryController@EditCategory');
Route::Post('/category-update/{category_id}','categoryController@UpdateCategory');

//Sub Category Route
Route::get('/sub-category','subcategoryController@subcategoryPage');
Route::post('/add-subcategory','subcategoryController@AddsubCategory');
Route::get('/subcategory-edit/{sub_cat_id}','subcategoryController@EditsubCategory');
Route::Post('/subcategory-update/{sub_cat_id}','subcategoryController@UpdatesubCategory');


//supplier routs
Route::get('/supplier','supplierController@index');
Route::post('/add-supplier','supplierController@addSupplier');
Route::get('/allSupplier','supplierController@indexall');
Route::get('/single-supplier/{sup_id}','supplierController@viewSupllier');
Route::get('/single-supplierup/{sup_id}','supplierController@viewSupllierup');

Route::post('/update-supplier/{sup_id}','supplierController@updateSupplier');



// pos routes
Route::get('/pos','PosController@index');

//order routes
Route::get('/add-order','OrderController@index');
Route::post('/add_cart','OrderController@AddCart');
Route::post('/update-cart/{rowId}','OrderController@UpdateCart');
Route::get('/remove-cart/{rowId}','OrderController@RemoveCart');
Route::POST('/create-invoice','OrderController@InvoiceCart');
Route::POST('/final-nvoice','OrderController@FinalInvoiceCart');
Route::get('/all-order','OrderController@allOrder');
Route::get('/single-order/{id}','OrderController@viewOrder');

//barcode routes
Route::get('/barcode','barcodeController@index');
Route::post('/add_barcode','barcodeController@AddBarcode');
Route::get('/clear-barcod','barcodeController@clearBarcode');
Route::post('/print_barcode','barcodeController@printBarcode');



//stock
Route::get('/stockProduct','ProductController@StockProduct');
Route::get('/stock-reports','StockController@index');
Route::get('/DeleveryReports','StockController@DeleveryReport');


//Fabrics Routs
Route::get('/add-fabric','FabricController@index');
Route::post('/save-fabric','FabricController@SaveFabric');
Route::get('/all-fabric','FabricController@allFabric');
Route::get('/singleFabric/{id}','FabricController@singleFabric');
Route::get('/edit-fabric/{id}','FabricController@editFabric');
Route::post('/update-fabric/{id}','FabricController@UpdateFabric');
route::get('/issue-fabric','FabricController@issueFabric');
route::get('/issued-fabric','FabricController@allissuedFabric');

Route::post('/fa_add_cart','FabricController@AddCart');
Route::post('/fa_update_cart/{rowId}','FabricController@UpdateCart');
Route::POST('/create-fabric-invoice','FabricController@InvoiceCart');
Route::POST('/fabric-final-nvoice','FabricController@FinalInvoiceCart');
Route::get('/single-issue/{id}','FabricController@viewIssue');


//Docekt route
Route::get('/add-docket','DocketController@index');
route::post('/save-docket','DocketController@SaveDocket');
Route::get('/all-dockets','DocketController@AllDocket');
route::get('/singleDocket/{id}','DocketController@SingleView');
Route::get('/docket-export','DocketController@export');
Route::get('/edit-docket/{id}','DocketController@editDocket');
Route::post('/update-docket/{id}','DocketController@updateDocket');


//PDF Routes
Route::get('/pdf-docket','PdfController@pdfDocket');
Route::get('/pdf-product','PdfController@pdfProduct');
Route::get('/pdf-issue-fabric','PdfController@pdfissuefabric');
Route::get('/pdf-issue-thread','PdfController@pdfissuethread');
Route::get('/pdf-single-docket/{id}','PdfController@pdfsingledocket');
Route::get('/product-dmg-export-pdf','PdfController@pdfdamageproduct');



//Thread Routs
Route::get('/add-thread','ThreadController@index');
Route::post('/save-thread','ThreadController@SaveThread');
Route::get('/all-thread','ThreadController@allThread');
Route::get('/singleThread/{id}','ThreadController@singleThread');
Route::get('/edit-thread/{id}','ThreadController@editThread');
Route::post('/update-thread/{id}','ThreadController@UpdateThread');
route::get('/issue-thread','ThreadController@issueThread');
route::get('/issued-thread','ThreadController@allissuedThread');

Route::post('/th_add_cart','ThreadController@AddCart');
Route::post('/th_update_cart/{rowId}','ThreadController@UpdateCart');
Route::POST('/create-thread-invoice','ThreadController@InvoiceCart');
Route::POST('/thread-final-nvoice','ThreadController@FinalInvoiceCart');
Route::get('/th-single-issue/{id}','ThreadController@viewIssue');

//Chamical Routs
Route::get('/add-chamical','ChamicalController@index');
Route::post('/save-chamical','ChamicalController@SaveChamical');
Route::get('/all-chamical','ChamicalController@allChamical');
Route::get('/singleChamical/{id}','ChamicalController@singleChamical');
Route::get('/edit-chamical/{id}','ChamicalController@editChamical');
Route::post('/update-chamical/{id}','ChamicalController@UpdateChamical');
route::get('/issue-chamical','ChamicalController@issueChamical');
route::get('/issued-chamical','ChamicalController@allissuedChamical');
Route::post('/ch_add_cart','ChamicalController@AddCart');
Route::post('/ch_update-cart/{rowId}','ChamicalController@UpdateCart');
Route::POST('/create-chamical-invoice','ChamicalController@InvoiceCart');
Route::POST('/chamical-final-nvoice','ChamicalController@FinalInvoiceCart');
Route::get('/ch-single-issue/{id}','ChamicalController@viewIssue');

//Accessories Routs
Route::get('/add-Accessories','AccessoriesController@index');
Route::post('/save-Accessories','AccessoriesController@SaveAccessories');
Route::get('/all-Accessories','AccessoriesController@allAccessories');
Route::get('/singleAccessories/{id}','AccessoriesController@singleAccessories');
Route::get('/edit-Accessories/{id}','AccessoriesController@editAccessories');
Route::post('/update-Accessories/{id}','AccessoriesController@UpdateAccessories');
route::get('/issue-Accessories','AccessoriesController@issueAccessories');
route::get('/issued-Accessories','AccessoriesController@allissuedAccessories');
Route::post('/acc_add_cart','AccessoriesController@AddCart');
Route::post('/acc_update-cart/{rowId}','AccessoriesController@UpdateCart');
Route::POST('/create-Accessories-invoice','AccessoriesController@InvoiceCart');
Route::POST('/Accessories-final-nvoice','AccessoriesController@FinalInvoiceCart');
Route::get('/ac-single-issue/{id}','AccessoriesController@viewIssue');


//Store Route
Route::get('/acc_name','AccessoriesController@acc_namePage');
Route::post('/add-acc_name','AccessoriesController@Addacc_name');
Route::get('/acc_name-edit/{acc_id}','AccessoriesController@Editacc_name');
Route::Post('/acc_name-update/{acc_id}','AccessoriesController@Updateacc_name');

//Repots Route
Route::get('/reports-genersl-items','ReportsController@general_reports');
Route::get('/reports-fabrics','ReportsController@fabrics_reports');
Route::get('/reports-thread','ReportsController@threads_reports');
Route::get('/reports-chamical','ReportsController@chamical_reports');
Route::get('/reports-accessories','ReportsController@accessories_reports');
Route::get('/reports-dockets','ReportsController@docket_reports');

Route::get('/de-reports-genersl-items','ReportsController@delevery_general_reports');
Route::get('/de-reports-fabrics','ReportsController@delevery_fabrics_reports');
Route::get('/de-reports-thread','ReportsController@delevery_threads_reports');
Route::get('/de-reports-chamical','ReportsController@delevery_chamical_reports');
Route::get('/de-reports-accessories','ReportsController@delevery_accessories_reports');

Route::get('/print','ThreadController@print');


Route::get('/search','HomeController@search');
Route::get('/search_test','HomeController@search2');
Route::get('/getproduct','HomeController@getproduct');
Route::get('autocomplete2', 'HomeController@getproduct2')->name('autocomplete');
Route::post('autocomplete3', 'HomeController@getproduct3')->name('autocomplete3');


Route::get('/search3','HomeController@search3');


//search route 
Route::post('/dockets/getStyle/','SearchController@getStyle');
Route::post('/dockets/getBuyer/','SearchController@getBuyer');




