<?php

namespace App\Models;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{

    protected $fillable = []; 

    protected $table = 'billings';

    public function user(){
        return $this->belongsTo(User::class, 'no_registrasi');
    }
}

class Log extends EloquentUserProvider {

    public $timestamps = false;

    public function getIpAddressAttribute($value)
    {
        return inet_ntop($value);
    }

    public function setIpAddressAttribute($value)
    {
        $this->attributes['ip_address'] = inet_pton($value);
    }
}
