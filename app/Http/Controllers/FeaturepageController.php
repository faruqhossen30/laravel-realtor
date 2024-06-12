<?php

namespace App\Http\Controllers;

use App\Models\Feature\Feature;
use Illuminate\Http\Request;

class FeaturepageController extends Controller
{
    public function FeaturePage($id)
    {

        $feature = Feature::firstWhere('id', $id);

        // return  $feature;
        return view('featurepage', compact('feature'));
    }
}
