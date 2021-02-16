<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function AddCategory(){
    	return view('back.includes.AddCategory');
    }
    public function storCategory(Request $request){
    	$Category = new Category();
    	$Category->CategoryName=$request->CategoryName;
    	$Category->CategoryDescription=$request->CategoryDescription;
    	$Category->PublicationStatus=$request->PublicationStatus;
    	$Category->save();

    }
    public function ManageCategory(){
        $Category=Category::all();
        return view('back.includes.manageCategory',['Category'=>$Category]);
    }
    public function deleteCategory($id){
        $Category=Category::find($id);
        $Category->delete();
        return back();

    }
    public function editCategory($id){
        $Category=Category::find($id);
        return view('back.includes.editCategory',['Category'=>$Category]);
        
    }
    public function updateCategory(Request $request){
        $Category=Category::where('id',$request->hiddinName)->first();
        $Category->CategoryName=$request->CategoryName;
        $Category->CategoryDescription=$request->CategoryDescription;
        $Category->PublicationStatus=$request->PublicationStatus;
        $Category->save();
        return back();

    }
}
