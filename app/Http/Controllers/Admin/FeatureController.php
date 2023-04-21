<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;

class FeatureController extends Controller
{
    public function index(){
        $features = Feature::all();
        return view('admin.features.create', compact('features'));
    }
}
