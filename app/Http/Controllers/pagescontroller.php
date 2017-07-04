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
		$first = 'our';
		$last = 'school';
		$fullname = $first . " " . $last;
		$tel = '+49 241 ';


		$data = [];
		$data['fullname'] = $fullname;
		$data['tel'] = $tel;
		return view('pages.contact')->withData($data);
	}
	public function getNews() {
		return view('pages.news');
	}
	public function getHome() {
		return view('pages.home');
	}


}