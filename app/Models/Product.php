<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Product extends Model
{
    use HasFactory;

    public function getTable()
    {
        // Use the authenticated user's name to create a dynamic table name
        $tableName = Auth::check() ? Auth::user()->name : 'products';

        return $tableName;
    }
    protected $fillable = [
        'id',
        'item_name',
        'item_price',
        'item_picture'
    ];
}
