<?php

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

Route::get('/', [App\Http\Controllers\CmsController::class, 'index']);
Route::get('c/page/{page}', [App\Http\Controllers\CmsPageController::class, 'showPage']);
Route::get('c/blogs', [App\Http\Controllers\CmsController::class, 'getBlogList']);
Route::get('c/blog/{slug}-{id}', [App\Http\Controllers\CmsController::class, 'viewBlog']);
Route::get('c/contact-us', [App\Http\Controllers\CmsController::class, 'contactUs'])->name('cms.contact.us');
Route::get('c/package', [App\Http\Controllers\CmsController::class, 'package'])->name('cms.package');
Route::post('c/submit-contact-form', [App\Http\Controllers\CmsController::class, 'postContactForm'])->name('cms.submit.contact.form');

Route::middleware('web', 'SetSessionData', 'auth', 'language', 'timezone', 'AdminSidebarMenu', 'superadmin')->prefix('cms')->group(function () {
    Route::get('install', [\App\Http\Controllers\InstallController::class, 'index']);
    Route::post('install', [\App\Http\Controllers\InstallController::class, 'install']);
    Route::get('install/uninstall', [\App\Http\Controllers\InstallController::class, 'uninstall']);
    Route::get('install/update', [\App\Http\Controllers\InstallController::class, 'update']);

    Route::resource('cms-page', \App\Http\Controllers\CmsPageController::class)->except(['show']);
    Route::resource('site-details', \App\Http\Controllers\SettingsController::class);
});
