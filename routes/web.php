<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\ShowService;
use App\Livewire\Services;
use App\Livewire\ShowTeam;
use App\Livewire\ShowBlog;
use App\Livewire\ArticleDetail;
use App\Livewire\FaqPage;
use App\Livewire\ShowPage;
use App\Livewire\ContactPage;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('home');
Route::get('/services', Services::class)->name('services');
Route::get('/service/{id}', ShowService::class)->name('service');
Route::get('/team', ShowTeam::class)->name('team');
Route::get('/blogs', ShowBlog::class)->name('blogs');
Route::get('/blog/{id}', ArticleDetail::class)->name('blogDetail');
Route::get('/faqs', FaqPage::class)->name('faqs');
Route::get('/page/{id}', ShowPage::class)->name('pageDetail');
Route::get('/contact', ContactPage::class)->name('contact');
