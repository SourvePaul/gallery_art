<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryImage;
use Illuminate\Http\Request;

class GalleryArtController extends Controller
{
    public function index() {
        $data = [
            'categories' => Category::where('status',1)
            ->get(),
            'imageCategories'=> CategoryImage::with('category')
            ->get()
        ];
        return view('frontEnd.home.home',$data);
    }
}