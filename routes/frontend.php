<?php

use App\Http\Controllers\frontend\HomeContentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;


Route::get('/', [HomeController::class, 'homePage'])->name('home_page');
Route::get('/service-page', [HomeController::class, 'servicePage'])->name('service-page');

Route::get('/frontend/service-details/{slug}', [HomeController::class, 'serviceDetailsPage'])->name('service_content');

Route::get('/about', [HomeController::class, 'aboutPage'])->name('about_page');
Route::get('/blog', [HomeController::class, 'blogPage'])->name('blog_page');
Route::get('/article-Transforming-the-Present-and-Shaping-the-Future-of-Technology', [HomeController::class, 'blogDetailsPage3']);
Route::get('/article-How-a-Website-Can-Transform-Your-Business', [HomeController::class, 'blogDetailsPage']);
Route::get('/article-How-POS-Software-Can-Streamline-Your-Business-Operations', [HomeController::class, 'blogDetailsPage2']);
Route::get('/contact', [HomeController::class, 'contactPage'])->name('contact_page');
Route::get('/our-team', [HomeController::class, 'teamPage'])->name('team_page');
Route::get('/q&a', [HomeController::class, 'qaPage'])->name('qa_page');
Route::get('/case-study-details', [HomeController::class, 'case_studay_details']);


