<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Faq\Faq;
use App\Models\Feature\Feature;
use App\Models\Package\Package;
use App\Models\Setting\WebsiteSetting;
use App\Models\Testmonial\Testmonial;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
   public function Homepage(){
    $site       = WebsiteSetting::first();
    $faqs       = Faq::all();
    $blogs      = Blog::latest()->get();
    $featutes   = Feature::get();
    $testmonials = Testmonial::get();
    $packages    = Package::with('service')->get();
    // return $packages ;
    return view('homepage',compact('site','faqs','blogs','featutes','testmonials','packages'));

   }
}
