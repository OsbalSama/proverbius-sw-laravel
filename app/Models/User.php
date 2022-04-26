<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'first_names',
        'last_names',
        'birthdate',
        'address',
        'visible',
        'locked',
        'slug',
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
            'slug' => Str::slug('root', '-'),
            'email' => 'root@root',
            'password' => Hash::make('notelasabes123'),
            'role' => 'admin',
        ]);
    }

    public static function createAdmin()
    {
        User::create([
            'name' => 'Osbal095',
            'slug' => Str::slug('Osbal095', '-'),
            'email' => 'osbaldo.toledoramos1995@gmail.com',
            'password' => Hash::make('Osbal095'),
            'role' => 'admin',
            'first_names' => 'Osbaldo',
            'last_names' => 'Toledo Ramos',
            'address' => 'Felipe pescador #23 Interior C, Colonia El Pinal, Teziutlán, Puebla. ',
            'birthdate' => '1995-08-27',
            'cel_phone' => '231-174-1481',
            'home_phone' => '231 313-0113',
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

    public function hasFullInfo()
    {
        return ($this->first_names != null && $this->last_names != null && $this->birthdate != null && $this->address != null);
    }

    public function Products()
    {
        return $this->hasMany(product::class);
    }
}
