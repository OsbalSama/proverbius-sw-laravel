<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function createRoot()
    {
        User::create([
            'name' => 'root',
            'email' => 'root@root',
            // 'password' => Hash::make('x3ESKldKn#eO'),
            'password' => Hash::make('notelasabes123'),
            'role' => 'admin',
        ]);
    }
    public function isClient()
    {
        return $this->role == 'client';
    }

    public function isPartner()
    {
        return $this->role == 'partner';
    }

    public function isAdmin()
    {
        return $this->role == 'admin';
    }

    public function isRoot()
    {
        return ($this->name == 'root') && ($this->email == 'root@root') && ($this->role == 'admin');
    }

    public function isLogged()
    {
        return (Auth::Check()) && (Auth::user()->name == $this->name) && (Auth::user()->email == $this->email);
    }
}
