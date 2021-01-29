<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterBiaya extends Model
{
    use HasFactory;

    protected $table = 'master_biayas';

    public $timestamps = false;

    public function billing()
    {
        return $this->hasOne(Billing::class);
    }
}
