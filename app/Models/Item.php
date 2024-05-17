<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'your_items_table_name'; // Replace with your actual table name

    // Add any other model-specific configurations, relationships, or methods here

    public function deleteItem($id)
    {
        // Find the item by ID
        $item = $this->findOrFail($id);

        // Delete the item
        $item->delete();

        return true; // Indicate successful deletion
    }
}
