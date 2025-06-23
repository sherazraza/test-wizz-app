<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeSettingController;
use App\Http\Controllers\ImagePricingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoEditingController;
use App\Http\Controllers\VideoPricingController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
//     return Inertia::render('Home');
// });

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/image-pricing', [HomeController::class, 'imagepricing'])->name('imagepricing');
Route::get('/video-pricing', [HomeController::class, 'videopricing'])->name('videopricing');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/image-service', [HomeController::class, 'imageservice'])->name('imageservice');
Route::get('/video-service', [HomeController::class, 'videoservice'])->name('videoservice');
Route::get('/cgi-service', [HomeController::class, 'cgiservice'])->name('cgiservice');
Route::get('/terms-conditions', [HomeController::class, 'termsconditions'])->name('termsconditions');
Route::get('/privacy-policy', [HomeController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/cookie-policy', [HomeController::class, 'cookiepolicy'])->name('cookiepolicy');
Route::get('/refund-policy', [HomeController::class, 'refundpolicy'])->name('refundpolicy');

Route::get('/yes', function () {
    return Inertia::render('Welcome', [
        'canLogin'       => Route::has('login'),
        'canRegister'    => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion'     => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// admin routes

// Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
// Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
// Route::post('admin/loginAdmin', [AdminController::class, 'loginAdmin'])->name('admin.loginAdmin');

Route::prefix('admin')->name('admin.')->group(function () {

    // Public (No Auth Needed)
    Route::get('login', [AdminController::class, 'login'])->name('login');
    Route::post('loginAdmin', [AdminController::class, 'loginAdmin'])->name('loginAdmin');

    // Protected (Needs admin session)
    Route::middleware(['admin.auth'])->group(function () {
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        Route::get('categories', [AdminController::class, 'categories'])->name('categories');
        Route::get('logout', [AdminController::class, 'logout'])->name('logout');

        Route::get('home', [HomeSettingController::class, 'home'])->name('home');
        Route::get('videoediting', [VideoEditingController::class, 'videoediting'])->name('videoediting');
        Route::post('/video-editing/save', [VideoEditingController::class, 'store'])->name('video.editing.save');
        Route::get('3d-cgi-service', [AdminController::class, 'works'])->name('works');
// web.php
        Route::post('/admin/cgi/save', [AdminController::class, 'storeOrUpdate'])->name('cgi.save');

        Route::delete('cgi/how-it-works/delete/{id}', [AdminController::class, 'deleteHowItWorks']);

        Route::post('/home-settings', [HomeSettingController::class, 'storeOrUpdate'])->name('home.settings.save');
        Route::post('/about-us', [AboutUsController::class, 'storeOrUpdate'])->name('about.settings.save');
        Route::get('about', [AboutUsController::class, 'about'])->name('about');
        Route::delete('/about/team-member/{id}', [AboutUsController::class, 'deleteTeamMember'])->name('about.team.delete');
        Route::delete('/about/description/{id}', [AboutUsController::class, 'deleteDescription'])->name('about.description.delete');
        Route::get('contact', [ContactController::class, 'contact'])->name('contact');

        Route::post('/contact/save', [ContactController::class, 'store'])->name('contact.save');

        Route::delete('/contact-location/{id}', [ContactController::class, 'deleteLocation'])->name('contact.location.delete');

        Route::get('image-editing-pricing', [ImagePricingController::class, 'imageEditing'])->name('imageEditing');
        Route::get('video-editing-pricing', [VideoPricingController::class, 'videoPricing'])->name('videoPricing');
        Route::post('/image-pricing/save', [ImagePricingController::class, 'save'])->name('image-pricing.save');
        Route::post('/image-pricing/service/delete', [ImagePricingController::class, 'deleteService'])->name('image-pricing.service.delete');

        Route::post('/video-pricing/save', [VideoPricingController::class, 'store'])->name('video-pricing.save');
        Route::post('/video-pricing/delete-package', [VideoPricingController::class, 'deletePackage'])->name('video-pricing.delete-package');

    });
});

require __DIR__ . '/auth.php';
