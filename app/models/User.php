<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
class User extends \Eloquent implements UserInterface {
	use UserTrait;
	protected $fillable = ['users'];
	public $timestamps = false;
	public static $rules = array(
		'firstname'=>'required|alpha|min:2',
		'lastname'=>'required|alpha|min:2',
		'email'=>'required|email|unique:users',
		'password'=>'required'
	);
	public static $messages =array(
		'firstname.required'=>'Vui lòng nhập Tên',
		'lastname.required'=>'Vui lòng nhập Họ',
		'email.required'=>'Vui lòng nhập Email',
		'email.unique'=>'Email của bạn đã được đăng ký.Vui lòng chọn email khác',
		'password.required'=>'Vui lòng nhập Pass'
	);
	public static $rules1 = array(
		'email'=>'required',
		'password'=>'required'
	);
	public static $messages1 =array(
		'email.required'=>'Vui lòng nhập Email',
		'password.required'=>'Vui lòng nhập Pass'
	);
	public function testx(){
		$x=DB::table('users')->get();
		return $x;
	}
}