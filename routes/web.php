<?php
use App\Http\Controllers\JobController;

use Illuminate\Support\Facades\Route;

require base_path('routes/web/auth.php');
require base_path('routes/web/avatars.php');
require base_path('routes/web/files.php');
require base_path('routes/web/roles.php');
require base_path('routes/web/users.php');

Route::namespace('\App\Http\Controllers\State')
    ->group(function () {
        Route::get('api/app/state', 'AppState')->middleware(['auth', 'enraiged', 'verified'])->name('app.state');
        Route::get('api/guest/state', 'GuestState')->name('guest.state');
    });

Route::middleware(['auth', 'verified', 'enraiged'])
    ->get('/dashboard', '\App\Http\Controllers\Dashboard\Show')
    ->name('dashboard');


    // Route::middleware(['auth'])
    // ->delete('/logout', '\App\Http\Controllers\Login\Destroy')
    // ->name('logout'); 

// Route::delete('logout', [AuthenticatedSessionController::class, 'destroy'])
//     ->name('logout');

    Route::get('/jobpost', [JobController::class, 'jobpost'])
    ->name('jobpost')
    ->middleware('auth');   

    Route::post('/jobstore', [JobController::class, 'jobstore'])
    ->name('jobstore')
    ->middleware('auth');
    
    Route::get('jobs', [JobController::class, 'index'])
    ->name('jobs')
    ->middleware('auth');

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }

    return inertia('Welcome');
});
