<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class image_product extends Model
{
    use HasFactory;

    protected $table = 'image_products';
    protected $fillable = [
        'id_product', 'image'
    ];


}
