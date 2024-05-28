<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
   public function BlogPage($slug) {

    $blog = Blog::firstWhere('slug', $slug);

    // return $blog;
    return view('blogpage',compact('blog'));

   }
}
