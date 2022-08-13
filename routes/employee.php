<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\EmployeeController;

//category route 
Route::controller(EmployeeController::class)->group(function() {
    Route::get('employee-create', 'create');
    Route::get('employee-create/{id?}', 'create');
    Route::get('employee-all', 'all');
    Route::post('employee-store', 'store');
    Route::post('employee-status-change', 'employee_status_change');
    Route::get('employee-value-delete/{id?}','employee_value_delete');
    Route::get('employee-deleted-list','deleted_items');
    Route::post('roll-back-employee-value','roll_back_employee_value');
});

?>