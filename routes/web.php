<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\AdminAddBestServices;
use App\Http\Livewire\Admin\AdminAddNews;
use App\Http\Livewire\Admin\AdminAddServices;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\AdminEditBestServices;
use App\Http\Livewire\Admin\AdminEditNews;
use App\Http\Livewire\Admin\AdminEditServices;
use App\Http\Livewire\Admin\AdminEditUser;
use App\Http\Livewire\Admin\AdminManageBestServices;
use App\Http\Livewire\Admin\AdminManageContacts;
use App\Http\Livewire\Admin\AdminManageNews;
use App\Http\Livewire\Admin\AdminManageOrders;
use App\Http\Livewire\Admin\AdminManageServices;
use App\Http\Livewire\Admin\AdminManageUsers;
use App\Http\Livewire\Admin\DeleteBestServiceComponent;
use App\Http\Livewire\Admin\DeleteNewsComponent;
use App\Http\Livewire\Admin\DeleteServicesComponent;
use App\Http\Livewire\Admin\DeleteUsersComponent;
use App\Http\Livewire\Admin\EditBestServiceComponent;
use App\Http\Livewire\Admin\EditNewsComponent;
use App\Http\Livewire\Admin\EditServicesComponent;
use App\Http\Livewire\Admin\EditUsersComponent;
use App\Http\Livewire\BackgroundRemoval;
use App\Http\Livewire\BannerDesign;
use App\Http\Livewire\BuyServicesComponent;
use App\Http\Livewire\ClippingPath;
use App\Http\Livewire\ColorCorrection;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DegitalMarketing;
use App\Http\Livewire\EcommercePhoto;
use App\Http\Livewire\GraphicDesignService;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ImageMasking;
use App\Http\Livewire\NewsComponent;
use App\Http\Livewire\PhotoEditingService;
use App\Http\Livewire\PhotoRoutching;
use App\Http\Livewire\Portofolio;
use App\Http\Livewire\PricingComponent;
use App\Http\Livewire\User\UserDashboard;
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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// common routes
Route::get('/',HomeComponent::class);
Route::get('/about',AboutComponent::class);
Route::get('/contact',ContactComponent::class);
Route::get('/news',NewsComponent::class);
Route::get('/pricing',PricingComponent::class);
Route::get('/buy-our-services',BuyServicesComponent::class);
Route::get('/prtofolio',Portofolio::class);
// services routes
Route::get('/clipping-path-service',ClippingPath::class);
Route::get('/color-correction-service',ColorCorrection::class);
Route::get('/ecommerce-photo-editing-service',EcommercePhoto::class);
Route::get('/photo-routching-service',PhotoRoutching::class);
Route::get('/image-masking-service',ImageMasking::class);
Route::get('/banner-design-service',BannerDesign::class);
Route::get('/background-removal-service',BackgroundRemoval::class);
// buy our services routes
Route::get('/photo-editing-service',PhotoEditingService::class);
Route::get('/grphic-design-service',GraphicDesignService::class);
Route::get('/degital-marketing',DegitalMarketing::class);


// Admin Routes
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    // All admin routes will be here
    Route::get('/admin/dashboard',AdminDashboard::class)->name('admin.dashboard');
    //services
    Route::get('/admin/services/manageservices',AdminManageServices::class)->name('admin.manageservices');
    Route::get('/admin/services/addservices',AdminAddServices::class)->name('admin.addservices');
    Route::get('/admin/services/edit/{service_id}',AdminEditServices::class)->name('admin.editservices');

    Route::get('/admin/services/EditServices',EditServicesComponent::class)->name('edit.services');
    Route::get('/admin/services/DeleteServices',DeleteServicesComponent::class)->name('delete.services');

    // Best Services
    Route::get('/admin/bestservices/managebestservices',AdminManageBestServices::class)->name('admin.bestservices');
    Route::get('/admin/bestservices/addbestservice',AdminAddBestServices::class)->name('admin.addbestservice');
    Route::get('/admin/bestservices/editbestservice/{bestservice_id}',AdminEditBestServices::class)->name('admin.editbestservice');

    Route::get('/admin/bestservices/EditBestServices',EditBestServiceComponent::class)->name('edit.bestservices');
    Route::get('/admin/bestservices/DeleteBestServices',DeleteBestServiceComponent::class)->name('delete.bestservices');

    // News
    Route::get('/admin/news/managenews',AdminManageNews::class)->name('admin.managenews');
    Route::get('/admin/news/addnews',AdminAddNews::class)->name('admin.addnews');
    Route::get('/admin/news/editnews/{news_id}',AdminEditNews::class)->name('admin.editnews');

    Route::get('/admin/news/EditNews',EditNewsComponent::class)->name('edit.news');
    Route::get('/admin/news/DeleteNews',DeleteNewsComponent::class)->name('delete.news');

    // Users
    Route::get('/admin/users/adminmanageUsers',AdminManageUsers::class)->name('admin.manageusers');
    Route::get('/admin/users/adminedituser/{user_id}',AdminEditUser::class)->name('admin.edituser');

    Route::get('/admin/users/EditUsers',EditUsersComponent::class)->name('editusers');
    Route::get('/admin/users/DeleteUsers',DeleteUsersComponent::class)->name('deleteusers');

    //contacts
    Route::get('/admin/contacts/adminmanagecontacts',AdminManageContacts::class)->name('admin.managecontacts');

    //orders
    Route::get('/admin/orders/manageorders',AdminManageOrders::class)->name('admin.manageorders');
    Route::get('/admin/download-order-images/{id}',AdminManageOrders::class)->name('admin.download');
});


// User Routes
Route::middleware(['auth:sanctum','verified'])->group(function(){
    // All user routes will be here
    Route::get('/user/userdashboard',UserDashboard::class)->name('user.dashboard');
});
