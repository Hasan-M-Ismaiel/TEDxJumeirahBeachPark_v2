<?php

use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\EventExportController;
use App\Http\Controllers\Admin\EventStatusMessageController;
use App\Http\Controllers\Admin\ExportController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\MemberStatusMessageController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\RegisterStatusMessageController;
use App\Http\Controllers\Admin\SpeakerController;
use App\Http\Controllers\Admin\SpeakerStatusMessageController;
use App\Http\Controllers\Admin\SponserController;

use App\Http\Controllers\Admin\VolunteerController;
use App\Http\Controllers\Admin\VolunteerStatusMessageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainHomeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SponserStatusMessageController;
use App\Http\Controllers\StoreFormInformationController;
use App\Http\Controllers\UploadController;
use App\Models\Category;
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

Auth::routes();


Route::post('/upload', [UploadController::class,'store']);
Route::get('/podcasts',[PodcastController::class,'index'])->name('podcasts');

Route::get('/blog',[PostController::class,'index'])->name('home');
Route::get('/posts/{post:slug}',[PostController::class,'show']);
Route::get('/posts/ar/{post:slug}',[PostController::class,'showAr']);
Route::post('/posts/{post:slug}/comments',[PostCommentsController::class,'store']);

Route::post('/storeEmail', [StoreFormInformationController::class, 'storeEmail'])->name('storeEmail');


Route::get('/', [MainHomeController::class, 'main'])->name('main');
Route::get('/aboutTed', [MainHomeController::class, 'aboutTed'])->name('aboutTed');
Route::get('/members', [MainHomeController::class, 'members'])->name('members');
Route::get('/gallery', [MainHomeController::class, 'gallery'])->name('gallery');
Route::get('/category/{category}', [MainHomeController::class, 'images'])->name('images');

Route::get('/team', [MainHomeController::class, 'team'])->name('team');
Route::get('/teammembers/{teammember}', [MainHomeController::class, 'teammember'])->name('teammember');




Route::get('/TEDx-event-1', [MainHomeController::class, 'tedx_event_1'])->name('tedx_event_1');
Route::get('/TEDx-event-2', [MainHomeController::class, 'tedx_event_2'])->name('tedx_event_2');
Route::get('/TEDx-main-event', [MainHomeController::class, 'tedx_main_event'])->name('tedx_main_event');

Route::get('/register', [MainHomeController::class, 'register'])->name('register');
Route::get('/partner', [MainHomeController::class, 'partner'])->name('partner');
Route::get('/volunteer', [MainHomeController::class, 'volunteer'])->name('volunteer');

Route::get('/register_form', [MainHomeController::class, 'register_form'])->name('register_form');
Route::get('/partner_form', [MainHomeController::class, 'partner_form'])->name('partner_form');
Route::get('/volunteer_form', [MainHomeController::class, 'volunteer_form'])->name('volunteer_form');

Route::get('/partner_feedback_survey', [MainHomeController::class, 'partner_evaluation_form'])->name('partner_evaluation_form');
Route::get('/speaker_feedback_survey', [MainHomeController::class, 'speaker_evaluation_form'])->name('speaker_evaluation_form');

Route::get('/faq', [MainHomeController::class, 'faq'])->name('faq');
Route::get('/sponsers', [MainHomeController::class, 'sponsers'])->name('sponsers');
Route::get('/about', [MainHomeController::class, 'about'])->name('about');
Route::get('/program', [MainHomeController::class,'show']);

Route::post('/storeRegister', [StoreFormInformationController::class, 'storeRegister'])->name('storeRegister');
Route::post('/storePartner', [StoreFormInformationController::class, 'storePartner'])->name('storePartner');
Route::post('/storeVolunteer', [StoreFormInformationController::class, 'storeVolunteer'])->name('storeVolunteer');
Route::post('/storeOther', [StoreFormInformationController::class, 'storeOther'])->name('storeOther');

Route::get('/register-salon-1', [MainHomeController::class, 'register_salon_1'])->name('register_salon_1');
Route::get('/register-salon-2', [MainHomeController::class, 'register_salon_2'])->name('register_salon_2');
Route::get('/register-main-event', [MainHomeController::class, 'register_main_event_form'])->name('register_main_event_form');


// data 
Route::post('/storeRegister_salon_1', [StoreFormInformationController::class, 'storeRegister_salon_1'])->name('storeRegister_salon_1');
Route::post('/storeRegister_salon_2', [StoreFormInformationController::class, 'storeRegister_salon_2'])->name('storeRegister_salon_2');
Route::post('/storeRegister_main_event', [StoreFormInformationController::class, 'storeRegister_main_event'])->name('storeRegister_main_event');






