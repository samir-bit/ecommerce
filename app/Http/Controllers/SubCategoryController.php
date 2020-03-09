<?php

namespace App\Http\Controllers;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function manageSubCategory(){
        $data = SubCategory::with('Category')->get();
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

}
