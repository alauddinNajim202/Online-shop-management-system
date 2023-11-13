<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(){
        return view('admin.category');
    }

    public function create(Request $request){

        $request->validate([
            'category_name' => 'required',

        ]);
        Category::insert([
            'category_name' => $request->category_name,

        ]);

        return redirect()->route('admin.showcategory')->with('message','Category created successfully');
    }

    public function show(){
        $categories = Category::all();
        return view('admin.all_category',compact('categories'));
    }

    public function edit($id){
        $category = Category::findOrFail($id);
       return view('admin.edit',compact('category'));
    }

    public function update(Request $request){

        $category_data = $request->category_id;

        $request->validate([
            'category_name' => 'required',
        ]);

        Category::findOrfail($category_data)->update([
            'category_name' => $request->category_name,

        ]);

        return redirect()->route('admin.showcategory')->with('message','Category update successfully');

    }



    public function delete($id){
        Category::findOrFail($id)->delete();

        return redirect()->route('admin.showcategory')->with('message','Category Deleted successfully');

    }





}
