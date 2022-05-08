<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistResource extends Model
{
    protected $fillable = [
        'title',
        'resource_type',
        'resource_link',
        'playlist_id',
    ];

    public function playlist()
    {
        return $this->belongsTo(Playlist::class, 'playlist_id');
    }
}
