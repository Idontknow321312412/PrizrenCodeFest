<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index(){
        $items = Product::all();

        return view('index', compact('items'));
    }
    public function addItemToCart($id){
        $item = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])){
            $cart[$id]['quantity']++;
        }
        else{
            $cart[$id] = [
                "id" => $id -> id,
                "name" => $item -> item_name,
                "price" => $item -> item_price,
                "quantity" => 1
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('sucess', 'Item Added to cart');
    }
}
