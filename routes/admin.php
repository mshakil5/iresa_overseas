<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChartOfAccountController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\LoanController;
use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\BusinessPartnerController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\CustomerController;


/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['prefix' =>'admin/', 'middleware' => ['auth', 'is_admin']], function(){
  
    Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard');
    //profile
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::put('profile/{id}', [AdminController::class, 'adminProfileUpdate']);
    Route::post('changepassword', [AdminController::class, 'changeAdminPassword']);
    Route::put('image/{id}', [AdminController::class, 'adminImageUpload']);
    //profile end

    Route::get('/new-admin', [AdminController::class, 'getAdmin'])->name('alladmin');
    Route::post('/new-admin', [AdminController::class, 'adminStore']);
    Route::get('/new-admin/{id}/edit', [AdminController::class, 'adminEdit']);
    Route::post('/new-admin-update', [AdminController::class, 'adminUpdate']);
    Route::get('/new-admin/{id}', [AdminController::class, 'adminDelete']);
    
    Route::get('/agent', [AgentController::class, 'index'])->name('admin.agent');
    Route::post('/agent', [AgentController::class, 'store']);
    Route::get('/agent/{id}/edit', [AgentController::class, 'edit']);
    Route::post('/agent-update', [AgentController::class, 'update']);
    Route::get('/agent/{id}', [AgentController::class, 'delete']);
    
    Route::get('/account', [AccountController::class, 'index'])->name('admin.account');
    Route::post('/account', [AccountController::class, 'store']);
    Route::get('/account/{id}/edit', [AccountController::class, 'edit']);
    Route::post('/account-update', [AccountController::class, 'update']);
    Route::get('/account/{id}', [AccountController::class, 'delete']);

    
    Route::get('/client', [ClientController::class, 'index'])->name('admin.client');
    Route::get('/processing-clients', [ClientController::class, 'processing'])->name('admin.processingclient');
    Route::get('/decline-clients', [ClientController::class, 'decline'])->name('admin.declineclient');
    Route::get('/completed-clients', [ClientController::class, 'completed'])->name('admin.completedclient');
    Route::post('/client', [ClientController::class, 'store']);
    Route::get('/client/{id}/edit', [ClientController::class, 'edit']);
    Route::post('/client-update', [ClientController::class, 'update']);
    Route::get('/client/{id}', [ClientController::class, 'delete']);
    Route::get('/client-details/{id}', [ClientController::class, 'getClientInfo'])->name('admin.clientDetails');
    Route::post('/client-partner-update', [ClientController::class, 'partnerUpdate']);
    Route::get('/change-client-status', [ClientController::class, 'changeClientStatus']);

    // download
    Route::get('/client-image-download/{id}', [ClientController::class, 'client_image_download'])->name('client_image.download');
    Route::get('/visa-image-download/{id}', [ClientController::class, 'visa_image_download'])->name('visa_image.download');
    Route::get('/manpower-image-download/{id}', [ClientController::class, 'manpower_image_download'])->name('manpower_image.download');
    Route::get('/passport-image-download/{id}', [ClientController::class, 'passport_image_download'])->name('passport_image.download');



    
    Route::get('/country', [CountryController::class, 'index'])->name('admin.country');
    Route::post('/country', [CountryController::class, 'store']);
    Route::get('/country/{id}/edit', [CountryController::class, 'edit']);
    Route::post('/country-update', [CountryController::class, 'update']);
    Route::get('/country/{id}', [CountryController::class, 'delete']);

    
    Route::get('/business-partner', [BusinessPartnerController::class, 'index'])->name('admin.businesspartner');
    Route::post('/business-partner', [BusinessPartnerController::class, 'store']);
    Route::get('/business-partner/{id}/edit', [BusinessPartnerController::class, 'edit']);
    Route::post('/business-partner-update', [BusinessPartnerController::class, 'update']);
    Route::get('/business-partner/{id}', [BusinessPartnerController::class, 'delete']);

    // transaction
    Route::post('/money-receipt', [TransactionController::class, 'moneyreceived']);
    Route::post('/money-receipt-update', [TransactionController::class, 'moneyReceivedUpdate']);
    Route::get('/money-receipt/{id}/edit', [TransactionController::class, 'moneyReceivedEdit']);

    // payment
    Route::post('/money-payment', [TransactionController::class, 'moneyPayment']);
    Route::post('/money-payment-update', [TransactionController::class, 'moneyPaymentUpdate']);
    Route::get('/money-payment/{id}/edit', [TransactionController::class, 'moneyPaymentEdit']);


    
    Route::get('/customer-create', [CustomerController::class, 'customerCreate'])->name('admin.customerCreate');
    
});
  