class IndexController extends Controller {

	public function get_index() {
		return view('index');
	}

	public function get_admin() {
		return view('admin');
	}

}
