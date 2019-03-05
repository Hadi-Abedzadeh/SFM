<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function products_lists()
    {
        return $this->belongsTo(Product_list::class);

    }
}
