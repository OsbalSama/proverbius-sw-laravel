<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'type',
        'amount',
        'stock',
        'visible',
        'locked',
        'slug',
        'user_id',
    ];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_account');
    }
}
