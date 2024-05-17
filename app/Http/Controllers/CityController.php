<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function processCity(Request $request)
    {
        $selectedCity = $request->input('city');

        if (empty($selectedCity)) {
            return redirect()->back()->with('error', 'Select your city first');
        }

        return redirect()->route('city.show', ['city' => $selectedCity]);
    }

    public function showCity($city)
    {
        $restaurants = DB::table('restaurants')
            ->where('operating_cities', 'like', '%' . $city . '%')
            ->get();

        return view('city.show', compact('city', 'restaurants'));
    }
    public function processCity2(Request $request)
    {
        $selectedCity = $request->input('city');

        if (empty($selectedCity)) {
            return redirect()->back()->with('error', 'Select your city first');
        }

        return redirect()->route('city.show2', ['city' => $selectedCity]);
    }

    public function showCity2($city)
    {
        $restaurants = DB::table('restaurants')
            ->where('operating_cities', 'like', '%' . $city . '%')
            ->get();

        return view('city.show', compact('city', 'restaurants'));
    }

    public function processCity3(Request $request)
    {
        $selectedCity = $request->input('city');

        if (empty($selectedCity)) {
            return redirect()->back()->with('error', 'Select your city first');
        }

        return redirect()->route('city.restaurant3', ['city' => $selectedCity]);
    }

    public function showCity3($city)
    {
        $restaurants = DB::table('restaurants')
            ->where('operating_cities', 'like', '%' . $city . '%')
            ->get();

        return view('city.restaurant', compact('city', 'restaurants'));
    }

    public function processCity4(Request $request)
    {
        $selectedCity = $request->input('city');

        if (empty($selectedCity)) {
            return redirect()->back()->with('error', 'Select your city first');
        }

        return redirect()->route('city.restaurant4', ['city' => $selectedCity]);
    }

    public function showCity4($city)
    {
        $restaurants = DB::table('restaurants')
            ->where('operating_cities', 'like', '%' . $city . '%')
            ->get();

        return view('city.restaurant', compact('city', 'restaurants'));
    }
}
