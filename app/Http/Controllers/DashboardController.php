<?php
// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Restaurant2;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Fetch products
        return view('dashboard', ['products' => $products]);
    }
    public function dashboard()
    {
        $user = Auth::user(); // Get the logged-in user

        // Assuming the user's name is stored in a column named 'name'
        $tableName = strtolower(str_replace(' ', '_', $user->name));

        // Use Eloquent to fetch data from the user-specific table
        $tableData = Restaurant2::from($tableName)->get();

        return view('dashboard', compact('tableData'));
    }
    public function showRestaurantData($city, $restaurantName)
    {
        // Assuming the user's name is stored in a column named 'name'
        $tableName = strtolower(str_replace(' ', '_', $restaurantName));

        // Use Eloquent to fetch data from the "restaurants" table based on the restaurant name
        $restaurantData = Restaurant2::where('name', $restaurantName)->first();

        if (!$restaurantData) {
            abort(404); // Handle restaurant not found
        }

        // Now, let's fetch specific columns from the associated table
        $items = DB::table($tableName)
            ->select('id', 'item_name', 'item_price', 'item_picture')
            ->get();

        return view('city.restaurant', compact('restaurantData', 'items'));
    }

}
