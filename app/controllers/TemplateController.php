<?php


class TemplateController extends \BaseController {

	public function addcate()
	{
        return View::make('Admin.addcate');
	}
    public function postcate(){
        $cate=new Categori;
        $cate->cate_name=Input::get('catename');
        $cate->save();
    }
    public function home(){
        return View::make('Admin.home');
    }
    public static function nav(){
        $nav = DB::table('categoris')->get();
        return $nav;
    }




}