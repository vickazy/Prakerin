<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\user;
use Input;
use Validator;

class crudadmincontroller extends Controller
{
    public function index(Request $request){

    	$data = User::orderBY('id', 'desc')->paginate(3);
    	$data->setPath('tambahadmin'); 
    	return view('admin.tambahadmin', compact('data'));
    }

    public function create(){
    	return view('admin.createadmin');
    }

    public function edit($id){
    		$admin = user::find($id);
    		return view('admin.editadmin', compact('admin'));
    	
    }

    public function store(){
    	$rules = array(
			'email' => 'required|email|unique:users',
			'password' => 'required|same:password_confirm',
			'name' => 'required'
			);
			$validation = Validator::make(Input::all(), $rules);
			if ($validation->fails())
			{
				return Redirect('tambahadmin')
					->withErrors($validation)
					->withInput();
			}
			$user = new User;
			$user->email = Input::get('email');
			$user->password = Bcrypt(Input::get('password'));
			$user->name = Input::get('name');
			if ($user->save())
			{
				return Redirect('tambahadmin');
			}
    }

    public function update($id){
    	$rules = array(
			'email' => 'required|email',
			'password' => 'required|same:password_confirm',
			'name' => 'required'
			);
			$validation = Validator::make(Input::all(), $rules);
			if ($validation->fails())
			{
				return Redirect('tambahadmin')
					->withErrors($validation)
					->withInput();
			}
			$user = new User;
			$user->email = Input::get('email');
			$user->password = Bcrypt(Input::get('password'));
			$user->name = Input::get('name');
			if ($user->update())
			{
				return Redirect('tambahadmin');
			}
    }

    public function destroy($id){
    	$admin = User::find($id);
    	$admin->delete();
    	return redirect('tambahadmin');
    }
}
