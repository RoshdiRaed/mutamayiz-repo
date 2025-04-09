<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Models\Service;

Route::get('/', function () {
    $services = Service::all(); // Fetch all services from the database
    return view('home', compact('services'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Services Routes
    Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
    Route::get('/newServices/create', [ServicesController::class, 'create'])->name('services.create');
    Route::post('/newServices/store', [ServicesController::class, 'store'])->name('services.store');
    Route::get('/newServices/{service}', [ServicesController::class, 'show'])->name('services.show');
    Route::get('/newServices/{service}/edit', [ServicesController::class, 'edit'])->name('services.edit');
    Route::put('/newServices/{service}', [ServicesController::class, 'update'])->name('services.update');
    Route::delete('/newServices/{service}', [ServicesController::class, 'destroy'])->name('services.destroy');

    // Works Routes
    Route::get('/newWork', [WorkController::class, 'create'])->name('newWork');
    Route::post('/newWork', [WorkController::class, 'store'])->name('storeWork');
    Route::get('/editWork/{id}', [WorkController::class, 'edit'])->name('editWork');
    Route::put('/updateWork/{id}', [WorkController::class, 'update'])->name('updateWork');
    Route::delete('/deleteWork/{id}', [WorkController::class, 'destroy'])->name('deleteWork');

    // Contact Routes
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
});

Route::resource('works', WorkController::class)->except(['show']); // Resource routes for works
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');


require __DIR__ . '/auth.php';
