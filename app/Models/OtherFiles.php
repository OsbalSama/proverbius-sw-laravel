<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherFiles extends Model
{
    protected $fillable = [
        'title',
        'doc_type',
        'otherfile_link',
        'product_id',

    ];

    public function product()
    {
        return $this->belongsTo(product::class, 'product_id');
    }
}
