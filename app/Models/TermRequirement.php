<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermRequirement extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'group',
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(product::class, 'product_id');
    }

    public function isTerm()
    {
        return ($this->group == 'term');
    }

    public function isMinReq()
    {
        return ($this->group == 'req_min');
    }

    public function isMedReq()
    {
        return ($this->group == 'req_med');
    }
}
