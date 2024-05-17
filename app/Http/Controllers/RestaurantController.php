<?php

// app/Http/Controllers/RestaurantController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        // Retrieve all restaurants from the database
        $allRestaurants = Restaurant::all();

        // Load the main view with all restaurants
        return view('city.show', compact('allRestaurants'));
    }

    public function show($city, $restaurantName, $restaurantPicture)
    {
        // Retrieve restaurant details from the database
        $restaurantDetails = Restaurant::where('name', $restaurantName)->first();

        if (!$restaurantDetails) {
            abort(404); // Handle restaurant not found
        }

        // Load the restaurant view with details
        return view('city.restaurant', compact('restaurantDetails'));
    }
}

