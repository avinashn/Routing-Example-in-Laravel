<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class IndexController extends Controller {
	public function index() {
		return view ( 'welcome' );
	}
	public function getFromDb() {
		$users = User::all();
		return view('sample')->withDetails($users);
		
	}
}
