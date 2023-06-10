<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\AboutsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BarbersController;
use App\Http\Controllers\WorkingsController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\AppointmentsController;

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

//Front-end Routes
Route::get('/', [WebsiteController::class, 'home']);

Route::get('/about', [WebsiteController::class, 'about']);

Route::get('/service', [WebsiteController::class, 'service']);

Route::get('/price', [WebsiteController::class, 'price']);

Route::get('/open', [WebsiteController::class, 'open']);

Route::get('/contact', [WebsiteController::class, 'contact']);

Route::get('/appointment', [AppointmentsController::class, 'appointment']);
Route::post('/appointment', [AppointmentsController::class, 'add_appointment']);
Route::get('/admin/appointment', [AppointmentsController::class, 'dash_appointment']);
Route::get('/admin/reject-appointment/{id}', [AppointmentsController::class, 'reject_appointment']);



//Login/Register Routes

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    
    
    //Dashboard Routes
    
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']);
    
    Route::get('/admin/settings', [SettingsController::class, 'settings']);
    
    Route::post('/admin/settings', [SettingsController::class, 'add_settings']);
    
    Route::get('/admin/about', [AboutsController::class, 'about']);
    
    Route::post('/admin/about', [AboutsController::class, 'add_about']);
    
    Route::get('/admin/services', [ServicesController::class, 'services']);
    Route::get('/admin/add-service', [ServicesController::class, 'add']);
    Route::post('/admin/add-service', [ServicesController::class, 'add_service']);
    Route::get('/admin/edit-service/{id}', [ServicesController::class, 'edit']);
    Route::post('/admin/edit-service/{id}', [ServicesController::class, 'edit_service']);
    Route::get('/admin/delete-service/{id}', [ServicesController::class, 'delete_service']);
    
    Route::get('/admin/barbers', [BarbersController::class, 'barbers']);
    Route::get('/admin/add-barber', [BarbersController::class, 'add']);
    Route::post('/admin/add-barber', [BarbersController::class, 'add_barber']);
    Route::get('/admin/edit-barber/{id}', [BarbersController::class, 'edit']);
    Route::post('/admin/edit-barber/{id}', [BarbersController::class, 'edit_barber']);
    Route::get('/admin/delete-barber/{id}', [BarbersController::class, 'delete_barber']);
    
    Route::get('/admin/working', [WorkingsController::class, 'working']);
    
    Route::post('/admin/working', [WorkingsController::class, 'add_working']);
    
    Route::get('/admin/testimonials', [TestimonialsController::class, 'testimonials']);
    Route::get('/admin/add-testimonial', [TestimonialsController::class, 'add']);
    Route::post('/admin/add-testimonial', [TestimonialsController::class, 'add_testimonial']);
    Route::get('/admin/edit-testimonial/{id}', [TestimonialsController::class, 'edit']);
    Route::post('/admin/edit-testimonial/{id}', [TestimonialsController::class, 'edit_testimonial']);
    Route::get('/admin/delete-testimonial/{id}', [TestimonialsController::class, 'delete_testimonial']);
    
});

require __DIR__.'/auth.php';
