<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data['products']=Product::all();
        return view ("admin.index",$data);
    }
   
    public function create()
    {
        return view("admin.insert");
    }

   
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required',
            'category_id'=>'required',
            'image'=>'required',
            'image2'=>'required',
            'price'=>'required',
            'offer_price'=>'required',
            'qty'=>'required',
            'description'=>'required',
            'designed_by'=>'required',
           
        ]);

        $filename = $request->image->getClientOriginalName();
        $request->image->move(public_path("images"),$filename);
        $products = new Product();
        $products->title = $request->title;
        $products->category_id = $request->category_id;
        $products->image = $filename;
        $products->image2 = $filename;
        $products->price = $request->price;
        $products->offer_price = $request->offer_price;
        $products->qty= $request->qty;
        $products->description= $request->description;
        $products->designed_by = $request->designed_by;
        $products->save();
        return redirect()->route("index");
    }
    

   
    public function show(Product $products)
    {
        $data['products']= Product::find($id);
        return view("show",$data); 
    }

    public function edit(Product $product)
    {
        
    }

   
    public function update(Request $request, Product $product)
    {
        
    }

   
    public function destroy(Product $product)
    {
    
    }
}
