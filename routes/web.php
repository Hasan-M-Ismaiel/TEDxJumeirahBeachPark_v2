<?php

use App\Http\Controllers\Front\EventController;
use App\Http\Controllers\MainHomeController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StoreFormInformationController;
use App\Http\Controllers\UploadController;
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
Route::post('/upload', [UploadController::class, 'store']);


// blog
Route::get('/blog',[PostController::class,'index'])->name('home');
Route::get('/posts/{post:slug}',[PostController::class,'show']);
Route::get('/posts/ar/{post:slug}',[PostController::class,'showAr']);

// main pages
Route::get('/', [MainHomeController::class, 'main'])->name('main');
Route::get('/aboutTed', [MainHomeController::class, 'aboutTed'])->name('aboutTed');
Route::get('/members', [MainHomeController::class, 'members'])->name('members');
Route::get('/gallery', [MainHomeController::class, 'gallery'])->name('gallery');
Route::get('/category/{category}', [MainHomeController::class, 'images'])->name('images');
Route::get('/teammembers/{teammember:slug}', [MainHomeController::class, 'teammember'])->name('teammember');
Route::get('/speakers/{speaker:slug}', [MainHomeController::class, 'speaker'])->name('speaker');
Route::get('/beauty-of-diversity/program', [MainHomeController::class,'beauty_of_diversity_program']);
Route::get('/podcasts',[PodcastController::class,'index'])->name('podcasts');


// registration pages
Route::get('/register', [MainHomeController::class, 'register'])->name('register');
Route::get('/partner', [MainHomeController::class, 'partner'])->name('partner');
Route::get('/volunteer', [MainHomeController::class, 'volunteer'])->name('volunteer');

// registration forms
Route::get('/register_form', [MainHomeController::class, 'register_form'])->name('register_form');
Route::get('/partner_form', [MainHomeController::class, 'partner_form'])->name('partner_form');
Route::get('/volunteer_form', [MainHomeController::class, 'volunteer_form'])->name('volunteer_form');

// store forms
Route::post('/storeRegister', [StoreFormInformationController::class, 'storeRegister'])->name('storeRegister');
Route::post('/storePartner', [StoreFormInformationController::class, 'storePartner'])->name('storePartner');
Route::post('/storeVolunteer', [StoreFormInformationController::class, 'storeVolunteer'])->name('storeVolunteer');

// store email
Route::post('/storeEmail', [StoreFormInformationController::class, 'storeEmail'])->name('storeEmail');


// events
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{event:slug}', [EventController::class, 'show'])->name('events.show');


Route::get('/partner_feedback_survey', [MainHomeController::class, 'partner_evaluation_form'])->name('partner_evaluation_form');
Route::get('/speaker_feedback_survey', [MainHomeController::class, 'speaker_evaluation_form'])->name('speaker_evaluation_form');