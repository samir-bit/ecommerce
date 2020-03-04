<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(){
        return view('admin.add_brand');
        }
        //Slug Generator replace(-)
    public function saveBrand(Request $request){
        $request->validate([
            'brand_name'=>'required|unique:brands,brand_name'
        ]);
        $brand= new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_slug = $this->slug_generator($request->brand_name);
        $brand->save();
        return back()->with('message','Success! Brand name added successfully!');
    }
    //Slug Generator replace(-)
    public function slug_generator($string){
        $string= str_replace('','-',$string);
        $string= preg_replace('/[^A-Za-z0-9\-]/','',$string);
        return strtolower(preg_replace('/-+/','',$string));
    }

    //Manage Brand page list serially
    public function manageBrand(){
       $brand = Brand::orderBy('id','DESC')->get();
        return view('admin.manage_brand', compact('brand'));
    }

    //Brand Inactive
    public function inactive($id){
    $brand = Brand:: find($id);
    $brand->status=0;
        $brand->save();
        return back()->with('message','Success! Brand inactived successfully!');
    }
    //Brand Active
    public function active($id){
        $brand = Brand:: find($id);
        $brand->status=1;
        $brand->save();
        return back()->with('message','Success! Brand actived successfully!');
    }
    //Brand Delete
    public function delete($id){
        $brand = Brand:: find($id);
        $brand->delete();
        return back()->with('message','Success! Brand Name deleted successfully!');
    }

    public function edit($id){
        $row = Brand:: find($id);
        return view('admin.brand_edit', compact('row'));
    }

    public function updateBrand (Request  $request){
        $brand = Brand:: find($request->id);
       $brand->brand_name = $request->brand_name;
       $brand->brand_slug = $this->slug_generator($request->brand_name);
       $brand->save();
       return back()->with('message','Success! Brand update successfully!');

   }


}
