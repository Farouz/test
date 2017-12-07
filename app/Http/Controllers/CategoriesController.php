<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('categories.index',compact('categories'));
    }
    public function create(Request $request){
        $this->validate($request,[
            'name'=>'required|min:5'
        ]);
        $category=new Category();
        $category->name=\request('name');
        $category->save();
        return redirect('/index')->with('message','Category Created');
    }
    public function destroy($id){
        Category::destroy($id);
        return redirect('/index')->with('message','Category Deleted');
    }
    public function show($id){
        $category=Category::find($id);
        $categories=Category::all();
        return view('categories.show',compact('category','categories'));
    }
}
