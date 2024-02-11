<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Demo\DemoController;
use App\Http\Controllers\Pos\CategoryController;
use App\Http\Controllers\Pos\CustomerController;
use App\Http\Controllers\Pos\DefaultController;
use App\Http\Controllers\Pos\ProductController;
use App\Http\Controllers\Pos\PurchaseController;
use App\Http\Controllers\Pos\SupplierController;
use App\Http\Controllers\Pos\UnitController;
use App\Models\User;
use Illuminate\Contracts\Auth\SupportsBasicAuth;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});


// Route for admin

Route::controller(AdminController::class)->group(function () {
    Route::get('/adminlogout', 'destroy')->name('admin.logout');
    Route::get('/adminprofile', 'Profile')->name('admin.profile');
    Route::get('/editprofile', 'EditProfile')->name('edit.profile');
    Route::post('/storeprofile', 'StoreProfile')->name('store.profile');
    Route::get('/changepwd', 'ChangePwd')->name('change.pwd');
    Route::post('/updatepwd', 'UpdatePwd')->name('update.pwd');
});

// Route for supplier

Route::controller(SupplierController::class)->group(function () {
    Route::get('/supplierall', 'SupplierAll')->name('supplier.all');
    Route::get('/supplieradd', 'SupplierAdd')->name('supplier.add');
    Route::post('/supplierstore', 'SupplierStore')->name('supplier.store');
    Route::get('/supplieredit{id}', 'SupplierEdit')->name('supplier.edit');
    Route::post('/supplierupdate', 'SupplierUpdate')->name('supplier.update');
    Route::get('/supplierdelete{id}', 'SupplierDelete')->name('supplier.delete');
});

// Route for customer

Route::controller(CustomerController::class)->group(function () {
    Route::get('/customerall', 'CustomerAll')->name('customer.all');
    Route::get('/customeradd', 'CustomerAdd')->name('customer.add');
    Route::post('/customerstore', 'CustomerStore')->name('customer.store');
    Route::get('/customeredit{id}', 'CustomerEdit')->name('customer.edit');
    Route::post('/customerupdate', 'CustomerUpdate')->name('customer.update');
    Route::get('/customerdelete{id}', 'CustomerDelete')->name('customer.delete');
});

// Route for unit
Route::controller(UnitController::class)->group(function () {
    Route::get('/unitall', 'UnitAll')->name('unit.all');
    Route::get('/unitadd', 'UnitAdd')->name('unit.add');
    Route::post('/unitstore', 'UnitStore')->name('unit.store');
    Route::get('/unitedit{id}', 'UnitEdit')->name('unit.edit');
    Route::post('/unitupdate', 'UnitUpdate')->name('unit.update');
    Route::get('/unitdelete{id}', 'UnitDelete')->name('unit.delete');
});

// Route for Category
Route::controller(CategoryController::class)->group(function () {
    Route::get('/categoryall', 'CategoryAll')->name('category.all');
    Route::get('/categoryadd', 'CategoryAdd')->name('category.add');
    Route::post('/categorystore', 'CategoryStore')->name('category.store');
    Route::get('/categoryedit{id}', 'CategoryEdit')->name('category.edit');
    Route::post('/categoryupdate', 'CategoryUpdate')->name('category.update');
    Route::get('/categorydelete{id}', 'CategoryDelete')->name('category.delete');
});

// Route for Product
Route::controller(ProductController::class)->group(function () {
    Route::get('/productall', 'ProductAll')->name('product.all');
    Route::get('/productadd', 'ProductAdd')->name('product.add');
    Route::post('/productstore', 'ProductStore')->name('product.store');
    Route::get('/productedit{id}', 'ProductEdit')->name('product.edit');
    Route::post('/productupdate', 'ProductUpdate')->name('product.update');
    Route::get('/productdelete{id}', 'ProductDelete')->name('product.delete');
});

// Route for Purchase
Route::controller(PurchaseController::class)->group(function () {
    Route::get('/purchaseall', 'PurchaseAll')->name('purchase.all');
    Route::get('/purchaseadd', 'PurchaseAdd')->name('purchase.add');
    Route::post('/purchasestore', 'PurchaseStore')->name('purchase.store');
});

// Default Route
Route::controller(DefaultController::class)->group(function () {
    Route::get('/get-category', 'GetCategory')->name('get-category');
    Route::get('/get-product', 'GetProduct')->name('get-product');
});

Route::get('/dashboard', function () {
    $id = Auth::user()->id;
    $adminData = User::find($id);
    return view('admin.index', compact('adminData'));
})->middleware(['auth', 'verified'])->name('dashboard');

/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

require __DIR__ . '/auth.php';
