<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMainController extends Controller {
	public function index() {
		return view( 'admin.admin' );
	}
	public function setting() {
		return view( 'admin.setting' );
	}
	public function manageUser() {
		return view( 'admin.manage.user' );
	}
	public function manageStore() {
		return view( 'admin.manage.store' );
	}
	public function orderHistory() {
		return view( 'admin.order.history' );
	}
	public function cartHistory() {
		return view( 'admin.cart.history' );
	}
}
