<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecommendationController extends Controller
{
    public function index()
    {
        // Get six random rows from the restaurants table
        $randomRestaurants = DB::table('restaurants')->inRandomOrder()->take(6)->get();

        // Pass the data to the view
        return view('index', ['randomRestaurants' => $randomRestaurants]);
    }
}
