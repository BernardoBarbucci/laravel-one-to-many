<?php

use App\Http\Controllers\Admin\ProjectController as ProjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('guest.');
});

// rotta predefinita di autenticazione
Auth::routes();

// rotte per gli admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// rotte per gli utenti loggati correttamente 
Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // route per i data
        Route::get('/data', [ProjectController::class, 'index'])->name('data.index');
        Route::post('/data', [ProjectController::class, 'store'])->name('data.store');
        Route::get('/data/create', [ProjectController::class, 'create'])->name('data.create');
        Route::get('/data/{project}', [ProjectController::class, 'show'])->name('data.show');
        Route::get('/data/{project}/edit', [ProjectController::class, 'edit'])->name('data.edit');
        Route::put('/data/{project}', [ProjectController::class, 'update'])->name('data.update');
        Route::delete('/data/{project}', [ProjectController::class, 'destroy'])->name('data.destroy');

        // route per project
        Route::resource('projects', ProjectController::class);
    });


// reindirizzare gli utenti NON autenticati & NON admin alla welcome per login/iscrizione 
Route::get('/', function () {
    if (auth()->check()) {
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.data.index');
        } else {
            // utenti non admin e loggati correttamente reindirizzati alla home
            return redirect()->route('home');
        }
    } else {
        // utenti non admin e non loggati correttamente rispediti alla login
        return redirect()->route('login');
    }
});
