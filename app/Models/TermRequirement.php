<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermRequirement extends Model
{
    use HasFactory;

    public function pruduct()
    {
        return $this->belongsTo(product::class, 'product_id');
    }
}
