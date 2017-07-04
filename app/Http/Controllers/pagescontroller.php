<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view('pages.login');
	}
	public function getAbout() {
		$first = 'our';
		$last = 'school';
		$fullname = $first . " " . $last;
		$tel = '+49 241 ';


		$data = [];
		$data['fullname'] = $fullname;
		$data['tel'] = $tel;
		return view('pages.about')->withData($data);
	}
	public function getContact() {
		return view('pages.contact');
	}
	public function getHome() {
		return view('pages.home');
	}


}