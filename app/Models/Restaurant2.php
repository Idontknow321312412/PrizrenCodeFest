<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant2 extends Model
{
    protected $table = 'restaurants'; // Specify the table name

    protected $fillable = [
        'email', 'password', // Add other columns as needed
    ];

    // Add any additional relationships, attributes, or methods as needed
}
