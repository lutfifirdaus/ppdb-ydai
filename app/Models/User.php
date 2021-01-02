<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function csSma()
    {
        return $this->hasOne(CalonSiswaSma::class);
    }

    public function csSmp()
    {
        return $this->hasOne(CalonSiswaSmp::class);
    }

    public function csSd()
    {
        return $this->hasOne(CalonSiswaSd::class);
    }

    public function csTk()
    {
        return $this->hasOne(CalonSiswaTk::class);
    }

    public function billing()
    {
        return $this->hasOne(Billing::class);
    }

    public function prestasi()
    {
        return $this->hasMany(PrestasiDanBeasiswa::class);
    }

    public function pesan()
    {
        return $this->hasMany(Pesan::class,'from');
    }
}
