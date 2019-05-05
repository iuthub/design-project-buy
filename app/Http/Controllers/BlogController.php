<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function category($slug){
        $category = Category::where('slug', $slug)->first();
        return view('pages.index', [
            'category'=> $category,
            'articles'=> $category->articles()->where('published', 1)->paginate(12)
        ]);
    }
}
