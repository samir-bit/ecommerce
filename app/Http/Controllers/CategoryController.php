<?php

namespace App\Http\Controllers;
use App\Brand;
use App\category;


use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function manageCategory(){
       $data = category::orderBy('id','DESC')->get();
       return view('admin.category.manage-category', compact('data'));
   }
   public function addCategory(){
       return view('admin.category.add-category');
   }
    public function saveCategory(Request $request){
        $request->validate([
            'category'=>'required|unique:brands,brand_name'
        ]);
        $category= new Category();
        $category->category = $request->category;
        $category->category_slug = $this->slug_generator($request->category);
        $category->save();
        return back()->with('message','Success! Category saved successfully!');
    }
    public function categoryStatus($id,$status){
        $brand = Category:: find($id);
        $brand->status=$status;
        $brand->save();
        return response()->json(['message'=>'Success']);
    }
    //Brand Delete
    public function delete($id){
        $category = Category:: find($id);
        $category->delete();
        return back()->with('message','Success! Brand Name deleted successfully!');
    }
    public function edit($id){
        $row = Category:: find($id);
        return view('admin.category.edit-category', compact('row'));
    }
    public function updateCategory  (Request  $request){
        $category = Category:: find($request->id);
        $category->category = $request->category;
        $category->category_slug = $this->slug_generator($request->category);
        $category->save();
        return back()->with('message','Success! Category update successfully!');

    }

    public function slug_generator($string){
        $string= str_replace('','-',$string);
        $string= preg_replace('/[^A-Za-z0-9\-]/','',$string);
        return strtolower(preg_replace('/-+/','',$string));
    }

}
