<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    // protected $fillable = ['username', 'name', 'email', 'password', 'phone', 'profile_picture', 'role'];

    protected $guarded = ['id'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //? relasi antara table (sementara)

    /**
     * Get all of the camps for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function camps()
    // {
    //     return $this->hasMany(Camp::class);
    // }

    /**
     * Get all of the bookings for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function bookings()
    // {
    //     return $this->hasMany(Booking::class);
    // }    
}