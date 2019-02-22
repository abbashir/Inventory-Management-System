<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //make sure you are logged
     public function __construct()
    {
        $this->middleware('loggedin');
    }

    
    public function showCategory()
    {
    	$categories = Category::all();

    	return view('admin.home.pages.category.category',compact('categories'));
    }


    public function storeCategory(Request $request)
    {
    	$category = new Category();

    	$category->CategoryName = $request->category_name;
    	$category->CategoryDescription = $request->category_Description;
    	$category->PublicationStatus = $request->status;

    	$category->save();
    	return redirect('/category')->with('message','Category add has been successfull.'); 

        
    	
    }


    public function editCategory($id)
    {
    	$categoryByid = Category::where('id',$id)->first();
    	return view('admin.home.pages.category.categoryUpdate',compact('categoryByid'));
    }

    public function updateCategory(Request $request)
    {
    	$category = Category::find($request->CategoryId);

    	$category->CategoryName = $request->NewCategoryName;
    	$category->CategoryDescription = $request->NewCategoryDecs;
    	$category->PublicationStatus = $request->status;
        $category->save();
    	return redirect('/category')->with('message','brand update has been successfull.'); 
    }

    public function deleteCategory($id)
    {
    	$category = Category::find($id);
        $category->delete();
        return redirect('/category')->with('message','brand delete has been successfull.');
    }


    public function simplePage()
    {
        return view('admin.home.pages.simple');
    }
}
