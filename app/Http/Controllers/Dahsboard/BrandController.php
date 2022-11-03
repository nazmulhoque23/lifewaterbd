<?php

namespace App\Http\Controllers\Dahsboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('dashboard.brands.index', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $brand = new Brand();
        $brand->name = $request->input('name');
        if($image = $request->file('image'))
        {
            $destinationPath = 'frontend/images/brands/';
            $profileImage = date('YmdHis') . ".". $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $brand->image = "$profileImage";
        }
        $brand->save();
        return redirect()->back()->with('success');
    }
    
}
