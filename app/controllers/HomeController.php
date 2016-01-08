<?php
use Illuminate\Support\Facades\Auth;


class HomeController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
//----------------------------------------------------//
// Đăng ký//
//--------------------------------------------------//
	public function dangky(){
		return View::make('register');
	}
	public function postdangky()
	{
		$validator = Validator::make(Input::all(), User::$rules,User::$messages);
		if ($validator->passes()) {
			$thanhvien=new User;
			$thanhvien->first_name=Input::get('firstname');
			$thanhvien->last_name=Input::get('lastname');
			$thanhvien->email=Input::get('email');
			$thanhvien->password=Hash::make(Input::get('password'));
			$thanhvien->save();
			return Redirect::to('login');
		} else {
			return Redirect::to('dangky')->withErrors($validator)->withInput();
		}
	}
	function index () {
		if (Auth::check())
		{
			return Redirect::to('index/admin');
		} else {
			return View::make('Admin.login');
		}
	}

	//-------------------------------------------------------------------//
	//login

	public function login() {

		$email = Input::get('email');
		$password=Input::get('password');
		$validator = Validator::make(Input::all(), User::$rules1,User::$messages1);
		if ($validator->passes()) {
			if (Auth::attempt(array('email' => $email, 'password' => $password))) {
				return Redirect::to('index/admin');
			} else {

				return View::make('Admin.login')->with("error_message","Tên đăng nhập hoặc mật khẩu không đúng");
			}
		}else{
			return Redirect::to('login')->withErrors($validator)->withInput();
		}

	}

	// add page
    function addpage(){
        $users = DB::table('categoris')->get();
        return View::make('Admin.addpage')->with('add',$users);

    }
	function postaddpage(){
		$thanhvien=new Page;
		$nameimg = Input::file('images')->getClientOriginalName();
		$thanhvien->title_page=Input::get('title');
		$thanhvien->img_page=$nameimg;
		$thanhvien->des_page=Input::get('des');
        $thanhvien->cate_id=Input::get('cate');
		$thanhvien->content_page=Input::get('content');
		$thanhvien->save();
		Input::file('images')->move('img', $nameimg);
		$aa=Input::file('images')->getRealPath();
		return Redirect::to('listpage');


	}
	// trang admin

	public function admin(){
		$users = DB::table('pages')->get();
		return View::make('Admin.listpage')->with('n',$users);
	}
	// trang view
	public function tintuc(){
		$users = DB::table('pages')->paginate(4);

		return View::make('client')->with('new',$users);
	}
	// edit page

	public function editpage($id){
		$edit=DB::table('pages')->where('id_page',$id)->get();
		return View::make('edit_page')->with('new_edit',$edit);
	}
	// delete
	public function delete($id){
		DB::table('pages')->where('id_page',$id)->delete();
		return Redirect::to('listpage');
	}
	// update
	public function update($edit){

		$update=DB::table('pages')->where('id_page', $edit)
			->update(
				['title_page'=> Input::get('title'),

					'des_page'=> Input::get('des'),
					'content_page'=>Input::get('content')]
			);

		return Redirect::to('listpage');
	}
    public function listpage(){
        $users = DB::table('pages')->get();
        return View::make('Admin.listpage')->with('list',$users);
    }
    public function search(){
        $q = Input::get('insearch');
        $posts = DB::table('pages')->whereRaw(
        "MATCH(title_page) AGAINST(? IN BOOLEAN MODE)",array($q))->get();
        return View::make('Admin.search', compact('posts'));


    }
    public function baiviet($slug,$id){
        $t=DB::table('pages')->where('id_page',$id)->get();
        echo "<pre>";
            print_r($t);
        echo "</pre>";
    }

}