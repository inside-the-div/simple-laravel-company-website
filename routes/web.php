<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainSite\HomePageController;
use App\Http\Controllers\MainSite\AboutPageController;
use App\Http\Controllers\MainSite\ProjectPageController;
use App\Http\Controllers\MainSite\TestimonialPageController;
use App\Http\Controllers\MainSite\ContactPageController;
use App\Http\Controllers\Admin\SliderController;


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

Route::get('/', [HomePageController::class, 'homePage'])->name('HomePage');
Route::get('/about', [AboutPageController::class, 'aboutPage'])->name('AboutPage');
Route::get('/project', [ProjectPageController::class, 'projectPage'])->name('ProjectPage');
Route::get('/testimonial', [TestimonialPageController::class, 'testimonialPage'])->name('TestimonialPage');
Route::get('/contact', [ContactPageController::class, 'contactPage'])->name('ContactPage');

Route::get('/addSlider', [SliderController::class, 'addSlider'])->name('AddSlider');

Route::post('/storeSlider', [SliderController::class, 'storeSlider'])->name('StoreSlider');
Route::get('/editSlider/{id}', [SliderController::class, 'editSlider'])->name('EditSlider');
Route::post('/updateSlider', [SliderController::class, 'updateSlider'])->name('UpdateSlider');
Route::post('/deleteSlider', [SliderController::class, 'deleteSlider'])->name('DeleteSlider');




// Route::get('/', function () {
//     return view('index');
// });