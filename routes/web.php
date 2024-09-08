<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\ShowService;
use App\Livewire\Services;
use App\Livewire\ShowTeam;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('home');
Route::get('/services', Services::class)->name('services');
Route::get('/service/{id}', ShowService::class)->name('service');
Route::get('/team', ShowTeam::class)->name('team');
