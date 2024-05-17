<?php

// app/Http/Controllers/ItemController.php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Restaurant2;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{

    
    public function showForm()
    {
        return view('addItemForm');
    }
    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required|string|max:255',
            'item_price' => 'required|numeric',
            'item_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $user = auth()->user();
    
        $tableName = strtolower(str_replace(' ', '_', $user->name));
    
        $itemPicturePath = $request->file('item_picture')->store('item_pictures', 'public');
    
        $itemPictureName = basename($itemPicturePath);
    
        DB::table($tableName)->insert([
            'item_name' => $request->input('item_name'),
            'item_price' => $request->input('item_price'),
            'item_picture' => $itemPictureName,
        ]);
    
        return redirect()->route('dashboard')->with('success', 'Item added successfully!');
    }
    public function edit($product_id){
        $user = auth()->user();
    
        $tableName = strtolower(str_replace(' ', '_', $user->name));
        $product2 =  DB::table($tableName)->find($product_id);
        return view('editProduct', ['product' =>$product2]);
    }

    public function update(Request $request, $product_id){
        $user = auth()->user();
    
        $tableName = strtolower(str_replace(' ', '_', $user->name));
        $product2 =  DB::table($tableName)->find($product_id);


        $request->validate([
            'item_name' => 'required|string|max:255',
            'item_price' => 'required|numeric',
            'item_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $itemPicturePath = $request->file('item_picture')->store('item_pictures', 'public');

        $itemPictureName = basename($itemPicturePath);

        DB::table($tableName)
        ->where('id', $product_id)
        ->update([
            'item_name' => $request->input('item_name'),
            'item_price' => $request->input('item_price'),
            'item_picture' => $itemPictureName,
        ]);

        return redirect('/dashboard');
    }
    public function delete($product_id)
    {
        $user = auth()->user();

        $tableName = strtolower(str_replace(' ', '_', $user->name));
        
        DB::table($tableName)->where('id', $product_id)->delete();

        return redirect()->route('dashboard')->with('success', 'Item deleted successfully!');
    }
    
}

