<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Command\ArtisanController;

//artisan route 
Route::controller(ArtisanController::class)->group(function() {
    Route::get('database-migrate', 'migrate');
    Route::get('roll-seeder', 'roll_seeder');
    Route::get('admin-seeder', 'admin_seeder');

    Route::get('cache-clear', 'cache_clear');
    Route::get('route-clear', 'route_clear');
    Route::get('config-clear', 'config_clear');
});

?>