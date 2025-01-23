<?php

use Illuminate\Support\Facades\Route;

Route::view( '/', 'welcome' );

Route::view( 'dashboard', 'dashboard' )
	->middleware( [ 'auth', 'verified', 'roleManger:customer' ] )
	->name( 'dashboard' );
Route::view( 'admin/dashboard', 'admin' )
	->middleware( [ 'auth', 'verified', 'roleManger:admin' ] )
	->name( 'admin' );
Route::view( 'vendor/dashboard', 'vendor' )
	->middleware( [ 'auth', 'verified', 'roleManger:vendor' ] )
	->name( 'vendor' );
Route::view( 'profile', 'profile' )
	->middleware( [ 'auth' ] )
	->name( 'profile' );

require __DIR__ . '/auth.php';
