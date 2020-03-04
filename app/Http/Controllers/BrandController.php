<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(){
        return view('admin.add_brand');
        }
    public function saveBrand(Request $request){
        $brand= new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_slug = $this->slug_generator($request->brand_name);
        $brand->save();
        return back()->with('message','Success! Brand name added successfully!');
    }
    public function manageBrand(){
       $brand = Brand::orderBy('id','DESC')->get();
        return view('admin.manage_brand', compact('brand'));
    }
    public function inactive($id){
    $brand = Brand:: find($id);
    $brand->status=0;
        $brand->save();
        return back()->with('message','Success! Brand inactived successfully!');
    }
    public function active($id){
        $brand = Brand:: find($id);
        $brand->status=1;
        $brand->save();
        return back()->with('message','Success! Brand actived successfully!');
    }


    public function slug_generator($string){
        $string= str_replace('','-',$string);
        $string= preg_replace('/[^A-Za-z0-9\-]/','',$string);
        return strtolower(preg_replace('/-+/','',$string));
    }
}
