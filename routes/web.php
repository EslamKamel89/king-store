<?php

use App\Http\Controllers\Admin\AdminMainController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductAttributeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductDiscountController;
use App\Http\Controllers\Admin\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::view( '/', 'welcome' );

Route::view( 'dashboard', 'dashboard' )
	->middleware( [ 'auth', 'verified', 'roleManger:customer' ] )
	->name( 'dashboard' );

Route::view( 'vendor/dashboard', 'vendor' )
	->middleware( [ 'auth', 'verified', 'roleManger:vendor' ] )
	->name( 'vendor.dashboard' );
Route::view( 'profile', 'profile' )
	->middleware( [ 'auth' ] )
	->name( 'profile' );

// admin routes
Route::middleware( [ 'auth', 'verified', 'roleManger:admin' ] )
	->prefix( 'admin' )
	->group( function () {
		Route::controller( AdminMainController::class)->group( function () {
			Route::get( 'dashboard', 'index' )->name( 'admin.dashboard' );
			Route::get( 'settings', 'setting' )->name( 'admin.setting' );
			Route::get( '/manage/users', 'manageUser' )->name( 'admin.manage.user' );
			Route::get( '/manage/stores', 'manageStore' )->name( 'admin.manage.store' );
			Route::get( '/order/history', 'orderHistory' )->name( 'admin.order.history' );
		} );
		Route::controller( CategoryController::class)->group( function () {
			Route::get( '/category/create', 'create' )->name( 'admin.category.create' );
			Route::get( '/category/manage', 'manage' )->name( 'admin.category.manage' );
		} );
		Route::controller( SubCategoryController::class)->group( function () {
			Route::get( '/subcategory/create', 'create' )->name( 'admin.subcategory.create' );
			Route::get( '/subcategory/manage', 'manage' )->name( 'admin.subcategory.manage' );
		} );
		Route::controller( ProductController::class)->group( function () {
			Route::get( '/product/manage', 'manage' )->name( 'admin.product.manage' );
			Route::get( '/product/review/manage', 'create' )->name( 'admin.product.review.manage' );
		} );
		Route::controller( ProductAttributeController::class)->group( function () {
			Route::get( '/productattribute/create', 'create' )->name( 'admin.productattribute.create' );
			Route::get( '/productattribute/manage', 'manage' )->name( 'admin.productattribute.manage' );
		} );
		Route::controller( ProductDiscountController::class)->group( function () {
			Route::get( '/discount/create', 'create' )->name( 'admin.discount.create' );
			Route::get( '/discount/manage', 'manage' )->name( 'admin.discount.manage' );
		} );
	} );

require __DIR__ . '/auth.php';
