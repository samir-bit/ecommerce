<?php

namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function manageSubCategory(){
        $data = SubCategory::orderBy('id','DESC')->get();
        return view('admin.category.manage-sub-category', compact('data'));
    }
    public function addSubCategory(){
        $data = SubCategory::orderBy('id','DESC')->get();
        return view('admin.category.add-subcategory');
    }

}
