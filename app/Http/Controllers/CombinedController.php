<?php

// app/Http/Controllers/CombinedController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Restaurant2;
use App\Models\Product;
use App\Models\Product2 as Product2Model; // Renamed to avoid conflict
use Illuminate\Support\Facades\DB;

class CombinedController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get the logged-in user

        // Assuming the user's name is stored in a column named 'name'
        $tableName = strtolower(str_replace(' ', '_', $user->name));

        // Use Eloquent to fetch data from the user-specific table
        $tableData = Restaurant2::from($tableName)->get();

        // Fetch products for the cart
        $products = Product2Model::all();

        // Fetch cart data
        $cart = session()->get($this->getCartSessionKey());

        return view('dashboard', compact('tableData', 'products', 'cart'));
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
            ->select('item_name', 'item_price', 'item_picture')
            ->get();

        return view('city.restaurant', compact('restaurantData', 'items'));
    }

    public function addToCart(Request $request)
    {
        $product = Product2Model::findOrFail($request->id);
        $cart = session()->get($this->getCartSessionKey(), []);

        // Check if the item is in the cart and increment the quantity
        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity']++;
        } else {
            // If not in the cart, add it with quantity as 1
            $cart[$request->id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price
            ];
        }
        session()->put($this->getCartSessionKey(), $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function updateCart(Request $request)
    {
        // Updating cart logic
    }

    public function removeFromCart(Request $request)
    {
        // Removing from cart logic
    }

    // Helper function to get the dynamic session key based on the restaurant name
    private function getCartSessionKey()
    {
        $restaurantName = request()->route('restaurant');
        $tableName = strtolower(str_replace(' ', '_', $restaurantName));

        return "cart_$tableName";
    }
}
