<?php

use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\NewsLetterController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\SliderController;
use Illuminate\Support\Facades\Route;

Route::get('/urtsbckwadminpqwmv', [DashboardController::class, 'adminPanel']);
Route::get('/hrysb3sadmin/pozaqtvbfdashboard', [DashboardController::class, 'dashboard'])->name('dashboard');



Route::controller(SliderController::class)->group(function(){
    Route::get('/admin/slider-list', 'index')->name('slider_List');
    Route::get('admin/slider-create-page', 'create')->name('create_Page');
    Route::post('admin/slider/create', 'store')->name('slider_Create');
    Route::get('admin/slider-edit-page/{id}', 'edit')->name('edit_Page');
    Route::post('admin/slider/update/{id}', 'update')->name('slider_Update');
    Route::get('admin/slider/delete/{id}', 'destroy')->name('slider_Delete');

});

Route::controller(ServiceController::class)->group(function(){
    Route::get('/admin/service-list', 'index')->name('service_List');
    Route::get('admin/service-create-page', 'create')->name('service_create_Page');
    Route::post('admin/service/create', 'store')->name('service_Create');
    Route::get('admin/service-edit-page/{id}', 'edit')->name('service_edit_Page');
    Route::get('admin/service-show-page/{id}', 'show')->name('service_show_Page');
    Route::post('admin/service/update/{id}', 'update')->name('service_slider_Update');
    Route::get('admin/service/delete/{id}', 'destroy')->name('service_slider_Delete');

});


Route::controller(ContactController::class)->group(function(){
    Route::get('/admin/message-list', 'index')->name('message_List');
    Route::get('frontend/contact-message-page', 'create')->name('contact_message_Page');
    Route::post('frontend/message/store', 'store')->name('message_Store');
    // Route::get('admin/service-edit-page/{id}', 'edit')->name('service_edit_Page');
    // Route::get('admin/service-show-page/{id}', 'show')->name('service_show_Page');
    // Route::post('admin/service/update/{id}', 'update')->name('service_slider_Update');
    Route::get('admin/contact-message/delete/{id}', 'destroy')->name('contact_Message_Delete');

});

Route::controller(NewsLetterController::class)->group(function(){
    Route::get('/admin/message-list', 'index')->name('message_List');
    Route::get('frontend/contact-message-page', 'create')->name('contact_message_Page');
    Route::post('frontend/newLetter/store', 'emailStore')->name('message_Store');
    // Route::get('admin/service-edit-page/{id}', 'edit')->name('service_edit_Page');
    // Route::get('admin/service-show-page/{id}', 'show')->name('service_show_Page');
    // Route::post('admin/service/update/{id}', 'update')->name('service_slider_Update');
    Route::get('admin/contact-message/delete/{id}', 'destroy')->name('contact_Message_Delete');

});

