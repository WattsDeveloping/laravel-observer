<?php

namespace App\Observers;

use App\Models\Product;

class ProductObserver
{
    public function creating(Product $product): void
    {
        $product->slug = \Str::slug($product->name);
    }

    public function created(Product $product): void
    {
        $product->unique_id = 'PR-'.$product->id;
        $product->save();
    }
}
