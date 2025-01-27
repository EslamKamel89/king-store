<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller {
	public function manageProduct() {
		return view( 'admin.product.manage' );
	}
	public function manageReview() {
		return view( 'admin.product.manage_product_review' );
	}
}
