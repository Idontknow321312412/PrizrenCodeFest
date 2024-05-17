<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product2 extends Model
{
    protected $table = 'restaurants'; // Specify the table name

    protected $fillable = [
        'email', 'password', // Add other columns as needed
    ];
}
