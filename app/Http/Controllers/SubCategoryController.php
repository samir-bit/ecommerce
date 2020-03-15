<?php

namespace App\Http\Controllers;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function manageSubCategory(){
        $data = Category::all();
        return view('admin.category.manage-sub-category', compact('data'));
    }

     public function addSubCategory(){
        $categories= Category::where('status', 1)
            ->orderBy('id','DESC')
            ->get();
        return view('admin.category.add-subcategory', compact('categories'));
    }
    public function saveSubCategory(Request $request){
        $request->validate([
            'sub_cat'=>'required|unique:brands,brand_name'
        ]);
        $category= new SubCategory();
        $category->cat_id = $request->cat_id;
        $category->sub_cat = $request->sub_cat;
        $category->save();
        return back()->with('message','Success!Sub Category saved successfully!');
    }
    public function edit($id){
        $row = SubCategory:: find($id);
        return view('admin.category.edit-subcategory', compact('row'));
    }
    public function updateSubCategory  (Request  $request){
        $category = SubCategory:: find($request->id);
        $category->sub_cat = $request->sub_cat;
        $category->save();
        return back()->with('message','Success! Sub Category update successfully!');

    }
    public function deleteSubCategory($id){
        $category = SubCategory:: find($id);
        $category->delete();
        return back()->with('message','Success! Sub Category deleted successfully!');
    }
    public function subcategoryStatus($id,$status){
        $brand = SubCategory:: find($id);
        $brand->status=$status;
        $brand->save();
        return response()->json(['message'=>'Success']);
    }


}
