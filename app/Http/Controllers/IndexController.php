<?php namespace App\Http\Controllers;

class IndexController extends Controller {

	public function get_index() {
        //Get our bulletins to display
        $bulletins = Bulletin::orderBy("updated_at", "DESC");
		return view('index')->with(["bulletins" => $bulletins]);
	}

	public function get_admin() {
		return view('admin');
	}

}
