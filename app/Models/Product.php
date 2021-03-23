<?php

namespace App\Models;

use Livewire\WithFileUploads;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use WithFileUploads;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'stock', 'price', 'user_id', 'discount', 'isAvailable', 'isPublished', 'photo'
    ];
}
