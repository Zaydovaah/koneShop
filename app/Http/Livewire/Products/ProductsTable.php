<?php

namespace App\Http\Livewire\Products;

use App\Product;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ProductsTable extends LivewireDatatable
{
    public $model = Product::class;

    public function columns()
    {
        //
    }
}