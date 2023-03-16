<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageCategoryController extends Controller
{
    public $categoryImageUpload;
    public function index() {
        return view('admin.image.imageCategory',[
            'Categories' => Category::where('status',1)
            ->orderby('id','desc')
            ->get()
    ]);
    
    }

    public function newImage(Request $request) {
        $categoryImageUpload = new CategoryImage();
        $categoryImageUpload->category_id = $request->category_id;
        $categoryImageUpload->cImage = $this->saveImage($request);
       $categoryImageUpload->save();
       return back()->with('message','Category Image Uploaded Successfully');
    }

    public function saveImage($request) {
        $cImage=$request->file('cImage');
        $imageName=rand().'.'.$cImage->getClientOriginalExtension();
        $directory='adminAssets/upload/category-image/';
        $imgUrl=$directory.$imageName;
        $cImage->move($directory,$imageName);
        return $imgUrl;
    }

    public function manageImage() {
        $category_images = DB::table('category_images')
            ->join('categories','category_images.category_id','categories.id')
            ->select('category_images.*','categories.category_name')
            ->orderBy('id','desc')
            ->get();
        return view('admin.image.manageImageCategory',[
            'category_images' => $category_images
        ]);
    }

    public function editImage($id){
        return view('admin.image.editCategoryImage',[
            'categoryimage' => CategoryImage::find($id),

            'categories' => Category::where('status',1)
                ->orderby('id','desc')
                ->get(),
        ]);
    }
    public function updateImage(Request $request){
        $categoryImageUpdate = CategoryImage::find($request->categoryimage_id);
        // $categoryImageUpdate->category_id = $request->category_id;
        // if ($request->file('cImage')){
        //     unlink($categoryImageUpdate->cImage);
        //     $categoryImageUpdate->cImage = $this->saveImage($request);
        // }
        // $categoryImageUpdate->save();
        // return redirect('/manage-image');

        if($categoryImageUpdate){
            $categoryImageUpdate->category_id = $request->category_id;
        
            if ($request->file('cImage')){
            unlink($categoryImageUpdate->cImage);
            $categoryImageUpdate->cImage = $this->saveImage($request);
        }
        $categoryImageUpdate->save();
        return redirect('/manage-image');
        }
    }

    public function deleteImage(Request $request){
        $categoryImageDelete = CategoryImage::find($request->categoryimage_id);
        unlink($categoryImageDelete->cImage);
        $categoryImageDelete->delete();
        return back();
    }
}