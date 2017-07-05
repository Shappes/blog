<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends Controller {

	public function __construct()
    {
        $this->middleware('auth');
    }

	public function getIndex() {
		return view('pages.login');
	}
	public function getContact() {
		return view('pages.contact');
	}
	public function getNews() {
		return view('pages.news');
	}
	public function getHome() {
		return view('pages.home');
	}


}