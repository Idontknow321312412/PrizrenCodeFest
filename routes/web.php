<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantAdminController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RecommendationController::class, 'index'])->name('index');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});


Route::get('/admin/create', [RestaurantAdminController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [RestaurantAdminController::class, 'store'])->name('admin.store');

Route::get('/add-restaurant', function () {
    return view('add_restaurant');
})->name('add.restaurant');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/add-item', [ItemController::class, 'showForm'])->name('addItemForm');
    Route::post('/dashboard/add-item', [ItemController::class, 'store'])->name('addItem');
});

Route::post('/process-city', [CityController::class, 'processCity'])->name('process.city');
Route::get('/city/{city}', [CityController::class, 'showCity'])->name('city.show');

Route::post('/process-city', [CityController::class, 'processCity'])->name('process.city');
Route::get('/city/{city}', [CityController::class, 'showCity'])->name('city.show');
Route::post('/process-city-2', [CityController::class, 'processCity2'])->name('process.city2');
Route::get('/city-2/{city}', [CityController::class, 'showCity2'])->name('city.show2');
Route::post('/process-city3', [CityController::class, 'processCity'])->name('process.cit3');
Route::get('/city3/{city}', [CityController::class, 'showCity'])->name('city.sho3');
Route::post('/process-city-4', [CityController::class, 'processCity2'])->name('process.city4');
Route::get('/city-4/{city}', [CityController::class, 'showCity2'])->name('city.show4');

Route::post('/process-form', [RestaurantAdminController::class, 'processForm'])->name('process.form');

Route::get('/restaurants', [RestaurantController::class, 'index'])->name('restaurants.index');
Route::get('/city/{city}/restaurant/{restaurant}', [RestaurantController::class, 'show'])->name('restaurant.show');
Route::get('/city/{city}/restaurant1/{restaurant}', [DashboardController::class, 'showRestaurantData'])->name('dashboard.restaurant');

Route::match(['get','post'],'/order', function () {
    return view('city.order');
})->name('order');




Route::get('/edit/{product_id}/', [ItemController::class, 'edit'])->name('edit');
Route::put('/update/{product_id}/', [ItemController::class, 'update'])->name('update');

Route::delete('/delete/{product_id}', [ItemController::class, 'delete'])->name('delete');

