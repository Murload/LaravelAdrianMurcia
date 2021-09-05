<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function show(){
        $list = Category::all();
        return view ('category/list',['categories'=> $list]);
    }

    function __construct(){
        $this->middleware('auth');
    }

    function form($id=null){
        $category = new Category();
        if($id!=null){
        $category = Category::findOrFail($id);
        }
        return view('category/form',['category' => $category]);
    }


    function save(Request $request){

        // $request->validate([
        //     "name"=>'required|max:50',
        //    
        // ]);


        $category= new Category();
        if($request->id>0){
            $category=Category::findOrFail($request->id);
        }
        $category-> name = $request-> name;
        $category-> description = $request-> description;

        $category->save();

        return redirect('/categories')->with('message','Save Category');
    }

    function delete($id){
        //select*from products where id-$id;
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/categories')->with('message','Delete Category');

    }
    
}
