<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CategoriesTable extends LivewireDatatable
{
    public $model = Category::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')->searchable(),

            Column::name('name')->searchable(),

            Column::name('description')->searchable(),

            DateColumn::name('created_at')->searchable(),

            Column::callback(['id', 'name'], function ($id, $name) {
                return view('livewire.categories.data-table', ['id' => $id, 'name' => $name]);
            })
        ];
    }
}