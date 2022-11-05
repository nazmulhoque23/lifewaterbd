<?php

namespace App\Http\Controllers\Dahsboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Brand;

class ProductController extends Controller
{
    public function index()
    {
        $categories = SubCategory::all();
        $brands = Brand::all();
        $products = Product::with('category')->with('brand')->get();
        return view('dashboard.products.index', compact(['products','categories','brands']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'origin'=>'nullable',
            'membrane'=>'nullable',
            'capacity'=>'nullable',
            'dimension'=>'nullable',
            'technology'=>'nullable',
            'features'=>'required',
            'benefits'=>'nullable',
            'warranty'=>'required',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        if($image = $request->file('image'))
        {
            $destinationPath = 'frontend/images/products/';
            $profileImage = date('YmdHis') . ".". $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $product->image = "$profileImage";
        }

        $product->origin = $request->input('origin');
        $product->membrane = $request->input('membrane');
        $product->capacity = $request->input('capacity');
        $product->dimension = $request->input('dimension');
        $product->technology = $request->input('technology');
        $product->features = $request->input('features');
        $product->benefits = $request->input('benefits');
        $product->warranty = $request->get('warranty');
        $product->category_id = $request->get('category_id');
        $product->brand_id = $request->get('brand_id'); 

        $product->save();

        return redirect()->back()->with('success');
    }

    

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $input = $request->all();

        if($image = $request->file('image'))
        {
            $destinationPath = 'frontend/images/products/';
            $profileImage = date('YmdHis') . ".". $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        else{
            unset($input['image']);
        }
        $product->save($input);

        return redirect()->back()->with('success');
    }

}   
