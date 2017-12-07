<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('user.index',compact('categories'));
    }
    public function newUser(){
        $categories=Category::all();
        return view('user.userRegister',compact('categories'));
    }
    public function create(Request $request){
    $this->validate($request,[
        'name' => 'required|alpha_dash|min:4',
        'email'=>'required|email',
        'password'=>'required|min:5'
    ]);
    $user =new User();
    $user->name     =   $request->name;
    $user->email    =   $request->email;
    $user->password =   bcrypt($request->password);
    $user->save();
    auth()->login($user);

        return redirect('/');
    }
    public function login(){
        $categories=Category::all();

        return view('user.login',compact('categories'));
    }
    public function loginIn(Request $request){
        if(!  auth()->attempt(\request(['email','password']))){
            return back()->withErrors([
                'message'=>'Email or password not correct'
            ]);
        };
        return redirect('/');
    }
    public function logout(){
    auth()->logout();
    return redirect('/');
    }
    public function search(Request $request){
        $search=$request->search;
        $searchCats=Category::where('name','LIKE','%'.$search.'%')->orderBy('created_at')->get();
        $categories=Category::all();
        return view('user.results',compact('searchCats','categories'));

    }
}
