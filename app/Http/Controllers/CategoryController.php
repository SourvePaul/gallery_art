<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public $category;
    public function addCategory() {
        return view('admin.category.add-Category');
    }

    public function newCategory(Request $request) {
        $category = new Category();
       $category -> category_name = $request->category_name;
       $category->save();
       return back()->with('message','Category Added Successfully');
    }

    public function manageCategory() {
        return view('admin.category.manage-category',[
            'categories' => Category::all()
        ]);
    }

    public function statusCategory($id) {
        $category = Category::find($id);
        if ($category->status==1){
            $category->status=0;
            $category->save();
            return back();
        }
        else{
            $category->status=1;
            $category->save();
            return back();
        }
    }
    public function editCategory($id){
        return view('admin.category.edit-category',[
            'category' => Category::find($id)
        ]);
    }
    public function updateCategory(Request $request){
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->save();
        return redirect('/manage-category');
    }
    public function deleteCategory(Request $request){
        $category = Category::find($request->category_id);
        $category->delete();
        return back();
    }
}