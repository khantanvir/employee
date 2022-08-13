<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company\CompanyController;

//category route 
Route::controller(CompanyController::class)->group(function() {
    Route::get('company-create', 'create');
    Route::get('company-create/{id?}', 'create');
    Route::get('company-all', 'all');
    Route::post('company-store', 'store');
    Route::post('company-status-change', 'company_status_change');
    Route::get('company-value-delete/{id?}','company_value_delete');
    Route::get('company-deleted-list','deleted_items');
    Route::post('roll-back-company-value','roll_back_company_value');
});

?>