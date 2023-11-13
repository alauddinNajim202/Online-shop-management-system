<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('admin.product.addproduct', compact('category'));
    }


    public function create(Request $request){

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
            'quantity' => 'required',
            'discount' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
        ]);

        // $imageName = time() . '.' . $request->image->extension();
        // $request->image->storeAs('images', $imageName, 's3');

        $path = public_path('images/');
        !is_dir($path) &&
            mkdir($path, 0777, true);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move($path, $imageName);

        $product  = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->quantity = $request->quantity;
        $product->discount = $request->discount;
        $product->image = $imageName;




        $product->save();



        return redirect()->route('admin.createproduct')->with('message','Product created successfully');
    }

    public function show(){
        $products = Product::all();
        return view('admin.product.allproduct', compact('products'));
    }


    public function edit($id){

        $product = Product::findOrFail($id);

        return view('admin.product.editproduct',compact('product'));
    }



    public function update(Request $request){

        $product_id = $request->product_id;

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'discount' => 'required',
            'image' => 'required',
        ]);

        $path = public_path('images/');
        !is_dir($path) &&
            mkdir($path, 0777, true);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move($path, $imageName);

        Product::findOrfail($product_id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'discount' => $request->discount,
            'image' =>  $imageName

        ]);



        return redirect()->route('admin.showproduct')->with('message','Product Updated successfully');

    }


    public function  delete($id){
        Product::findOrfail($id)->delete();

        return redirect()->route('admin.showproduct')->with('message','Product Deleted successfully');

    }

    // product search
    public function productSearch(Request $request){

        $product_search = $request->product_search;

        $products = Product::where('title','LIKE',"%$product_search%")->orWhere('category','LIKE',"%$product_search%")
        ->paginate(6);
        $comment = Comment::orderBy('id', 'DESC')->get();

        return view('frontend.home',compact('products','comment'));
    }


    public function allProduct(){


        //$comment = Comment::orderBy('id', 'DESC')->get();
        $products = Product::paginate(6);
        $comment = Comment::orderBy('id', 'DESC')->get();
        return view('frontend.allproduct',compact('products','comment'));
    }





}

