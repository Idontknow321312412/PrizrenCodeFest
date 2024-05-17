<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;

class RestaurantAdminController extends Controller
{
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'owner' => 'required|string|max:255',
            'operating_cities' => 'required|array',
            'phone_nr' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|unique:restaurants,password',
        ]);

        $locations_nr = $request->input('operating_cities');
        $hashedPassword = Hash::make($request->input('password'));

        DB::table('restaurants')->insert([
            'name' => $request->input('name'),
            'owner' => $request->input('owner'),
            'operating_cities' => implode(' ', $request->input('operating_cities')),
            'phone_nr' => $request->input('phone_nr'),
            'email' => $request->input('email'),
            'password' => $hashedPassword,
        ]);


        $tableName = strtolower(str_replace(' ', '_', $request->input('name')));
        Schema::create($tableName, function ($table) {
            $table->id();
            $table->string('item_name');
            $table->string('item_price');
            $table->string('item_picture');
            $table->timestamps();
            
        });

        return redirect()->route('add.restaurant')->with('success', 'Restaurant and table created successfully');
    }
}
