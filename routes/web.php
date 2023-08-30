<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Models\News;

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


Route::get('/dashboard', function () {
    $news = News::all();
    return view('news.index', compact('news'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/event/{event}', [EventController::class, 'details'])->name('details');
Route::get('/new/{news}', [NewsController::class, 'Details'])->name('newsDetails');
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/campus-and-location', [PagesController::class, 'campusAndLocation'])->name('campus_and_location');
Route::get('/co-curricular-activities', [PagesController::class, 'coCurricularActivities'])->name('co_curricular_activities');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/curriculum', [PagesController::class, 'curriculum'])->name('curriculum');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/jhs', [PagesController::class, 'jhs'])->name('jhs');
Route::get('/pre-school', [PagesController::class, 'preSchool'])->name('pre_school');
Route::get('/admission', [PagesController::class, 'admission'])->name('admission');
Route::get('/primary', [PagesController::class, 'primary'])->name('primary');
Route::get('/vision-and-mission', [PagesController::class, 'visionAndMission'])->name('vision_and_mission');
Route::get('/welcome-message', [PagesController::class, 'welcomeMessage'])->name('welcome_message');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('events', EventController::class);
    Route::resource('news', NewsController::class);
});

require __DIR__.'/auth.php';
