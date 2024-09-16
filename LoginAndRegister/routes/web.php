<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
// use Spatie\Permission\Middlewares\PermissionMiddleware;


Route::get('/web-test', function () {
    return view('web-test.index');
})->middleware('auth','is_admin:');

Route::group(['middleware' => ['role:admin']], function(){
    Route::resource('administration/permissions', PermissionController::class);
    Route::get('administration/permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);

    Route::resource('administration/roles', RoleController::class);
    Route::get('administration/roles/{roleId}/delete', [RoleController::class, 'destroy']);
    Route::get('administration/roles/{roleID}/give-perm', [RoleController::class, 'showPermToRole']);
    Route::put('administration/roles/{roleID}/give-perm', [RoleController::class, 'givePermToRole']);

    Route::resource('administration/users', UserController::class);
    Route::get('administration/users/{userId}/delete', [UserController::class, 'destroy']);
});



Route::group(['middleware' => ['role:admin|staff']], function(){

// Go to Customers Section
    Route::get('customers/all-customers', [CustomersController::class, 'index']);
    Route::post('customers/all-customers', [CustomersController::class, 'importExcelData']);
    Route::get('customers/all-customers/{id}', [CustomersController::class, 'show'])->name('customers.show');
    Route::get('/customers/all-customers', [CustomersController::class, 'searchCustomer']);
    Route::get('customers/add-customer', [CustomersController::class, 'addCustomer']);
    Route::get('customers/add-customer-advance', [CustomersController::class, 'addCustomerAdv']);
// End of Customers Section

// Go to Report Section
    Route::get('/reports/acc-report', [ReportController::class, 'index']);
    Route::get('/reports/acc-status-his', [ReportController::class, 'accStatusHis']);
    Route::get('/reports/acc-sum-report', [ReportController::class, 'accSumRepoprt']);








// End of Report Section
});


Route::get('/', function () {
    return redirect("login");
});

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('home');

require __DIR__.'/auth.php';
