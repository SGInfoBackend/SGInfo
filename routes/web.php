<?php

use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\JobComponent;
use App\Http\Livewire\AddJobComponent;
use App\Http\Livewire\RoomDetailComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeComponent::class)->name('home');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/job', JobComponent::class)->name('job');
Route::get('/addjob', AddJobComponent::class)->name('addjob');
Route::get('/roomdetail/{Rent_House_ID}', RoomDetailComponent::class)->name('roomdetails');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
