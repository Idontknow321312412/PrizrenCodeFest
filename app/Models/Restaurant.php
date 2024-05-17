<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner',
        'operating_cities',
        'phone_nr',
        'email',
        'password',
        'locations_nr',
        'restaurant_picture'
        // Add other fields as needed
    ];
}
