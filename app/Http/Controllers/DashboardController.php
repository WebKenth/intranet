<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function index() {
		return view('dashboard.index');
	}
	public function inbox() {
		return view('dashboard.inbox');
	}
	public function news() {
		return view('dashboard.news');
	}
	public function barcontrol() {
		return view('dashboard.barcontrol');
	}
	public function accounting() {
		return view('dashboard.accounting');
	}

}
