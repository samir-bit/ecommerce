<?php

namespace App\Http\Controllers;
use App\Category;
use App\SubCategory;
use App\SubsubCategory;
use Illuminate\Http\Request;


class SubsubCategoryController extends Controller
{
   public function manageSubsubCategory(){
       $sub_subcategories = SubsubCategory::orderBy('id','DESC')->get();
       return view('admin.category.manage-sub-subcategory',[
           'sub_subcategories' => $sub_subcategories
       ]);

   }
  public function saveSubsubCategory(Request $request){
      $request->validate([
          'sub_sub_cat'=>'required|unique:brands,brand_name'
      ]);
      $category= new SubCategory();
      $category->cat_id = $request->cat_id;
      $category->sub_cat = $request->sub_cat;
      $category->sub_sub_cat = $request->sub_sub_cat;
      $category->save();
      return back()->with('message','Success!Sub Category saved successfully!');
    }
   public function addSubsubCategory(){
       $categories = Category::orderBy('id','DESC')->get();
       $subcategories = SubCategory::orderBy('id','DESC')->get();
       $subsubcategories = SubsubCategory::orderBy('id','DESC')->get();
        return view('admin.category.add-sub-subcategory',[
            'categories' => $categories,
            'subcategories' => $subcategories,
            'subsubcategories'=>$subsubcategories,
        ]);
   }
}
