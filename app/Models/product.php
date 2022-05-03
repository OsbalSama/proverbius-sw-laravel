<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'title',
        'description',
        'type',
        'amount',
        'stock',
        'visible',
        'locked',
        'slug',
        'version',
        'download_link',
        'user_id',
    ];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    //User Accounts Relations
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //Terms and Requirements Relations
    public function TermsRequirement()
    {
        return $this->hasMany(TermRequirement::class);
    }

    public function getAllMinReq()
    {
        return $this->TermsRequirement->filter(function($Reg) {
            return $Reg->group == 'req_min';
        });
    }

    public function getAllMedReq()
    {
        return $this->TermsRequirement->filter(function($Reg) {
            return $Reg->group == 'req_med';
        });
    }

    public function getAllTerms()
    {
        return $this->TermsRequirement->filter(function($Reg) {
            return $Reg->group == 'term';
        });
    }

    //Other Files Relations
    public function getOtherFiles()
    {
        return $this->hasMany(OtherFiles::class);
    }

    //Playlists Relations
    public function getPlaylists()
    {
        return $this->hasMany(Playlist::class);
    }
}
