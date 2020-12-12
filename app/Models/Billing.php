<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{

    public function user(){
        return $this->belongsTo(User::class, 'no_registrasi');
    }
}
