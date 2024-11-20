<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\BannerCategoryController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CreatePageController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\WhychooseController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ClientController;

Auth::routes();

Route::get('/cc', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Cleared!";
});


Route::group(['namespace' => 'Frontend', 'middleware' => ['check_refer']], function () {
    Route::get('/', [FrontendController::class, 'index'])->name('home');
    Route::get('/course-details/{slug}', [FrontendController::class, 'course_details'])->name('course.details');
    Route::get('/service/{slug}', [FrontendController::class, 'service_details'])->name('service.details');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
    Route::get('/page/{slug}', [FrontendController::class, 'pages'])->name('page');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['customer', 'ipcheck', 'check_refer']], function () {
    Route::get('locked', [DashboardController::class, 'locked'])->name('locked');
    Route::post('unlocked', [DashboardController::class, 'unlocked'])->name('unlocked');
});
// auth route
Route::group(['namespace' => 'Admin', 'middleware' => ['auth', 'lock', 'check_refer'], 'prefix' => 'admin'], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('change-password', [DashboardController::class, 'changepassword'])->name('change_password');
    Route::post('new-password', [DashboardController::class, 'newpassword'])->name('new_password');

    // users route
    Route::get('users/manage', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users/save', [UserController::class, 'store'])->name('users.store');
    Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('users/update', [UserController::class, 'update'])->name('users.update');
    Route::post('users/inactive', [UserController::class, 'inactive'])->name('users.inactive');
    Route::post('users/active', [UserController::class, 'active'])->name('users.active');
    Route::post('users/destroy', [UserController::class, 'destroy'])->name('users.destroy');

    // roles
    Route::get('roles/manage', [RoleController::class, 'index'])->name('roles.index');
    Route::get('roles/{id}/show', [RoleController::class, 'show'])->name('roles.show');
    Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('roles/save', [RoleController::class, 'store'])->name('roles.store');
    Route::get('roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::post('roles/update', [RoleController::class, 'update'])->name('roles.update');
    Route::post('roles/destroy', [RoleController::class, 'destroy'])->name('roles.destroy');

    // permissions
    Route::get('permissions/manage', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('permissions/{id}/show', [PermissionController::class, 'show'])->name('permissions.show');
    Route::get('permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
    Route::post('permissions/save', [PermissionController::class, 'store'])->name('permissions.store');
    Route::get('permissions/{id}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
    Route::post('permissions/update', [PermissionController::class, 'update'])->name('permissions.update');
    Route::post('permissions/destroy', [PermissionController::class, 'destroy'])->name('permissions.destroy');

    // categories
    Route::get('categories/manage', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories/{id}/show', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('categories/save', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('categories/update', [CategoryController::class, 'update'])->name('categories.update');
    Route::post('categories/inactive', [CategoryController::class, 'inactive'])->name('categories.inactive');
    Route::post('categories/active', [CategoryController::class, 'active'])->name('categories.active');
    Route::post('categories/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');




    // settings route
    Route::get('settings/manage', [GeneralSettingController::class, 'index'])->name('settings.index');
    Route::get('settings/create', [GeneralSettingController::class, 'create'])->name('settings.create');
    Route::post('settings/save', [GeneralSettingController::class, 'store'])->name('settings.store');
    Route::get('settings/{id}/edit', [GeneralSettingController::class, 'edit'])->name('settings.edit');
    Route::post('settings/update', [GeneralSettingController::class, 'update'])->name('settings.update');
    Route::post('settings/inactive', [GeneralSettingController::class, 'inactive'])->name('settings.inactive');
    Route::post('settings/active', [GeneralSettingController::class, 'active'])->name('settings.active');
    Route::post('settings/destroy', [GeneralSettingController::class, 'destroy'])->name('settings.destroy');

    // abouts route
    Route::get('abouts/manage', [AboutController::class, 'index'])->name('abouts.index');
    Route::get('abouts/pending', [AboutController::class, 'pending'])->name('abouts.pending');
    Route::post('abouts/inactive', [AboutController::class, 'inactive'])->name('abouts.inactive');
    Route::post('abouts/active', [AboutController::class, 'active'])->name('abouts.active');
    Route::get('abouts/create', [AboutController::class, 'create'])->name('abouts.create');
    Route::post('abouts/save', [AboutController::class, 'store'])->name('abouts.store');
    Route::get('abouts/{id}/edit', [AboutController::class, 'edit'])->name('abouts.edit');
    Route::post('abouts/update', [AboutController::class, 'update'])->name('abouts.update');
    Route::post('abouts/destroy', [AboutController::class, 'destroy'])->name('abouts.destroy');

    // whychoose route
    Route::get('whychoose/manage', [WhychooseController::class, 'index'])->name('whychoose.index');
    Route::get('whychoose/pending', [WhychooseController::class, 'pending'])->name('whychoose.pending');
    Route::post('whychoose/inactive', [WhychooseController::class, 'inactive'])->name('whychoose.inactive');
    Route::post('whychoose/active', [WhychooseController::class, 'active'])->name('whychoose.active');
    Route::get('whychoose/create', [WhychooseController::class, 'create'])->name('whychoose.create');
    Route::post('whychoose/save', [WhychooseController::class, 'store'])->name('whychoose.store');
    Route::get('whychoose/{id}/edit', [WhychooseController::class, 'edit'])->name('whychoose.edit');
    Route::post('whychoose/update', [WhychooseController::class, 'update'])->name('whychoose.update');
    Route::post('whychoose/destroy', [WhychooseController::class, 'destroy'])->name('whychoose.destroy');

    // service route
    Route::get('service/manage', [ServiceController::class, 'index'])->name('services.index');
    Route::get('service/pending', [ServiceController::class, 'pending'])->name('service.pending');
    Route::post('service/inactive', [ServiceController::class, 'inactive'])->name('services.inactive');
    Route::post('service/active', [ServiceController::class, 'active'])->name('services.active');
    Route::get('service/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('service/save', [ServiceController::class, 'store'])->name('services.store');
    Route::get('service/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::post('service/update', [ServiceController::class, 'update'])->name('services.update');
    Route::post('service/destroy', [ServiceController::class, 'destroy'])->name('services.destroy');


    // course route
    Route::get('course/manage', [CourseController::class, 'index'])->name('courses.index');
    Route::get('course/pending', [CourseController::class, 'pending'])->name('service.pending');
    Route::post('course/inactive', [CourseController::class, 'inactive'])->name('courses.inactive');
    Route::post('course/active', [CourseController::class, 'active'])->name('courses.active');
    Route::get('course/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('course/save', [CourseController::class, 'store'])->name('courses.store');
    Route::get('course/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
    Route::post('course/update', [CourseController::class, 'update'])->name('courses.update');
    Route::post('course/destroy', [CourseController::class, 'destroy'])->name('courses.destroy');
    Route::get('course/feature-update', [CourseController::class,'feature_destroy'])->name('courses.feature.destroy');
    Route::get('course/slug-generate', [CourseController::class,'slug_generate'])->name('courses.slug_generate');


    // settings route
    Route::get('social-media/manage', [SocialMediaController::class, 'index'])->name('socialmedias.index');
    Route::get('social-media/create', [SocialMediaController::class, 'create'])->name('socialmedias.create');
    Route::post('social-media/save', [SocialMediaController::class, 'store'])->name('socialmedias.store');
    Route::get('social-media/{id}/edit', [SocialMediaController::class, 'edit'])->name('socialmedias.edit');
    Route::post('social-media/update', [SocialMediaController::class, 'update'])->name('socialmedias.update');
    Route::post('social-media/inactive', [SocialMediaController::class, 'inactive'])->name('socialmedias.inactive');
    Route::post('social-media/active', [SocialMediaController::class, 'active'])->name('socialmedias.active');
    Route::post('social-media/destroy', [SocialMediaController::class, 'destroy'])->name('socialmedias.destroy');

    // contact route
    Route::get('contact/manage', [ContactController::class, 'index'])->name('contact.index');
    Route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('contact/save', [ContactController::class, 'store'])->name('contact.store');
    Route::get('contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::post('contact/update', [ContactController::class, 'update'])->name('contact.update');
    Route::post('contact/inactive', [ContactController::class, 'inactive'])->name('contact.inactive');
    Route::post('contact/active', [ContactController::class, 'active'])->name('contact.active');
    Route::post('contact/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');

    // banner category route
    Route::get('banner-category/manage', [BannerCategoryController::class, 'index'])->name('banner_category.index');
    Route::get('banner-category/create', [BannerCategoryController::class, 'create'])->name('banner_category.create');
    Route::post('banner-category/save', [BannerCategoryController::class, 'store'])->name('banner_category.store');
    Route::get('banner-category/{id}/edit', [BannerCategoryController::class, 'edit'])->name('banner_category.edit');
    Route::post('banner-category/update', [BannerCategoryController::class, 'update'])->name('banner_category.update');
    Route::post('banner-category/inactive', [BannerCategoryController::class, 'inactive'])->name('banner_category.inactive');
    Route::post('banner-category/active', [BannerCategoryController::class, 'active'])->name('banner_category.active');
    Route::post('banner-category/destroy', [BannerCategoryController::class, 'destroy'])->name('banner_category.destroy');

    // banner  route
    Route::get('banner/manage', [BannerController::class, 'index'])->name('banners.index');
    Route::get('banner/create', [BannerController::class, 'create'])->name('banners.create');
    Route::post('banner/save', [BannerController::class, 'store'])->name('banners.store');
    Route::get('banner/{id}/edit', [BannerController::class, 'edit'])->name('banners.edit');
    Route::post('banner/update', [BannerController::class, 'update'])->name('banners.update');
    Route::post('banner/inactive', [BannerController::class, 'inactive'])->name('banners.inactive');
    Route::post('banner/active', [BannerController::class, 'active'])->name('banners.active');
    Route::post('banner/destroy', [BannerController::class, 'destroy'])->name('banners.destroy');

    // contact route
    Route::get('page/manage', [CreatePageController::class, 'index'])->name('pages.index');
    Route::get('page/create', [CreatePageController::class, 'create'])->name('pages.create');
    Route::post('page/save', [CreatePageController::class, 'store'])->name('pages.store');
    Route::get('page/{id}/edit', [CreatePageController::class, 'edit'])->name('pages.edit');
    Route::post('page/update', [CreatePageController::class, 'update'])->name('pages.update');
    Route::post('page/inactive', [CreatePageController::class, 'inactive'])->name('pages.inactive');
    Route::post('page/active', [CreatePageController::class, 'active'])->name('pages.active');
    Route::post('page/destroy', [CreatePageController::class, 'destroy'])->name('pages.destroy');

    // client
    Route::get('client/manage', [ClientController::class, 'index'])->name('clients.index');
    Route::get('client/{id}/show', [ClientController::class, 'show'])->name('clients.show');
    Route::get('client/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('client/save', [ClientController::class, 'store'])->name('clients.store');
    Route::get('client/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::post('client/update', [ClientController::class, 'update'])->name('clients.update');
    Route::post('client/inactive', [ClientController::class, 'inactive'])->name('clients.inactive');
    Route::post('client/active', [ClientController::class, 'active'])->name('clients.active');
    Route::post('client/destroy', [ClientController::class, 'destroy'])->name('clients.destroy');
});
